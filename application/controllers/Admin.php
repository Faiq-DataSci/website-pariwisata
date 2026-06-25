<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $data['judul'] = "Halaman Admin Pantai Pecaron";
        $this->load->view('tampilan_admin', $data);
    }

    public function register()
    {
        $data['judul'] = "Halaman Registrasi";
        $this->load->view('register', $data);
    }

    public function login()
    {
        $data['judul'] = "Halaman Login";
        $this->load->view('login-admin', $data);
    }
}
