<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_model extends CI_Model{

    private $_table = "buku";


    function list_buku(){
        return $this->db->get($this->_table)->result();
    }


    public function save_buku($image)
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
        $this->cover_buku = $image;
        $hasil = $this->db->insert($this->_table, $this);
        return $hasil;
    }

    public function update_buku($image){
        $post = $this->input->post();

        $data = array(
            'kode_buku' =>  $post['kode_buku'],
            'jenis_buku' => $post['jenis_buku'],
            'judul_buku' => $post['judul_buku'],
            'jumlah_buku' => $post['jumlah_buku'],
            'pengarang' => $post['pengarang'],
            'tahun_terbit' => $post['tahun_terbit'],
            'lokasi_buku' => $post['lokasi_buku'],
            'deskripsi' => $post['deskripsi'],
        );

        if ($image != null){
            $data = array('cover_buku' => $image);
        }

        $this->db->where('id', $post['id_buku']);
        return $this->db->update($this->_table, $data);
    }

    function search_buku($title){
        $this->db->like('judul_buku', $title , 'both');
        $this->db->order_by('judul_buku', 'ASC');
        $this->db->limit(10);
        return $this->db->get($this->_table)->result();
    }

    function search_buku_by_title(){
        $post = $this->input->post();
        $this->db->where('judul_buku', $post['judul_buku']);
        return $this->db->get($this->_table)->row();
    }
}