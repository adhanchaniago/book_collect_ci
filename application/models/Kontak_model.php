<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak_model extends CI_Model{

    private $_table = "kontak";

    public function insert_kontak()
    {
        $post = $this->input->post();
        $this->name = $post["name"];
        $this->email = $post["email"];
        $this->subject = $post["subject"];
        $this->message = $post["message"];
        $hasil = $this->db->insert($this->_table, $this);
        return $hasil;
    }
}