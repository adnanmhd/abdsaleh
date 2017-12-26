<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporanModel extends CI_Model {

	function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function tambahLaporan($tahun, $judul, $file){         
        $tahun = mysql_real_escape_string($tahun);
        $judul = mysql_real_escape_string($judul);
        $file = mysql_real_escape_string($file);        

        $query = $this->db->query("INSERT INTO laporan_penerbangan values('$tahun', '$judul', '$file')");
        if ($query) {
            return true;
        }else{
            return false;
        }

    }

    function updateLaporan($tahun, $judul, $file){
        $tahun = mysql_real_escape_string($tahun);
        $judul = mysql_real_escape_string($judul);        

         if ($file != null) {
            $file = mysql_real_escape_string($file);        
            $query = $this->db->query("UPDATE laporan_penerbangan SET judul = '$judul', 
                                        file = '$file' WHERE tahun = '$tahun'");
        } else{
            $query = $this->db->query("UPDATE laporan_penerbangan SET judul = '$judul' WHERE tahun = '$tahun'");
        }
        
        if ($query) {
            return true;
        }else{
            return false;
        }

    }


    function getLaporanByTahun($tahun){        

        $query = $this->db->query("SELECT * FROM laporan_penerbangan WHERE tahun = '$tahun'");
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

    function getTahunLaporan(){
        $query = $this->db->query("SELECT tahun FROM laporan_penerbangan ORDER BY tahun DESC");
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

    function getLaporan(){
        $query = $this->db->query("SELECT * FROM laporan_penerbangan ORDER BY tahun DESC");
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

    function hapusLaporan($tahun){
        $tahun = mysql_real_escape_string($tahun); 
        $query = $this->db->query("DELETE FROM laporan_penerbangan WHERE tahun = '$tahun'");
         if ($query) {
            return true;
        }else{
            return false;
        }
    }

}
