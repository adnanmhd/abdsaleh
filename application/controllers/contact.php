<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

        public function __construct() {
                parent::__construct();               
                $this->load->model('profilModel');                        
        }

	public function index() {
        	$this->load->library('googlemaps');
                
                $config['center'] = '-7.9374432,112.7114961';
                $config['zoom'] = '15';
                $this->googlemaps->initialize($config);

                
                $marker = array();
                $marker['position'] = '-7.9374432,112.7114961';
                
                $marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|9999FF|000000';
                $this->googlemaps->add_marker($marker);
                
                $data['map'] = $this->googlemaps->create_map();
                
		$data["menu"] = "contact";
		$this->load->view('header', $data);
		$this->load->view('contact');
                $this->load->view('footer');
	}

        function pesan(){
                $nama = $this->input->post('nama');
                $email = $this->input->post('email');
                $subject = $this->input->post('subject');
                $pesan = $this->input->post('pesan');

                $simpan = $this->profilModel->simpanPesan($nama, $email, $subject, $pesan);

                if ($simpan) {
                        $this->session->set_flashdata("pesan", "<div class=\"alert alert-success alert-dismissible\" id=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        Pesan Berhasil
                                <strong>Dikirim</strong>
                        </div>");
                        redirect(base_url()."contact");
                }else{
                        $this->session->set_flashdata("pesan", "<div class=\"alert alert-danger alert-dismissible\" id=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        Mohon maaf, pesan gagal
                                <strong>Dikirim</strong>
                        </div>");
                        redirect(base_url()."contact");       
                }

        }
}
