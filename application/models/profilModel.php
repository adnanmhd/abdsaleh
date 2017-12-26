<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfilModel extends CI_Model {

	function __construct() {
        parent::__construct();
        $this->load->database();
    }

     function login($username, $password){
        $username = mysql_real_escape_string($username);
        $password = mysql_real_escape_string($password);
        $query = $this->db->query("SELECT * FROM admin WHERE username = '$username'
                                   and password = '$password' ");
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

    function getUser(){
        $query = $this->db->query("SELECT * FROM admin");
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


    function simpanPesan($nama, $email, $subject, $pesan){
        $nama = mysql_real_escape_string($nama);
        $email = mysql_real_escape_string($email);
        $subject = mysql_real_escape_string($subject);
        $pesan = mysql_real_escape_string($pesan);

    	$query = $this->db->query("INSERT INTO pesan VALUES('', CURRENT_TIMESTAMP, '$nama', '$email', '$subject', '$pesan', '')");
        
        if ($query) {
            return true;
        }else{
            return false;
        }
    }

    function getPesan(){    	
    	$query = $this->db->query("SELECT * from pesan ORDER BY waktu desc");
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

    function updateAkun($id, $username, $password1){
        $id = mysql_real_escape_string($id);
        $username = mysql_real_escape_string($username);
        $password1 = mysql_real_escape_string($password1);

        if ($password1 == null) {
            $query = $this->db->query("UPDATE admin SET username = '$username' WHERE id_admin = '$id'");
        }
        else{
            $query = $this->db->query("UPDATE admin SET username = '$username', password = '$password1' 
                                       WHERE id_admin = '$id'");
        }

        if ($query) {
            return true;
        }else{
            return false;
        }
    }

    function getPesanByID($id){    	
    	$query = $this->db->query("SELECT * from pesan WHERE id_pesan = '$id'");
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

    function hapusPesan($id){
    	$query = $this->db->query("DELETE FROM pesan WHERE id_pesan = '$id'");
        
        if ($query) {
            return true;
        }else{
            return false;
        }
    }

    function kotakMasuk(){
    	$query = $this->db->query("SELECT COUNT(dibaca) as kotak_masuk from pesan WHERE dibaca = 0");
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

    function pesanDibaca($id){
        $query = $this->db->query("select dibaca from pesan where id_pesan = $id");
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

    function tambahDibaca($id, $dibaca){
        $query = $this->db->query("UPDATE pesan SET dibaca = $dibaca where id_pesan = $id");        
    }
}
