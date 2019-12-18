<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//header('Access-Control-Allow-Origin: *');

class AnggotaController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("donasi_model");
        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
        if($this->session->userdata('role') != "anggota"){
            redirect(base_url("login"));
        }
    }

    public function dashboard()
    {
        $this->data['content'] = 'menu_admin';
        $this->data['sidebar'] = 'sidebar_anggota';
        $this->load->view('layout/master_layout', $this->data);
    }

    public function add_donasi()
    {
        $this->data['content'] = 'add_donasi';
        $this->data['sidebar'] = 'sidebar_anggota';
        $this->data['javascript'] = 'donasi_js';
        $this->data['style'] = 'donasi_style';
        $this->load->view('layout/master_layout', $this->data);
    }

    public function insert_donasi()
    {
        $data = $this->donasi_model->save_donasi($this->session->userdata('id_anggota'));

        echo json_encode($data);
    }

    public function add_non_donasi()
    {
        $this->data['content'] = 'add_non_donasi';
        $this->data['sidebar'] = 'sidebar_anggota';
        $this->data['javascript'] = null;
        $this->data['style'] = null;
        $this->load->view('layout/master_layout', $this->data);
    }
}
