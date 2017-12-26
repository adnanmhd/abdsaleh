<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LayananModel extends CI_Model {

	function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function tambahMaskapai($nama, $jenis, $kapasitas, $no_telp, $image){
        $nama = mysql_real_escape_string($nama);
        $jenis = mysql_real_escape_string($jenis);
        $kapasitas = mysql_real_escape_string($kapasitas);
        $no_telp = mysql_real_escape_string($no_telp);
        $image = mysql_real_escape_string($image);

        $query = $this->db->query("INSERT INTO maskapai values('', '$nama', '$jenis', '$kapasitas', '$no_telp', '$image')");
        if ($query) {
            return true;
        }else{
            return false;
        }

    }

    function hapusMaskapai($id){        
        
        $query = $this->db->query("DELETE FROM maskapai WHERE id_maskapai = '$id'");
        if ($query) {
            return true;
        }else{
            return false;
        }
    }

    function getKeberangkatan(){
    	$query = $this->db->query("SELECT jadwal_penerbangan.id_jadwal, maskapai.nama_maskapai, jadwal_penerbangan.no_penerbangan, route.tujuan, jadwal_penerbangan.waktu_berangkat, jadwal_penerbangan.status, maskapai.gambar FROM jadwal_penerbangan, maskapai, route WHERE jadwal_penerbangan.id_route = route.id_route AND jadwal_penerbangan.id_maskapai = maskapai.id_maskapai AND route.dari = 'Malang' ORDER BY jadwal_penerbangan.waktu_berangkat");
        
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

    function getKedatangan(){
    	$query = $this->db->query("SELECT jadwal_penerbangan.id_jadwal, maskapai.nama_maskapai, jadwal_penerbangan.no_penerbangan, route.dari, jadwal_penerbangan.waktu_tiba, jadwal_penerbangan.status, maskapai.gambar FROM jadwal_penerbangan, maskapai, route WHERE jadwal_penerbangan.id_route = route.id_route AND jadwal_penerbangan.id_maskapai = maskapai.id_maskapai AND route.tujuan = 'Malang' ORDER BY jadwal_penerbangan.waktu_tiba");
        
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

    function getMaskapai(){
        $query = $this->db->query("SELECT * FROM maskapai");
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

    function getMaskapaiByID($id){        
        $query = $this->db->query("SELECT * FROM maskapai WHERE id_maskapai = '$id'");
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

    function updateMaskapai($id, $nama, $jenis, $kapasitas, $no_telp, $image){

        $nama = mysql_real_escape_string($nama);
        $jenis = mysql_real_escape_string($jenis);
        $kapasitas = mysql_real_escape_string($kapasitas);
        $no_telp = mysql_real_escape_string($no_telp);
        $image = mysql_real_escape_string($image);

        if ($image != null) {
            $query = $this->db->query("UPDATE maskapai set nama_maskapai = '$nama', jenis_pesawat = '$jenis', 
                                    kapasitas_kursi = '$kapasitas', no_telp = '$no_telp', gambar = '$image'
                                    WHERE id_maskapai = '$id'");
        } else{
            $query = $this->db->query("UPDATE maskapai set nama_maskapai = '$nama', jenis_pesawat = '$jenis', 
                                    kapasitas_kursi = '$kapasitas', no_telp = '$no_telp'
                                    WHERE id_maskapai = '$id'");
        }
        

        if ($query) {
            return true;
        }else{
            return false;
        }
    }

    function getFasilitas(){
        $query = $this->db->query("SELECT * FROM fasilitas");
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

    function tambahRoute($dari, $tujuan){
        $dari = mysql_real_escape_string($dari);
        $tujuan = mysql_real_escape_string($tujuan);

        $query = $this->db->query("INSERT INTO route values('', '$dari', '$tujuan')");
        
        if ($query) {
            return true;
        }else{
            return false;
        }
    }

    function getRoute(){
        $query = $this->db->query("SELECT * FROM route");
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

    function getRouteByID($id){
        
        $query = $this->db->query("SELECT * FROM route WHERE id_route = '$id'");
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

    function hapusRoute($id){        
        $query = $this->db->query("DELETE FROM route WHERE id_route = '$id'");
        if ($query) {
            return true;
        }else{
            return false;
        }
    }

    function updateRoute($id, $dari, $tujuan){        
        $dari = mysql_real_escape_string($dari); 
        $tujuan = mysql_real_escape_string($tujuan); 

        $query = $this->db->query("UPDATE route set dari = '$dari', tujuan = '$tujuan' WHERE id_route = '$id'");

        if ($query) {
            return true;
        }else{
            return false;
        }
    }

    function tambahJadwalPenerbangan($no_penerbangan, $id_maskapai, $id_route, $waktu_berangkat, $waktu_tiba){
        $no_penerbangan = mysql_real_escape_string($no_penerbangan);
        $id_maskapai = mysql_real_escape_string($id_maskapai);
        $id_route = mysql_real_escape_string($id_route);
        $waktu_berangkat = mysql_real_escape_string($waktu_berangkat);
        $waktu_tiba = mysql_real_escape_string($waktu_tiba);

        $query = $this->db->query("INSERT INTO jadwal_penerbangan values('', '$no_penerbangan', '$id_maskapai', '$id_route',
                                    '$waktu_berangkat', '$waktu_tiba', '')");

        if ($query) {
            return true;
        }else{
            return false;
        }
    }


    function hapusJadwalPenerbangan($id){        
        $query = $this->db->query("DELETE FROM jadwal_penerbangan WHERE id_jadwal = '$id'");
        if ($query) {
            return true;
        }else{
            return false;
        }
    }

    function updateJadwalPenerbangan($id, $no_penerbangan, $waktu_berangkat, $waktu_tiba){
        $no_penerbangan = mysql_real_escape_string($no_penerbangan);        
        $waktu_berangkat = mysql_real_escape_string($waktu_berangkat);
        $waktu_tiba = mysql_real_escape_string($waktu_tiba);

         $query = $this->db->query("UPDATE jadwal_penerbangan SET waktu_berangkat = '$waktu_berangkat', 
                                    waktu_tiba = '$waktu_tiba', no_penerbangan = '$no_penerbangan' WHERE
                                    id_jadwal = '$id' ");
        if ($query) {
            return true;
        }else{
            return false;
        }
    }

    function getJadwalPenerbanganByID($id){
        $id = mysql_real_escape_string($id);
        
        $query = $this->db->query("SELECT jadwal_penerbangan.*, route.tujuan, route.dari, maskapai.nama_maskapai as maskapai 
                                    FROM route, jadwal_penerbangan, maskapai WHERE id_jadwal = '$id' 
                                    AND jadwal_penerbangan.id_maskapai = maskapai.id_maskapai AND 
                                    jadwal_penerbangan.id_route = route.id_route");
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
