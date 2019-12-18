<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota_model extends CI_Model
{

    private $_table = "anggota";

    public function save()
    {
        $post = $this->input->post();
        $this->tgl_daftar = date("Y-m-d H:i:s");
        $this->nama = $post["fullname"];
        $this->tgl_lahir = $post["tgl_lahir"];
        $this->alamat = $post["alamat"];
        $this->no_hp = $post["no_hp"];
        $this->email = $post["email"];
        $this->db->insert($this->_table, $this);
        return $this->db->insert_id();
    }
}