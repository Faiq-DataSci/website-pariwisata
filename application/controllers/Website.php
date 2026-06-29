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
		$data['title'] = 'home';

		$this->load->view('website_public/layout/header', $data);
		$this->load->view('website_public/home', $data);
		$this->load->view('website_public/layout/footer1', $data);
	}

	public function destinations()
	{
		$data['title'] = 'Destinations';

		$this->load->view('website_public/layout/header', $data);
		$this->load->view('website_public/destinations', $data);
	}

	public function blog()
	{
		$data['title'] = 'Blog';

		$this->load->view('website_public/layout/header', $data);
		$this->load->view('website_public/blog', $data);
	}

	public function about()
	{
		$data['title'] = 'About Us';

		$this->load->view('website_public/layout/header', $data);
		$this->load->view('website_public/about', $data);
		$this->load->view('website_public/layout/footer', $data);
	}
}
