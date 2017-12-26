<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanPenerbangan extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $autoload['helper'] = array('url'); 
        $this->load->model('laporanModel');        
    }



	public function index(){		

		if ($this->input->post('tahun') != null) {
			$tahun = $this->input->post('tahun');
			$file = $this->laporanModel->getLaporanByTahun($tahun);
			$data['file'] = $this->laporanModel->getLaporanByTahun($tahun);
		}
		else{
			
			$a = $this->laporanModel->getTahunLaporan();

			$i = 0;
			foreach ($a as $b) {
				if ($i < 1) {
					$c = $b->tahun;
				} $i++;
			}

			$file = $this->laporanModel->getLaporanByTahun($c);
			$data['file'] = $this->laporanModel->getLaporanByTahun($c);
		}		

		foreach ($file as $file) {
			$tmpfname = "./assets/laporan/".$file->file;				
		}				
	
		//load the excel library
		$this->load->library('excel');
		 
		//read file from path
		$objPHPExcel = PHPExcel_IOFactory::load($tmpfname);
		 
		//get only the Cell Collection
		$cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();			
		
		$excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
		$excelObj = $excelReader->load($tmpfname);
		$worksheet = $excelObj->getSheet(0);
		$lastRow = $worksheet->getHighestRow();				

		$highestColumn = $excelObj->getActiveSheet()->getHighestDataColumn();
		$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);					

		$laporan = array();
		
		for ($row = 1; $row <= $lastRow; $row++) { 			
			
			for ($i=0; $i < $highestColumnIndex ; $i++) {				 
				
				$col = $this->getColumnLetter($i);

				$code = $worksheet->getCell($col.$row)->getValue();

				if(strstr($code,'=')==false){
					
					$laporan[$i][$row] = $worksheet->getCell($col.$row)->getValue();				    

				}
				 
				 
				if(strstr($code,'=')==true){

				    $code = $worksheet->getCell($col.$row)->getOldCalculatedValue();
				    $laporan[$i][$row] = round($code);
				}

				if (is_string($code) == false && $code != null) {
					$laporan[$i][$row] = round($code);	
				}
	             		
			}
		
		}		
		
		$data['laporan'] = $laporan;
		$data['tahun'] = $this->laporanModel->getTahunLaporan();
		$data['menu'] = 'laporan';
		$this->load->view('header', $data);		
   		$this->load->view('laporan-penerbangan');
		
		$this->load->view('footer');		
	}


	function getColumnLetter( $number ){
	    $prefix = '';
	    $suffix = '';
	    $prefNum = intval( $number/26 );
	    if( $prefNum > 25 )
	    {
	        $prefix = getColumnLetter( $prefNum );
	    }
	    $suffix = chr( fmod( $number, 26 )+65 );
	    return $prefix.$suffix;
	}

	function tambahLaporan(){
		$tahun = $this->input->post('tahun');
    	$judul = $this->input->post('judul'); 

    	$cekdata = $this->laporanModel->getLaporanByTahun($tahun);

    	if ($cekdata > 0) {
    		$this->session->set_flashdata("pesan", "<div class=\"alert alert-danger alert-dismissible\" id=\"alert\">
			<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
			Data Laporan Tahun ".$tahun." Sudah Ada 
			        
			</div>");
			
			redirect(base_url()."Admin/laporanPenerbangan");					

    	}else{

	    	$target_path = "assets/laporan/";
	 		$target_path = $target_path.basename($_FILES['laporan']['name']);
	 		move_uploaded_file($_FILES['laporan']['tmp_name'],$target_path);    

	 		$file = $_FILES['laporan']['name'];	


	    	$simpan = $this->laporanModel->tambahLaporan($tahun, $judul, $file);
	    	
	        if ($simpan) {
	            $this->session->set_flashdata("pesan", "<div class=\"alert alert-success alert-dismissible\" id=\"alert\">
				<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
				Data Laporan Penerbangan Tahun ".$tahun." Berhasil
				        <strong>Disimpan</strong>
				</div>");
				
				redirect(base_url()."Admin/laporanPenerbangan");					

	        } 
    	}
           
	}

	function hapusLaporan($tahun){
		$hapus = $this->laporanModel->hapusLaporan($tahun);
		if ($hapus) {
            $this->session->set_flashdata("pesan", "<div class=\"alert alert-success alert-dismissible\" id=\"alert\">
			<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
			Data Laporan Penerbangan Tahun ".$tahun." Berhasil
			        <strong>Dihapus</strong>
			</div>");
			
			redirect(base_url()."Admin/laporanPenerbangan");					

        }
	}

	function editLaporan(){
		$tahun = $this->input->post('tahun');
		$judul = $this->input->post('judul');

		$target_path = "assets/laporan/";
 		$target_path = $target_path.basename($_FILES['laporan']['name']);
 		move_uploaded_file($_FILES['laporan']['tmp_name'],$target_path);    

 		$file = $_FILES['laporan']['name'];	

 		$simpan = $this->laporanModel->updateLaporan($tahun, $judul, $file);
	    	
        if ($simpan) {
            $this->session->set_flashdata("pesan", "<div class=\"alert alert-success alert-dismissible\" id=\"alert\">
			<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
			Data Laporan Penerbangan Tahun ".$tahun." Berhasil
			        <strong>Diupdate</strong>
			</div>");
			
			redirect(base_url()."Admin/laporanPenerbangan");					

        } 
	}
}		
