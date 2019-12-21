<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Donasi_model extends CI_Model{

//    private $_table = "donasi_buku";


    function list_donasi($id_anggota){
        return $this->db->get("donasi_buku")->result();
    }

    function list_donasi_non_buku_with_anggota(){
        $sql = "SELECT `donasi_non_buku`.`id`, `donasi_non_buku`.`nama_donatur`, `donasi_non_buku`.`terbilang`, 
`donasi_non_buku`.`progress`, `donasi_non_buku`.`tgl_transfer`, `donasi_non_buku`.`bukti_transfer`, `anggota`.`nama` 
FROM `donasi_non_buku` JOIN `anggota` ON `anggota`.`id_anggota` = `donasi_non_buku`.`id_user`";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function list_donasi_buku_with_anggota(){
        $sql = "SELECT `donasi_buku`.`id`, `donasi_buku`.`nama_donatur`, `donasi_buku`.`jumlah_buku`, 
`donasi_buku`.`progress`, `donasi_buku`.`cara_donasi`, `donasi_buku`.`instansi`, `donasi_buku`.`no_hp`, `anggota`.`nama` 
FROM `donasi_buku` JOIN `anggota` ON `anggota`.`id_anggota` = `donasi_buku`.`id_user`";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function change_progres($table){
        $post = $this->input->post();
        $this->db->set('progress', $post['progres']);
        $this->db->where('id', $post['id_donasi']);
        $res = $this->db->update($table);
        return $res;
    }


    public function save_donasi($id_anggota)
    {
        $post = $this->input->post();
        $this->nama_donatur = $post["nama_donatur"];
        $this->pekerjaan = $post["pekerjaan"];
        $this->instansi = $post["instansi"];
        $this->no_hp = $post["no_hp"];
        $this->alamat_rumah = $post["alamat_rumah"];
        $this->jumlah_buku = $post["jumlah_buku"];
        $this->pengiriman = $post["pengiriman"];
        $this->cara_donasi = $post["cara_donasi"];
        $this->progress = "belum diproses";
        $this->alamat_jemput = $post["alamat_donatur"];
        $this->satu_kota = $post["satu_kota"];
        $this->email = $post["email"];
        $this->id_user = $id_anggota;
        $hasil = $this->db->insert("donasi_buku", $this);
        return $hasil;
    }

    public function save_donasi_non_buku($id_anggota, $bukti_transfer)
    {
        $post = $this->input->post();
        $this->nama_donatur = $post["nama_donatur"];
        $this->pekerjaan = $post["pekerjaan"];
        $this->instansi = $post["instansi"];
        $this->no_hp = $post["no_hp"];
        $this->alamat = $post["alamat_rumah"];
        $this->email = $post["email"];
        $this->terbilang = $post["terbilang"];
        $this->progress = "belum diproses";
        $this->pesan = $post["pesan"];
        $this->tgl_transfer =  date('Y-m-d', strtotime($post["tgl_transfer"]));
        $this->bukti_transfer = $bukti_transfer;
        $this->id_user = $id_anggota;
        $hasil = $this->db->insert('donasi_non_buku', $this);
        return $hasil;
    }
}