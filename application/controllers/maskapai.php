<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maskapai extends CI_Controller {

	public function __construct() {
        parent::__construct();        
        $this->load->model('layananModel');        
        $autoload['helper'] = array('url');
    }

	public function index(){
		$data['menu'] = 'maskapai';
		$data['maskapai'] = $this->layananModel->getMaskapai();
		$this->load->view('header', $data);
		$this->load->view('maskapai');
		$this->load->view('footer');	
	}


	function updateMaskapai(){
    	$id = $this->input->post('id');
    	$nama = $this->input->post('nama');
		$jenis = $this->input->post('jenis');
    	$kapasitas = $this->input->post('kapasitas'); 
    	$no_telp = $this->input->post('no_telp'); 

    	$target_path = "assets/images/maskapai/";
 		$target_path = $target_path.basename($_FILES['gambar']['name']);
 		move_uploaded_file($_FILES['gambar']['tmp_name'],$target_path);    

 		$image = $_FILES['gambar']['name'];			

    	$simpan = $this->layananModel->updateMaskapai($id, $nama, $jenis, $kapasitas, $no_telp, $image);
    	
        if ($simpan) {
            $this->session->set_flashdata("pesan", "<div class=\"alert alert-success alert-dismissible\" id=\"alert\">
			<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
			Data Berhasil
			        <strong>Diupdate</strong>
			</div>");
			
			redirect(base_url()."Admin/maskapai");					

        }        
    }

    function tambahMaskapai(){    	
    	$nama = $this->input->post('nama');
		$jenis = $this->input->post('jenis');
    	$kapasitas = $this->input->post('kapasitas'); 
    	$no_telp = $this->input->post('no_telp'); 

    	$target_path = "assets/images/maskapai/";
 		$target_path = $target_path.basename($_FILES['gambar']['name']);
 		move_uploaded_file($_FILES['gambar']['tmp_name'],$target_path);    

 		$image = $_FILES['gambar']['name'];			
		

		$tambah = $this->layananModel->tambahMaskapai($nama, $jenis, $kapasitas, $no_telp, $image);

		if ($tambah) {
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-success alert-dismissible\" id=\"alert\">
			<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
			Data Berhasil
			        <strong>Ditambahkan</strong>
			</div>");
            redirect(base_url()."Admin/maskapai");
		}

    }

     function hapusMaskapai($id){
		$hapus = $this->layananModel->hapusMaskapai($id);

        if ($hapus) {
            $this->session->set_flashdata("pesan", "<div class=\"alert alert-success alert-dismissible\" id=\"alert\">
			<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
			Data Berhasil
			        <strong>Dihapus</strong>
			</div>");
			redirect(base_url()."Admin/maskapai");
        }        
    }

    function tambahRute(){    	
    	$dari = $this->input->post('dari');
		$tujuan = $this->input->post('tujuan');    	

		$tambah = $this->layananModel->tambahRoute($dari, $tujuan);

		if ($tambah) {
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-success alert-dismissible\" id=\"alert\">
			<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
			Data Berhasil
			        <strong>Ditambahkan</strong>
			</div>");
            redirect(base_url()."Admin/rutePenerbangan");
		}

    }

    function hapusRute($id){
		$hapus = $this->layananModel->hapusRoute($id);

        if ($hapus) {
            $this->session->set_flashdata("pesan", "<div class=\"alert alert-success alert-dismissible\" id=\"alert\">
			<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
			Data Berhasil
			        <strong>Dihapus</strong>
			</div>");
			redirect(base_url()."Admin/rutePenerbangan");
        }        
    }

    function updateRute(){
    	$id = $this->input->post('id');
    	$dari = $this->input->post('dari');
		$tujuan = $this->input->post('tujuan');
    	
    	$simpan = $this->layananModel->updateRoute($id, $dari, $tujuan);
    	
        if ($simpan) {
            $this->session->set_flashdata("pesan", "<div class=\"alert alert-success alert-dismissible\" id=\"alert\">
			<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
			Rute Berhasil
			        <strong>Diupdate</strong>
			</div>");
			
			redirect(base_url()."Admin/rutePenerbangan");					

        }        
    }

    function tambahJadwalPenerbangan(){    	
    	$id_maskapai = $this->input->post('id_maskapai');
		$no_penerbangan = $this->input->post('no_penerbangan');    	
		$id_route = $this->input->post('id_route');    	
		$waktu_berangkat = $this->input->post('waktu_berangkat');    	
		$waktu_tiba = $this->input->post('waktu_tiba');    	
		$jenis = $this->input->post('jenis'); 

		$tambah = $this->layananModel->tambahJadwalPenerbangan($no_penerbangan, $id_maskapai, $id_route, $waktu_berangkat, $waktu_tiba);


		if ($jenis == 'keberangkatan') {
					
			if ($tambah) {
				$this->session->set_flashdata("pesan", "<div class=\"alert alert-success alert-dismissible\" id=\"alert\">
				<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
				Data Berhasil
				        <strong>Ditambahkan</strong>
				</div>");
	            redirect(base_url()."Admin/keberangkatan");
			}
		}	
		elseif ($jenis == 'kedatangan') {
			
			if ($tambah) {
				$this->session->set_flashdata("pesan", "<div class=\"alert alert-success alert-dismissible\" id=\"alert\">
				<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
				Data Berhasil
				        <strong>Ditambahkan</strong>
				</div>");
	            redirect(base_url()."Admin/kedatangan");
			}
		}

    }

    function hapusKedatangan($id){
		$hapus = $this->layananModel->hapusJadwalPenerbangan($id);

        if ($hapus) {
            $this->session->set_flashdata("pesan", "<div class=\"alert alert-success alert-dismissible\" id=\"alert\">
			<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
			Data Berhasil
			        <strong>Dihapus</strong>
			</div>");
			redirect(base_url()."Admin/kedatangan");
        } 
        else{
        	$this->session->set_flashdata("pesan", "<div class=\"alert alert-alert alert-dismissible\" id=\"alert\">
			<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
			Data Gagal
			        <strong>Dihapus</strong>
			</div>");
			redirect(base_url()."Admin/kedatangan");
        }       
    }

    function hapusKeberangkatan($id){
		$hapus = $this->layananModel->hapusJadwalPenerbangan($id);

        if ($hapus) {
            $this->session->set_flashdata("pesan", "<div class=\"alert alert-success alert-dismissible\" id=\"alert\">
			<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
			Data Berhasil
			        <strong>Dihapus</strong>
			</div>");
			redirect(base_url()."Admin/keberangkatan");
        }        
    }

    function editJadwalPenerbangan(){    	
		$no_penerbangan = $this->input->post('no_penerbangan');    			  
		$waktu_berangkat = $this->input->post('waktu_berangkat');    	
		$waktu_tiba = $this->input->post('waktu_tiba');    	
		$jenis = $this->input->post('jenis'); 

		$update = $this->layananModel->updateJadwalPenerbangan($no_penerbangan, $waktu_berangkat, $waktu_tiba);

		if ($jenis == 'keberangkatan') {
					
			if ($update) {
				$this->session->set_flashdata("pesan", "<div class=\"alert alert-success alert-dismissible\" id=\"alert\">
				<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
				Data Berhasil
				        <strong>Diupdate</strong>
				</div>");
	            redirect(base_url()."Admin/keberangkatan");
			}
		}	
		elseif ($jenis == 'kedatangan') {
			
			if ($update) {
				$this->session->set_flashdata("pesan", "<div class=\"alert alert-success alert-dismissible\" id=\"alert\">
				<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
				Data Berhasil
				        <strong>Diupdate</strong>
				</div>");
	            redirect(base_url()."Admin/kedatangan");
			}
		}	
    }

}
