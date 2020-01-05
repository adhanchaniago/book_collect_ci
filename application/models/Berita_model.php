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

    function list_berita(){
        return $this->db->get($this->_table)->result();
    }

    function content_berita($id){
        $this->db->where('id', $id);
        $res = $this->db->get($this->_table)->row();
        return $res->isi;
    }

    function view_berita($id){
        $this->db->where('id', $id);
        $res = $this->db->get($this->_table)->row();
        return $res;
    }

    function jumlah_data(){
        return $this->db->get($this->_table)->num_rows();
    }

    function berita_data($number, $offset){
        $this->db->limit($number, $offset);
        $query = $this->db->get($this->_table)->result();
        return $query;
    }

    function get_lastest_news(){
        $this->db->order_by("tanggal", "desc");
        $this->db->limit(3, 0);
        $query = $this->db->get($this->_table)->result();
        return $query;
    }
}