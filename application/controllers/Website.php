<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Website extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->model('M_gambar');
        $this->load->model('M_wisata');
        $this->load->model('M_testimoni');
        $this->load->model('M_komentar');

        $data['title'] = 'home';
        $data['gallery_images'] = $this->M_gambar->get_data();
        $data['services'] = $this->M_wisata->get_data();
        $data['testimonials'] = $this->M_testimoni->get_data('Aktif');
        $data['comments'] = $this->M_komentar->get_data('Aktif');

        $this->load->view('website_public/layout/header', $data);
        $this->load->view('website_public/home', $data);
        $this->load->view('website_public/layout/footer1', $data);
    }

    public function submit_komentar()
    {
        if (!$this->session->userdata('user_login')) {
            redirect('userauth/login');
        }

        $this->load->model('M_komentar');
        $komentar = trim($this->input->post('komentar'));

        if (!empty($komentar)) {
            $data = array(
                'user_id' => $this->session->userdata('user_id'),
                'nama' => $this->session->userdata('nama_lengkap'),
                'komentar' => $komentar,
                'status' => 'Aktif'
            );
            $this->M_komentar->insert_data($data);
        }

        redirect('website');
    }

    public function destinations()
    {
        $data['title'] = 'Destinations';

        $this->load->view('website_public/layout/header', $data);
        $this->load->view('website_public/destinations', $data);
        $this->load->view('website_public/layout/footer', $data);
    }

    public function blog()
    {
        $this->load->model('M_artikel');
        $data['title'] = 'Blog';
        $data['articles'] = $this->M_artikel->get_data_by_status('Publikasi');

        $this->load->view('website_public/layout/header', $data);
        $this->load->view('website_public/blog', $data);
        $this->load->view('website_public/layout/footer', $data);
    }

    public function article($id = null)
    {
        if ($id === null) {
            redirect('website/blog');
        }

        $this->load->model('M_artikel');
        $artikel = $this->M_artikel->get_data_by_id($id);
        if (!$artikel) {
            show_404();
            return;
        }

        $data['title'] = $artikel->judul;
        $data['article'] = $artikel;

        $this->load->view('website_public/layout/header', $data);
        $this->load->view('website_public/article', $data);
        $this->load->view('website_public/layout/footer', $data);
    }

    public function about()
    {
        $data['title'] = 'About Us';

        $this->load->view('website_public/layout/header', $data);
        $this->load->view('website_public/about', $data);
        $this->load->view('website_public/layout/footer', $data);
    }
}
