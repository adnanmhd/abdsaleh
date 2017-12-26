<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BeritaModel extends CI_Model {

	function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function getBerita($page, $num_rows){

        if ($page== null && $num_rows ==  null) {
            $query = $this->db->query("SELECT * FROM `berita` ORDER BY tgl_post DESC");            
        }

        else{
            $query = $this->db->query("SELECT * FROM `berita` ORDER BY tgl_post DESC LIMIT $page, $num_rows");
        }

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

    function getBeritaByID($id){
        
        $query = $this->db->query("SELECT * FROM berita where id_berita = $id");
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

    function hapusBerita($id){
        
        $query = $this->db->query("delete from berita where id_berita = $id");
        
        if ($query) {
            return true;
        }else{
            return false;
        }
    }

    function updateBerita($id, $judul, $isi, $gambar){
        
        $judul = mysql_real_escape_string($judul); 
        $isi = mysql_real_escape_string($isi);         

        if ($gambar != null) {
            $gambar = mysql_real_escape_string($gambar); 
            $query = $this->db->query("UPDATE berita SET judul = '$judul',
                                   gambar = '$gambar',                                   
                                   berita = '$isi'
                                   where id_berita = $id");
        } else{
            $query = $this->db->query("UPDATE berita SET judul = '$judul',                                                                
                                   berita = '$isi'
                                   where id_berita = $id");
        }
        
        if ($query) {
            return true;
        }else{
            return false;
        }
    }

    function simpanBerita($judul, $isi, $gambar){        
        $gambar = mysql_real_escape_string($gambar); 
        $judul = mysql_real_escape_string($judul); 
        $isi = mysql_real_escape_string($isi);         

        $query = $this->db->query("INSERT INTO berita values('', CURRENT_TIMESTAMP, '$judul', '$isi', '$gambar')");
        if ($query) {
            return true;
        }else{
            return false;
        }
    }
}
