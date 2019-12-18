<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_model extends CI_Model{

    private $_table = "buku";


    function list_buku(){
        return $this->db->get($this->_table)->result();
    }


    public function save_buku()
    {
        $post = $this->input->post();
        $this->kode_buku = $post["kode_buku"];
        $this->jenis_buku = $post["jenis_buku"];
        $this->judul_buku = $post["judul_buku"];
        $this->jumlah_buku = $post["jumlah_buku"];
        $this->pengarang = $post["pengarang"];
        $this->penerbit = $post["penerbit"];
        $this->tahun_terbit = $post["tahun_terbit"];
        $this->lokasi_buku = $post["lokasi_buku"];
        $this->deskripsi = $post["deskripsi"];
        $hasil = $this->db->insert($this->_table, $this);
        return $hasil;
    }
}