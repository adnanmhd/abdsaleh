<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layout extends CI_Controller {

	public function __construct() {
        parent::__construct();
    }

	public function index(){
		$data['menu'] = 'layout';
		$this->load->view('header', $data);
		$this->load->view('layout');
		$this->load->view('footer');
	}
	
}
