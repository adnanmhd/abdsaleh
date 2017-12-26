<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Travel extends CI_Controller {

	public function __construct() {
        parent::__construct();
    }

	public function index(){
		$data['menu'] = 'travel';
		$this->load->view('header', $data);
		$this->load->view('travel');
		$this->load->view('footer');	
	}
	
}
