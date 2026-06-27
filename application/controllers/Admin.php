<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        if ($this->session->userdata('status') != "login") {
            redirect('auth1');
        }
    }

    public function index()
    {
        $data['title'] = "Dashboard";
        $data['active_menu'] = "dashboard";

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/v_admin', $data);
        $this->load->view('admin/layout/footer');
    }

    public function wisata()
    {
        $data['title'] = "Kelola Wisata";
        $data['active_menu'] = "wisata";

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/v_wisata', $data);
        $this->load->view('admin/layout/footer');
    }

    public function artikel()
    {
        $data['title'] = "Kelola Artikel";
        $data['active_menu'] = "artikel";

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/v_artikel', $data);
        $this->load->view('admin/layout/footer');
    }

    public function akun()
    {
        $data['title'] = "Kelola Akun";
        $data['active_menu'] = "akun";

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/v_akun', $data);
        $this->load->view('admin/layout/footer');
    }

    public function admin()
    {
        // Dialihkan ke kelola akun karena sudah digabung
        redirect('admin/akun');
    }

    public function gambar()
    {
        $data['title'] = "Kelola Gambar";
        $data['active_menu'] = "gambar";

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/v_gambar', $data);
        $this->load->view('admin/layout/footer');
    }

    public function kontak()
    {
        $data['title'] = "Kelola Kontak";
        $data['active_menu'] = "kontak";

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/v_kontak', $data);
        $this->load->view('admin/layout/footer');
    }

    public function logout()
    {
        $data['logout'] = "keluar";
        $this->load->view('admin/v_logout', $data);
    }
}
