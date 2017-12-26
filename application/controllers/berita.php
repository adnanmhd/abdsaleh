<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function __construct() {
        parent::__construct();               
        $this->load->model('beritaModel');        
        $autoload['helper'] = array('url');
        $this->load->library('pagination');       
        $this->load->database();
    }


	public function index() {							

		$config['base_url'] = site_url('berita/index');
        $config['total_rows'] = $this->db->count_all('berita');
        $config['per_page'] = "5";        
        
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
        // $data['pagination'] = $this->pagination->create_links();
		$data['menu'] =  'berita';
        $this->load->view('header', $data);
		$this->load->view('berita');		
		$this->load->view('footer');



		
		// $config['base_url'] =  base_url().'berita/index/';

		// $num_rows = $this->db->count_all("berita");

		// $config['total_rows'] = $num_rows;
		// $config['per_page'] = 3;
		// $config['num_links'] = $num_rows;
		// $config['use_page_numbers'] = TRUE;
		// $config['full_tag_open'] = '<ul class="pagination">';
		// $config['full_tag_close'] = '</ul>';
		// $config['prev_link'] = '&laquo;';
		// $config['prev_tag_open'] = '<li>';
		// $config['prev_tag_close'] = '</li>';
		// $config['next_tag_open'] = '<li>';
		// $config['next_tag_close'] = '</li>';
		// $config['cur_tag_open'] = '<li class="active"><a href="#">';
		// $config['cur_tag_close'] = '</a></li>';
		// $config['num_tag_open'] = '<li>';
		// $config['num_tag_close'] = '</li>';

		// $config['next_link'] = '&raquo;';

		// $this->pagination->initialize($config);

		// // $data['berita']=$this->db->get('berita', $config['per_page'],$offset);

		// $data['berita'] = $this->beritaModel->getBerita($page, $config['per_page']);	
		// $data['menu'] =  'berita';

		// $this->load->view('header', $data);
		// $this->load->view('berita');		
		// $this->load->view('footer');	
	}	

	function detailBerita($id){
		$data['menu'] = 'berita';
		$data['beritadetail'] = $this->beritaModel->getBeritaByID($id);		
		$data['berita'] = $this->beritaModel->getBerita(null, null);		
		$this->load->view('header', $data);
		$this->load->view('detail-berita');		
		$this->load->view('footer');	
	}

	public function editBerita(){
		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
    	$isi = $this->input->post('isi');  
    	
    	$image =$_FILES["gambar"]["name"];
		$uploadedfile = $_FILES['gambar']['tmp_name'];
     
 
	 	if ($image) {
	 	
	 		$filename = stripslashes($_FILES['gambar']['name']);
	 	
	  		$extension = $this->getExtension($filename);
	 		$extension = strtolower($extension);
			
			if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) {
			
	 			// $change='<div class="msgdiv">Unknown Image extension </div> ';
	 			$errors=1;
	 		}

	 		else{

	 			$size=filesize($_FILES['gambar']['tmp_name']);

	 			if($extension=="jpg" || $extension=="jpeg" ){
	 				$uploadedfile = $_FILES['gambar']['tmp_name'];
	 				$src = imagecreatefromjpeg($uploadedfile);
	 			}

	 			else if($extension=="png"){
	 				$uploadedfile = $_FILES['gambar']['tmp_name'];
	 				$src = imagecreatefrompng($uploadedfile);
	 			}
	 			else {
	 				$src = imagecreatefromgif($uploadedfile);
	 			}

	 			list($width,$height)=getimagesize($uploadedfile);
	 			$newwidth=600;
				$newheight=($height/$width)*$newwidth;
				$tmp=imagecreatetruecolor($newwidth,$newheight);
				imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);

				$filename = "assets/images/berita/". $_FILES['gambar']['name'];
				imagejpeg($tmp,$filename,100);

				imagedestroy($src);
				imagedestroy($tmp);
			}
		}


		$simpan = $this->beritaModel->updateBerita($id, $judul, $isi, $image);

		

		if ($simpan) {
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-success alert-dismissible\" id=\"alert\">
			<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
			Berita Berhasil
			        <strong>Diedit</strong>
			</div>");
            redirect(base_url()."Admin/dataBerita");
		}
	}

	public function simpanBerita(){		
		$judul = $this->input->post('judul');
    	$isi = $this->input->post('isi');  
	 	$image =$_FILES["gambar"]["name"];
		$uploadedfile = $_FILES['gambar']['tmp_name'];
     
 
	 	if ($image) {
	 	
	 		$filename = stripslashes($_FILES['gambar']['name']);
	 	
	  		$extension = $this->getExtension($filename);
	 		$extension = strtolower($extension);
			
			if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) {
			
	 			// $change='<div class="msgdiv">Unknown Image extension </div> ';
	 			$errors=1;
	 		}

	 		else{

	 			$size=filesize($_FILES['gambar']['tmp_name']);

	 			if($extension=="jpg" || $extension=="jpeg" ){
	 				$uploadedfile = $_FILES['gambar']['tmp_name'];
	 				$src = imagecreatefromjpeg($uploadedfile);
	 			}

	 			else if($extension=="png"){
	 				$uploadedfile = $_FILES['gambar']['tmp_name'];
	 				$src = imagecreatefrompng($uploadedfile);
	 			}
	 			else {
	 				$src = imagecreatefromgif($uploadedfile);
	 			}

	 			list($width,$height)=getimagesize($uploadedfile);
	 			$newwidth=600;
				$newheight=($height/$width)*$newwidth;
				$tmp=imagecreatetruecolor($newwidth,$newheight);
				imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);

				$filename = "assets/images/berita/". $_FILES['gambar']['name'];
				imagejpeg($tmp,$filename,100);

				imagedestroy($src);
				imagedestroy($tmp);
			}
		}

 		if ($isi ==  null) {
 		  	$this->session->set_flashdata("pesan", "<div class=\"alert alert-warning alert-dismissible\" id=\"alert\">
			<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
			Berita gagal disimpan, data tidak lengkap			        
			</div>");
            redirect(base_url()."Admin/tambahBerita");
 		}  			

		$simpan = $this->beritaModel->simpanBerita($judul, $isi, $image);

		

		if ($simpan) {
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-success alert-dismissible\" id=\"alert\">
			<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
			Berita Berhasil
			        <strong>Ditambahkan</strong>
			</div>");
            redirect(base_url()."Admin/dataBerita");
		}
	}

	function getExtension($str) {
         $i = strrpos($str,".");
         if (!$i) { return ""; }
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
 	}


}

