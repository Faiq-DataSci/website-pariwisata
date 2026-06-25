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
        $this->load->view('admin/tampilan_admin', $data);
    }

    public function gambar()
    {
        $data['swict'] = "ganti gambar";
        $this->load->view('admin/wisata', $data);
    }
}
