<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Donasi_model extends CI_Model{

    private $_table = "donasi_buku";


    function list_donasi($id_anggota){
        return $this->db->get($this->_table)->result();
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
        $this->id_anggota = $id_anggota;
        $hasil = $this->db->insert($this->_table, $this);
        return $hasil;
    }
}