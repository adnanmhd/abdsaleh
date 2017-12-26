<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfilBandara extends CI_Controller {

	
	public function index()
	{
		$data["menu"] = "profil";
		$this->load->view('header', $data);
		$this->load->view('profil-bandara');
		$this->load->view('footer');	
	}
}
