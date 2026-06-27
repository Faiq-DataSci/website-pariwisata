<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth1 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Tidak lagi menggunakan M_Auth/Database
    }

    public function index()
    {
        // Jika sudah login, langsung ke admin
        if ($this->session->userdata('status') == "login") {
            redirect('admin');
        }
        $this->load->view('admin/v_login');
    }

    public function proses()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Pengecekan Login Statis (Tanpa Database)
        if ($username == 'admin' && $password == 'password') {
            $data_session = array(
                'nama' => $username,
                'status' => "login"
            );

            $this->session->set_userdata($data_session);
            redirect('admin');
        } else {
            $this->session->set_flashdata('error', 'Username atau password salah!');
            redirect('auth1');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth1');
    }
}
