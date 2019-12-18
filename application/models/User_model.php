<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $_table = "user";
    public function save_user($id_anggota, $role)
    {
        $post = $this->input->post();
        $this->id_anggota = $id_anggota;
        $this->username = $post["username"];
        $this->password = md5($post["password"]);
        $this->role = $role;
        $res = $this->db->insert($this->_table, $this);
        return $res;
    }
}