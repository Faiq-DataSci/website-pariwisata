<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserAuth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_akun');
        $this->load->model('M_user');
        $this->config->load('oauth', true);
        $this->load->helper('url');
    }

    public function login()
    {
        if ($this->session->userdata('user_login') == true) {
            redirect('website');
        }

        $googleClientId = $this->config->item('google_client_id', 'oauth');
        $facebookAppId = $this->config->item('facebook_app_id', 'oauth');

        $data['google_login_url'] = !empty($googleClientId) && $googleClientId !== 'YOUR_GOOGLE_CLIENT_ID_HERE'
            ? site_url('userauth/google_login')
            : false;
        $data['facebook_login_url'] = !empty($facebookAppId) && $facebookAppId !== 'YOUR_FACEBOOK_APP_ID_HERE'
            ? site_url('userauth/facebook_login')
            : false;
        $data['social_login_enabled'] = $data['google_login_url'] || $data['facebook_login_url'];
        $this->load->view('website_public/login', $data);
    }

    public function proses_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->M_akun->verify_login($username, $password);

        if ($user) {
            $this->M_akun->update_last_login($user->id_admin);
            $this->set_user_session(array(
                'user_id' => $user->id_admin,
                'username' => $user->username,
                'nama_lengkap' => $user->nama_lengkap,
                'user_login' => true
            ));

            $this->session->set_flashdata('success', 'Login berhasil! Selamat datang ' . $user->nama_lengkap);
            redirect('website');
        }

        $this->session->set_flashdata('error', 'Username atau password salah!');
        redirect('userauth/login');
    }

    public function google_login()
    {
        $clientId = $this->config->item('google_client_id', 'oauth');
        if (empty($clientId)) {
            show_error('Google Client ID belum dikonfigurasi.');
        }

        $redirectUri = site_url('userauth/google_callback');
        $scope = urlencode('email profile');
        $authUrl = 'https://accounts.google.com/o/oauth2/v2/auth?response_type=code&client_id=' . $clientId . '&redirect_uri=' . urlencode($redirectUri) . '&scope=' . $scope . '&access_type=online&include_granted_scopes=true';
        redirect($authUrl);
    }

    public function google_callback()
    {
        $code = $this->input->get('code');
        if (!$code) {
            $this->session->set_flashdata('error', 'Google login dibatalkan atau tidak valid.');
            redirect('userauth/login');
        }

        $clientId = $this->config->item('google_client_id', 'oauth');
        $clientSecret = $this->config->item('google_client_secret', 'oauth');
        $redirectUri = site_url('userauth/google_callback');

        $tokenResponse = $this->fetch_oauth_token('https://oauth2.googleapis.com/token', array(
            'code' => $code,
            'client_id' => $clientId,
            'client_secret' => $clientSecret,
            'redirect_uri' => $redirectUri,
            'grant_type' => 'authorization_code'
        ));

        if (empty($tokenResponse['access_token'])) {
            $this->session->set_flashdata('error', 'Gagal mengambil token Google.');
            redirect('userauth/login');
        }

        $profile = $this->fetch_google_profile($tokenResponse['access_token']);
        if (empty($profile['sub']) || empty($profile['email'])) {
            $this->session->set_flashdata('error', 'Gagal membaca data profil Google.');
            redirect('userauth/login');
        }

        $user = $this->M_user->find_or_create_social_user(
            'google',
            $profile['sub'],
            $profile['email'],
            $profile['name'] ?? $profile['email'],
            $profile['picture'] ?? null
        );

        if ($user) {
            $this->set_user_session(array(
                'user_id' => $user->id_user,
                'username' => $user->email,
                'nama_lengkap' => $user->nama_lengkap,
                'user_login' => true,
                'provider' => 'google'
            ));
            $this->session->set_flashdata('success', 'Login Google berhasil!');
            redirect('website');
        }

        $this->session->set_flashdata('error', 'Login Google gagal.');
        redirect('userauth/login');
    }

    public function facebook_login()
    {
        $appId = $this->config->item('facebook_app_id', 'oauth');
        if (empty($appId)) {
            show_error('Facebook App ID belum dikonfigurasi.');
        }

        $redirectUri = site_url('userauth/facebook_callback');
        $scope = urlencode('email');
        $authUrl = 'https://www.facebook.com/' . $this->config->item('facebook_api_version', 'oauth') . '/dialog/oauth?client_id=' . $appId . '&redirect_uri=' . urlencode($redirectUri) . '&scope=' . $scope . '&response_type=code';
        redirect($authUrl);
    }

    public function facebook_callback()
    {
        $code = $this->input->get('code');
        if (!$code) {
            $this->session->set_flashdata('error', 'Facebook login dibatalkan atau tidak valid.');
            redirect('userauth/login');
        }

        $appId = $this->config->item('facebook_app_id', 'oauth');
        $appSecret = $this->config->item('facebook_app_secret', 'oauth');
        $redirectUri = site_url('userauth/facebook_callback');

        $tokenResponse = $this->fetch_oauth_token('https://graph.facebook.com/' . $this->config->item('facebook_api_version', 'oauth') . '/oauth/access_token', array(
            'client_id' => $appId,
            'redirect_uri' => $redirectUri,
            'client_secret' => $appSecret,
            'code' => $code
        ));

        if (empty($tokenResponse['access_token'])) {
            $this->session->set_flashdata('error', 'Gagal mengambil token Facebook.');
            redirect('userauth/login');
        }

        $profile = $this->fetch_facebook_profile($tokenResponse['access_token']);
        if (empty($profile['id']) || empty($profile['email'])) {
            $this->session->set_flashdata('error', 'Gagal membaca data profil Facebook.');
            redirect('userauth/login');
        }

        $user = $this->M_user->find_or_create_social_user(
            'facebook',
            $profile['id'],
            $profile['email'],
            $profile['name'] ?? $profile['email'],
            $profile['picture']['data']['url'] ?? null
        );

        if ($user) {
            $this->set_user_session(array(
                'user_id' => $user->id_user,
                'username' => $user->email,
                'nama_lengkap' => $user->nama_lengkap,
                'user_login' => true,
                'provider' => 'facebook'
            ));
            $this->session->set_flashdata('success', 'Login Facebook berhasil!');
            redirect('website');
        }

        $this->session->set_flashdata('error', 'Login Facebook gagal.');
        redirect('userauth/login');
    }

    private function fetch_oauth_token($url, $params)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
        $response = curl_exec($ch);
        curl_close($ch);
        return json_decode($response, true);
    }

    private function fetch_google_profile($accessToken)
    {
        $ch = curl_init('https://www.googleapis.com/oauth2/v3/userinfo');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $accessToken));
        $response = curl_exec($ch);
        curl_close($ch);
        return json_decode($response, true);
    }

    private function fetch_facebook_profile($accessToken)
    {
        $fields = 'id,name,email,picture.width(200).height(200)';
        $url = 'https://graph.facebook.com/' . $this->config->item('facebook_api_version', 'oauth') . '/me?fields=' . urlencode($fields) . '&access_token=' . urlencode($accessToken);
        $response = file_get_contents($url);
        return json_decode($response, true);
    }

    private function set_user_session($data)
    {
        $this->session->set_userdata($data);
    }

    public function logout()
    {
        $this->session->unset_userdata(array('user_id', 'username', 'nama_lengkap', 'user_login', 'provider'));
        $this->session->set_flashdata('success', 'Anda telah logout');
        redirect('userauth/login');
    }
}
