<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function login()
    {
        $this->load->view('auth/login');
    }

    public function process_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('users', [
            'username' => $username,
            'password' => $password
        ])->row();

        if($user)
        {
            $this->session->set_userdata('login', true);

            redirect('website');
        }
        else
        {
            echo "Username atau Password salah";
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('website');
    }
}