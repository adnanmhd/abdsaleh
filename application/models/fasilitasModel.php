<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FasilitasModel extends CI_Model {

	function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function simpanFasilitas($nama, $informasi, $jenis, $image){
        $nama = mysql_real_escape_string($nama); 
        $informasi = mysql_real_escape_string($informasi); 
        $jenis = mysql_real_escape_string($jenis); 
        $image = mysql_real_escape_string($image); 

    	$query = $this->db->query("INSERT INTO fasilitas VALUES('', '$nama', '$informasi', '$jenis', '$image')");
        
        if ($query) {
            return true;
        }else{
            return false;
        }
    }

    function updateFasilitas($id, $nama, $informasi, $jenis, $image){
        

        if ($image != null) {
            $image = mysql_real_escape_string($image); 

            $query = $this->db->query("UPDATE fasilitas SET nama_fasilitas = '$nama', informasi_fasilitas = '$informasi', 
                                    jenis = '$jenis', gambar = '$image' where id_fasilitas = $id");    
        }
        else{
            $query = $this->db->query("UPDATE fasilitas SET nama_fasilitas = '$nama', informasi_fasilitas = '$informasi', 
                                    jenis = '$jenis' where id_fasilitas = $id");
        }    	        
        
        if ($query) {
            return true;
        }else{
            return false;
        }
    }

    function hapusFasilitas($id){        
        $query = $this->db->query("DELETE FROM fasilitas WHERE id_fasilitas = '$id'");
        
        if ($query) {
            return true;
        }else{
            return false;
        }
    }

    function getFasilitas(){
    	$query = $this->db->query("SELECT * FROM fasilitas ORDER BY nama_fasilitas");
        
        $num = $query->num_rows();
        
        if($num>0){
            //Mengirimkan data array hasil query
            return $query->result();
            //Function result() hampir sama dengan function mysql_fetch_array()
        }
        else{
            return 0;
            //Kirimkan 0 jika tidak ada datanya
        }
    }

    function getFasilitasByID($id){
        
        $query = $this->db->query("SELECT * FROM fasilitas WHERE id_fasilitas = '$id'");
        
        $num = $query->num_rows();
        
        if($num>0){
            //Mengirimkan data array hasil query
            return $query->result();
            //Function result() hampir sama dengan function mysql_fetch_array()
        }
        else{
            return 0;
            //Kirimkan 0 jika tidak ada datanya
        }
    }

}

