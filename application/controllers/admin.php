<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
        parent::__construct();        
        $this->load->helper('form','url');
        $this->load->library('session');        
        $this->load->library('pagination');   
        $this->load->model('beritaModel');
        $this->load->model('profilModel');
        $this->load->model('galeriModel');
        $this->load->model('fasilitasModel');
        $this->load->model('layananModel');
        $this->load->model('laporanModel');
    }

	public function index()
	{
		$data['menu'] = 'home';
		$data['kotak_masuk'] = $this->profilModel->kotakMasuk();
		$this->load->view('Admin/header', $data);
		$this->load->view('Admin/index');
		$this->load->view('Admin/footer');
	}

	function login(){
		if ($this->input->post('username') && $this->input->post('username')) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$password = md5($password);

			$login = $this->profilModel->login($username, $password);

			if ($login == 0) {
				$this->session->set_flashdata("pesan", "<div class=\"alert alert-danger alert-dismissible\" id=\"alert\">
				<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"></button>
				Login <strong>Gagal</strong>. Username atau Password tidak sesuai
				</div>");
	            redirect(base_url()."Admin/login");
				
			}else{

				foreach ($login as $data) {
					$this->session->set_userdata('admin', $data->username); 
                    $this->session->set_userdata('login', 'admin'); 
                    redirect(base_url().'admin');                            
				}
				

			}

		}
		else{
			$this->load->view('Admin/form-login');
		}
	}

	function logout() {
		$this->session->sess_destroy();
		redirect(base_url()."admin/login");
	}

	function profile(){		
		$data['menu'] = 'profile';
		$data['kotak_masuk'] = $this->profilModel->kotakMasuk();		
		$data["profile"] = $this->profilModel->getUser();
		$this->load->view('Admin/header', $data);
		$this->load->view('Admin/profil');
		$this->load->view('Admin/footer');
	}

	function updateAkun(){
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password1 = $this->input->post('password1');
		$password2 = $this->input->post('password2');

		if ($password1 != $password2) {
			 $this->session->set_flashdata("pesan", "<div class=\"alert alert-danger alert-dismissible\" id=\"alert\">
			<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
			Password <strong>tidak sesuai</strong>
			</div>");
            redirect(base_url()."Admin/profile");
		}
		elseif ($password1 == null || $password2 == null){					

			$simpan = $this->profilModel->updateAkun($id, $username, $password1);

			if ($simpan) {	
				$this->session->set_userdata('admin', $username); 

				$this->session->set_flashdata("pesan", "<div class=\"alert alert-success alert-dismissible\" id=\"alert\">
				<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
				Profile <strong>berhasil diupdate</strong>
				</div>");
	            redirect(base_url()."Admin/profile");
			} else{
				$this->session->set_flashdata("pesan", "<div class=\"alert alert-warning alert-dismissible\" id=\"alert\">
				<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
				Profile <strong>gagal diupdate</strong>
				</div>");
	            redirect(base_url()."Admin/profile");
			}
		}
		else{
			$password1 = md5($password1);			

			$simpan = $this->profilModel->updateAkun($id, $username, $password1);

			if ($simpan) {
				$this->session->set_userdata('admin', $username); 
				
				$this->session->set_flashdata("pesan", "<div class=\"alert alert-success alert-dismissible\" id=\"alert\">
				<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
				Profile <strong>berhasil diupdate</strong>
				</div>");
	            redirect(base_url()."Admin/profile");
			} else{
				$this->session->set_flashdata("pesan", "<div class=\"alert alert-warning alert-dismissible\" id=\"alert\">
				<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
				Profile <strong>gagal diupdate</strong>
				</div>");
	            redirect(base_url()."Admin/profile");
			}
		}
	}

	function dataBerita(){

		$config['base_url'] = site_url('admin/dataBerita');
        $config['total_rows'] = $this->db->count_all('berita');
        $config['per_page'] = "4";        
        
        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<div class="center"> <ul class="pagination pagination-sm">';
		$config['full_tag_close'] = '</ul></div>';
		$config['prev_link'] = '&laquo;';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$config['next_link'] = '&raquo;';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data['berita'] = $this->beritaModel->getBerita($data['page'], $config['per_page']);	


		$data['menu'] = 'databerita';
		$data['kotak_masuk'] = $this->profilModel->kotakMasuk();		
		$this->load->view('Admin/header', $data);
		$this->load->view('Admin/databerita');
		$this->load->view('Admin/footer');
	}

	function detailBerita($id){
		$data['menu'] = 'databerita';
		$data['kotak_masuk'] = $this->profilModel->kotakMasuk();
		$data["berita"] = $this->beritaModel->getBeritaByID($id);
		$this->load->view('Admin/header', $data);
		$this->load->view('Admin/detailberita');
		$this->load->view('Admin/footer');	
	}

	function editBerita($id){
		$data['menu'] = 'databerita';
		$data['kotak_masuk'] = $this->profilModel->kotakMasuk();
		$data["berita"] = $this->beritaModel->getBeritaByID($id);
		$this->load->view('Admin/header', $data);
		$this->load->view('Admin/editberita');
		$this->load->view('Admin/footer');	
	}

	function hapusBerita($id){
		$hapus = $this->beritaModel->hapusBerita($id);

        if ($hapus) {
            $this->session->set_flashdata("pesan", "<div class=\"alert alert-success alert-dismissible\" id=\"alert\">
			<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
			Berita Berhasil
			        <strong>Dihapus</strong>
			</div>");
            redirect(base_url()."Admin/dataBerita");
        }
        else{
            $this->session->set_flashdata("pesan", "<div class=\"alert alert-danger alert-dismissible\" id=\"alert\">
			<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
			Berita <strong>Gagal Dihapus</strong> <a href=\"#\" class=\"btn btn-default btn-lg launch-modal\" data-toggle=\"modal\" data-target=\".form\">Ulangi</a>
			</div>");
            redirect(base_url()."Admin/dataBerita");
        }    
    }

    public function tambahBerita(){
		$data['menu'] = 'berita';
		$data['kotak_masuk'] = $this->profilModel->kotakMasuk();
		$this->load->view('Admin/header', $data);
		$this->load->view('Admin/tambahberita');		
		$this->load->view('Admin/footer');	
	}

	public function kotakMasuk(){
		$data['menu'] = 'kotak_masuk';
		$data['pesan'] = $this->profilModel->getPesan();
		$data['kotak_masuk'] = $this->profilModel->kotakMasuk();
		$this->load->view('Admin/header', $data);
		$this->load->view('Admin/kotakmasuk');		
		$this->load->view('Admin/footer');	
	}

	function detailPesan($id){
		$data['menu'] = 'kotak_masuk';
		$data['kotak_masuk'] = $this->profilModel->kotakMasuk();
		$data['pesan'] = $this->profilModel->getPesanByID($id);
		$this->load->view('Admin/header', $data);
		$this->load->view('Admin/detailpesan');
		$this->load->view('Admin/footer');	

		$dibaca = $this->profilModel->pesanDibaca($id);
		foreach ($dibaca as $data) {
			$dibaca = $data->dibaca;
		};
		$dibaca++;
		$this->profilModel->tambahDibaca($id, $dibaca);
	}

	function hapusPesan($id){
		$hapus = $this->profilModel->hapusPesan($id);

        if ($hapus) {
            $this->session->set_flashdata("pesan", "<div class=\"alert alert-success alert-dismissible\" id=\"alert\">
			<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
			Pesan Berhasil
			        <strong>Dihapus</strong>
			</div>");
            redirect(base_url()."Admin/kotakMasuk");
        }        
    }

    public function dataGaleri(){    	

		$data['menu'] = 'galeri';
		$data['kotak_masuk'] = $this->profilModel->kotakMasuk();
		$data['photo'] = $this->galeriModel->getGaleri();
		$this->load->view('Admin/header', $data);
		$this->load->view('Admin/datagaleri');		
		$this->load->view('Admin/footer');	
	}

	public function uploadPhoto(){
		$data['menu'] = 'upload';		
		$data['kotak_masuk'] = $this->profilModel->kotakMasuk();
		$this->load->view('Admin/header', $data);
		$this->load->view('Admin/uploadphoto');		
		$this->load->view('Admin/footer');	
	}

	public function editPhoto($id){
		$data['menu'] = 'galeri';		
		$data['kotak_masuk'] = $this->profilModel->kotakMasuk();
		$data['photo'] = $this->galeriModel->getPhoto($id);
		$this->load->view('Admin/header', $data);
		$this->load->view('Admin/editphoto');		
		$this->load->view('Admin/footer');	
	}

	public function tambahFasilitas($jenis){
		$data['menu'] = $jenis;		
		$data['kotak_masuk'] = $this->profilModel->kotakMasuk();	
		$this->load->view('Admin/header', $data);
		$this->load->view('Admin/tambahfasilitas');		
		$this->load->view('Admin/footer');		
	}

	public function fasilitasAirSide(){
		$data['menu'] = 'airside';		
		$data['kotak_masuk'] = $this->profilModel->kotakMasuk();
		$data['airside'] = $this->fasilitasModel->getFasilitas();
		$this->load->view('Admin/header', $data);
		$this->load->view('Admin/fasilitasairside');		
		$this->load->view('Admin/footer');		
	}

	public function fasilitasLandSide(){
		$data['menu'] = 'landside';		
		$data['kotak_masuk'] = $this->profilModel->kotakMasuk();
		$data['landside'] = $this->fasilitasModel->getFasilitas();
		$this->load->view('Admin/header', $data);
		$this->load->view('Admin/fasilitaslandside');		
		$this->load->view('Admin/footer');		
	}

	function hapusFasilitas($id, $jenis){
		$hapus = $this->fasilitasModel->hapusFasilitas($id);

        if ($hapus) {
            $this->session->set_flashdata("pesan", "<div class=\"alert alert-success alert-dismissible\" id=\"alert\">
			<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
			Data Berhasil
			        <strong>Dihapus</strong>
			</div>");
			if ($jenis == 'airside') {			
            	redirect(base_url()."Admin/fasilitasAirSide");
            }
            else if ($jenis == 'landside') {			
            	redirect(base_url()."Admin/fasilitasLandSide");
            }
        }        
    }

    function editFasilitas($id, $jenis){
		$data['fasilitas'] = $this->fasilitasModel->getFasilitasByID($id);
		$data['menu'] = $jenis;		
		$data['kotak_masuk'] = $this->profilModel->kotakMasuk();		
		$this->load->view('Admin/header', $data);
		$this->load->view('Admin/editfasilitas');		
		$this->load->view('Admin/footer');		

    }


    function maskapai(){
    	$data['maskapai'] = $this->layananModel->getMaskapai();
		$data['menu'] = 'maskapai';		
		$data['kotak_masuk'] = $this->profilModel->kotakMasuk();		
		$this->load->view('Admin/header', $data);
		$this->load->view('Admin/maskapai');		
		$this->load->view('Admin/footer');		    	
    }

    function tambahMaskapai(){		
    	$data['maskapai'] = $this->layananModel->getMaskapai();
		$data['menu'] = 'maskapai';		
		$data['tambah'] = 'tambah';
		$data['kotak_masuk'] = $this->profilModel->kotakMasuk();		
		$this->load->view('Admin/header', $data);
		$this->load->view('Admin/maskapai');		
		$this->load->view('Admin/footer');		

    }


    function editMaskapai($id){
    	$data['maskapai'] = $this->layananModel->getMaskapai();
    	$data['editmaskapai'] = $this->layananModel->getMaskapaiByID($id);
		$data['menu'] = 'maskapai';		
		$data['edit'] = 'edit';		
		$data['kotak_masuk'] = $this->profilModel->kotakMasuk();		
		$this->load->view('Admin/header', $data);
		$this->load->view('Admin/maskapai');		
		$this->load->view('Admin/footer');		    	
    }

    function rutePenerbangan(){
    	$data['rute'] = $this->layananModel->getRoute();
		$data['menu'] = 'rute';		
		$data['kotak_masuk'] = $this->profilModel->kotakMasuk();		
		$this->load->view('Admin/header', $data);
		$this->load->view('Admin/rute');		
		$this->load->view('Admin/footer');
    }

     function tambahRute(){		
    	$data['rute'] = $this->layananModel->getRoute();
		$data['menu'] = 'rute';		
		$data['tambah'] = 'tambah';
		$data['kotak_masuk'] = $this->profilModel->kotakMasuk();		
		$this->load->view('Admin/header', $data);
		$this->load->view('Admin/rute');		
		$this->load->view('Admin/footer');		

    }

    function editRute($id){
    	$data['rute'] = $this->layananModel->getRoute();
		$data['menu'] = 'rute';		
    	$data['editrute'] = $this->layananModel->getRouteByID($id);		
		$data['edit'] = 'edit';		
		$data['kotak_masuk'] = $this->profilModel->kotakMasuk();		
		$this->load->view('Admin/header', $data);
		$this->load->view('Admin/rute');		
		$this->load->view('Admin/footer');		    	
    }


    function kedatangan(){
    	$data['kedatangan'] = $this->layananModel->getKedatangan();
		$data['menu'] = 'kedatangan';		    				
		$data['kotak_masuk'] = $this->profilModel->kotakMasuk();		
		$this->load->view('Admin/header', $data);
		$this->load->view('Admin/penerbangan');		
		$this->load->view('Admin/footer');	
    }

    function keberangkatan(){
    	$data['keberangkatan'] = $this->layananModel->getKeberangkatan();
		$data['menu'] = 'keberangkatan';		    				
		$data['kotak_masuk'] = $this->profilModel->kotakMasuk();		
		$this->load->view('Admin/header', $data);
		$this->load->view('Admin/penerbangan');		
		$this->load->view('Admin/footer');	
    }

    function tambahKeberangkatan(){

    	$data['tambahkeberangkatan'] = 'tambahkeberangkatan';
    	$data['maskapai'] =  $this->layananModel->getMaskapai();
    	$data['rute'] =  $this->layananModel->getRoute();
    	$data['keberangkatan'] = $this->layananModel->getKeberangkatan();
		$data['menu'] = 'keberangkatan';		    				
		$data['kotak_masuk'] = $this->profilModel->kotakMasuk();		
		$this->load->view('Admin/header', $data);
		$this->load->view('Admin/penerbangan');		
		$this->load->view('Admin/footer');		
    }

    function tambahKedatangan(){

    	$data['tambahkedatangan'] = 'tambahkedatangan';
    	$data['maskapai'] =  $this->layananModel->getMaskapai();
    	$data['rute'] =  $this->layananModel->getRoute();
    	$data['kedatangan'] = $this->layananModel->getKedatangan();
		$data['menu'] = 'kedatangan';		    				
		$data['kotak_masuk'] = $this->profilModel->kotakMasuk();		
		$this->load->view('Admin/header', $data);
		$this->load->view('Admin/penerbangan');		
		$this->load->view('Admin/footer');		
    }

    function editKeberangkatan($id){

    	$data['editKeberangkatan'] = $this->layananModel->getJadwalPenerbanganByID($id);    	
    	$data['keberangkatan'] = $this->layananModel->getKeberangkatan();
		$data['menu'] = 'keberangkatan';		    				
		$data['kotak_masuk'] = $this->profilModel->kotakMasuk();		
		$this->load->view('Admin/header', $data);
		$this->load->view('Admin/penerbangan');		
		$this->load->view('Admin/footer');		
    }

    function editKedatangan($id){

    	$data['editKedatangan'] = $this->layananModel->getJadwalPenerbanganByID($id);    	
    	$data['kedatangan'] = $this->layananModel->getKedatangan();
		$data['menu'] = 'kedatangan';		    				
		$data['kotak_masuk'] = $this->profilModel->kotakMasuk();		
		$this->load->view('Admin/header', $data);
		$this->load->view('Admin/penerbangan');		
		$this->load->view('Admin/footer');		
    }


    function laporanPenerbangan(){    	
    	$data['laporan'] = $this->laporanModel->getLaporan();
    	$data['menu'] = 'laporan';		    				
		$data['kotak_masuk'] = $this->profilModel->kotakMasuk();		
		$this->load->view('Admin/header', $data);
		$this->load->view('Admin/laporan-penerbangan');		
		$this->load->view('Admin/footer');			
    }


    function tambahLaporan(){
    	$data['tambahlaporan'] = 'tambahlaporan';
    	$data['laporan'] = $this->laporanModel->getLaporan();
    	$data['menu'] = 'laporan';		    				
		$data['kotak_masuk'] = $this->profilModel->kotakMasuk();		
		$this->load->view('Admin/header', $data);
		$this->load->view('Admin/laporan-penerbangan');		
		$this->load->view('Admin/footer');			

    }

    function editLaporan($tahun){
    	$data['editlaporan'] = 'editlaporan';
    	$data['laporan'] = $this->laporanModel->getLaporan();
    	$data['edit'] = $this->laporanModel->getLaporanByTahun($tahun);
    	$data['menu'] = 'laporan';		    				
		$data['kotak_masuk'] = $this->profilModel->kotakMasuk();		
		$this->load->view('Admin/header', $data);
		$this->load->view('Admin/laporan-penerbangan');		
		$this->load->view('Admin/footer');			

    }



}
