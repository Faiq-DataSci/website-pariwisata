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

        $data['title'] = 'home';
        $data['gallery_images'] = $this->M_gambar->get_data();
        $data['services'] = $this->M_wisata->get_data();

        $this->load->view('website_public/layout/header', $data);
        $this->load->view('website_public/home', $data);
        $this->load->view('website_public/layout/footer1', $data);
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

    public function about()
    {
        $data['title'] = 'About Us';

        $this->load->view('website_public/layout/header', $data);
        $this->load->view('website_public/about', $data);
        $this->load->view('website_public/layout/footer', $data);
    }
}
