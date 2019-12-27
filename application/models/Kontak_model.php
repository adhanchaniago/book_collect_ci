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

    function list_kontak(){
        return $this->db->get($this->_table)->result();
    }

    function delete_kontak(){
        $post = $this->input->post();
        $this->db->where('id', $post['id']);
        return $this->db->delete($this->_table);
    }
}