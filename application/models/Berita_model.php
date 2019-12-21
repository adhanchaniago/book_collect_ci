<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_model extends CI_Model{

    private $_table = "berita";

    public function save_berita($image)
    {
        $post = $this->input->post();
        $this->judul = $post["judul"];
        $this->tanggal = date('Y-m-d', strtotime($post["tanggal"]));
        $this->isi = $post["isi"];
        $this->penulis = $post["penulis"];
        $this->image = $image;
        $hasil = $this->db->insert($this->_table, $this);
        return $hasil;
    }
}