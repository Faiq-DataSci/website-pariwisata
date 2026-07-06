<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserAuth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_akun');
    }

    public function login()
    {
        if ($this->session->userdata('user_login') == true) {
            redirect('website');
        }
        $this->load->view('website_public/layout/header');
        $this->load->view('website_public/login');
        $this->load->view('website_public/layout/footer1');
    }

    public function proses_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->M_akun->verify_login($username, $password);

        if ($user) {
            // Update last login
            $this->M_akun->update_last_login($user->id_admin);

            // Set session
            $data_session = array(
                'user_id' => $user->id_admin,
                'username' => $user->username,
                'nama_lengkap' => $user->nama_lengkap,
                'user_login' => true
            );
            $this->session->set_userdata($data_session);

            $this->session->set_flashdata('success', 'Login berhasil! Selamat datang ' . $user->nama_lengkap);
            redirect('website');
        } else {
            $this->session->set_flashdata('error', 'Username atau password salah!');
            redirect('userauth/login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('success', 'Anda telah logout');
        redirect('userauth/login');
    }
}
