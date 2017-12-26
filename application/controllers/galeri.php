<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('galeriModel');                           
    }
    function index(){
    	$data['menu'] = "galeri";
    	$data['photo'] = $this->galeriModel->getGaleri();
    	$this->load->view('header', $data);
    	$this->load->view('galeri.php');
    	$this->load->view('footer');
    }

    function getExtension($str) {
         $i = strrpos($str,".");
         if (!$i) { return ""; }
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
 	}

    function uploadPhoto(){
    	$judul = $this->input->post('judul');
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
	 			$newwidth=700;
				$newheight=($height/$width)*$newwidth;
				$tmp=imagecreatetruecolor($newwidth,$newheight);
				imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);

				$filename = "assets/images/galeri/". $_FILES['gambar']['name'];
				imagejpeg($tmp,$filename,100);

				imagedestroy($src);
				imagedestroy($tmp);
			}
		}


		$upload = $this->galeriModel->simpanPhoto($judul, $image);

		

		if ($upload) {
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-success alert-dismissible\" id=\"alert\">
			<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
			Photo Berhasil
			        <strong>Diupload</strong>
			</div>");
            redirect(base_url()."Admin/uploadPhoto");
		}
    }
    function hapusPhoto($id){
    	$hapus = $this->galeriModel->hapusPhoto($id);

        if ($hapus) {
            $this->session->set_flashdata("pesan", "<div class=\"alert alert-success alert-dismissible\" id=\"alert\">
			<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
			Photo Berhasil
			        <strong>Dihapus</strong>
			</div>");
            redirect(base_url()."Admin/dataGaleri");
        }
        else{
            $this->session->set_flashdata("pesan", "<div class=\"alert alert-danger alert-dismissible\" id=\"alert\">
			<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
			Photo <strong>Gagal Dihapus</strong> <a href=\"#\" class=\"btn btn-default btn-lg launch-modal\" data-toggle=\"modal\" data-target=\".form\">Ulangi</a>
			</div>");
            redirect(base_url()."Admin/dataGaleri");
        }  
    }

    function editPhoto(){
    	$id = $this->input->post('id');
    	$judul = $this->input->post('judul');
    	$edit = $this->galeriModel->updatePhoto($id, $judul);

    	if ($edit) {
            $this->session->set_flashdata("pesan", "<div class=\"alert alert-success alert-dismissible\" id=\"alert\">
			<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
			Photo Berhasil
			        <strong>Diupdate</strong>
			</div>");
            redirect(base_url()."Admin/dataGaleri");
        }
        else{
            $this->session->set_flashdata("pesan", "<div class=\"alert alert-danger alert-dismissible\" id=\"alert\">
			<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
			Photo <strong>Gagal Diupdate</strong> <a href=\"#\" class=\"btn btn-default btn-lg launch-modal\" data-toggle=\"modal\" data-target=\".form\">Ulangi</a>
			</div>");
            redirect(base_url()."Admin/dataGaleri");
        } 
    }
}