<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GaleriModel extends CI_Model {

	function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function simpanPhoto($judul, $foto){
        $judul = mysql_real_escape_string($judul); 
        $foto = mysql_real_escape_string($foto); 

    	$query = $this->db->query("INSERT INTO galeri VALUES('', CURRENT_TIMESTAMP, '$judul', '$foto')");
        
        if ($query) {
            return true;
        }else{
            return false;
        }
    }

    function updatePhoto($id, $judul){
        
        $judul = mysql_real_escape_string($judul); 
    	
        $query = $this->db->query("UPDATE galeri SET judul = '$judul'                                                                                                   
                                   where id_photo = $id");
        
        if ($query) {
            return true;
        }else{
            return false;
        }
    }

    function hapusPhoto($id){
        
        $query = $this->db->query("DELETE FROM galeri WHERE id_photo = '$id'");
        
        if ($query) {
            return true;
        }else{
            return false;
        }
    }

    function getGaleri(){
    	$query = $this->db->query("SELECT * FROM galeri ORDER BY waktu DESC");
        
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

    function getPhoto($id){        
        
    	$query = $this->db->query("SELECT * FROM galeri WHERE id_photo = '$id'");
        
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
?>