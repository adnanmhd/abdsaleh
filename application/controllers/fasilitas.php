<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas extends CI_Controller {

	public function __construct() {
        parent::__construct();        
        $this->load->model('fasilitasModel');        
    }

    function airSide(){
		$data['menu'] = 'airside';
		$data['fasilitas'] = $this->fasilitasModel->getFasilitas();		
		$this->load->view('header', $data);
		$this->load->view('fasilitas');		
		$this->load->view('footer');	
    }

    function landSide(){
    	$data['menu'] = 'landside';
		$data['fasilitas'] = $this->fasilitasModel->getFasilitas();		
		$this->load->view('header', $data);
		$this->load->view('fasilitas');		
		$this->load->view('footer');
    }



    function simpanFasilitas(){
    	$nama = $this->input->post('nama');
		$informasi = $this->input->post('informasi');
    	$jenis = $this->input->post('jenis'); 

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

				$filename = "assets/images/fasilitas/". $_FILES['gambar']['name'];
				imagejpeg($tmp,$filename,100);

				imagedestroy($src);
				imagedestroy($tmp);
			}

			$simpan = $this->fasilitasModel->simpanFasilitas($nama, $informasi, $jenis, $image);



			if ($simpan) {
				$this->session->set_flashdata("pesan", "<div class=\"alert alert-success alert-dismissible\" id=\"alert\">
				<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
				Data Berhasil
				        <strong>Ditambahkan</strong>
				</div>");
				if ($jenis == "Land Side") {
					$jenis = "lanside";
				}
				else if($jenis == "Air Side"){
					$jenis = "airside";
				}
		        redirect(base_url()."Admin/tambahFasilitas/".$jenis);
			}
		}
	}

    function updateFasilitas(){
    	$id = $this->input->post('id');
    	$nama = $this->input->post('nama');
		$informasi = $this->input->post('informasi');
    	$jenis = $this->input->post('jenis'); 

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

				$filename = "assets/images/fasilitas/". $_FILES['gambar']['name'];
				imagejpeg($tmp,$filename,100);

				imagedestroy($src);
				imagedestroy($tmp);
			}   
		} 	


    	$simpan = $this->fasilitasModel->updateFasilitas($id, $nama, $informasi, $jenis, $image);



    	
        if ($simpan) {
            $this->session->set_flashdata("pesan", "<div class=\"alert alert-success alert-dismissible\" id=\"alert\">
			<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
			Data Berhasil
			        <strong>Diupdate</strong>
			</div>");
			if ($jenis == "Air Side") {
				redirect(base_url()."Admin/fasilitasAirside");
			}
			else if($jenis == "Land Side"){
				redirect(base_url()."Admin/fasilitasLandside");
			}

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
