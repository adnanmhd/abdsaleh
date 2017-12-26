<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper('form','url');
        $this->load->model('layananModel');
        $this->load->model('beritaModel');
        $this->load->model('galeriModel');
        $autoload['helper'] = array('url');
    }

	public function index()
	{
		$data['menu'] = 'home';
		$data['berita'] = $this->beritaModel->getBerita(null, null);
		$data['keberangkatan'] = $this->layananModel->getKeberangkatan();
		$data['kedatangan'] = $this->layananModel->getKedatangan();
		$data['photo'] =  $this->galeriModel->getGaleri();
		$this->load->view('header', $data);
		$this->load->view('home');
		$this->load->view('footer');
	}

}

