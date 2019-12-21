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
        $this->data['style'] = null;
        $this->data['javascript'] = null;
        $this->data['content'] = 'dashboard_anggota';
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

    public function history_donasi()
    {
        $this->data['content'] = 'list_donasi_anggota';
        $this->data['sidebar'] = 'sidebar_anggota';
        $this->data['javascript'] = 'history_donasi_js';
        $this->data['style'] = 'add_buku_style';
        $this->data['list_donasi'] = $this->donasi_model->list_donasi_by_anggota($this->session->userdata('id_anggota'));
        $this->load->view('layout/master_layout', $this->data);
    }

    public function history_donasi_non_buku()
    {
        $this->data['content'] = 'list_donasi_non_buku_anggota';
        $this->data['sidebar'] = 'sidebar_anggota';
        $this->data['javascript'] = 'history_donasi_js';
        $this->data['style'] = 'add_buku_style';
        $this->data['list_donasi'] = $this->donasi_model->list_donasi_non_buku_by_anggota($this->session->userdata('id_anggota'));
        $this->load->view('layout/master_layout', $this->data);
    }

    public function insert_donasi()
    {
        $data = $this->donasi_model->save_donasi($this->session->userdata('id_anggota'));

        echo json_encode($data);
    }

    public function insert_donasi_non_buku()
    {
        $config['upload_path']="./dist/image/bukti_transfer/";
        $config['allowed_types']='jpeg|jpg|png';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);
        if($this->upload->do_upload("bukti_transfer")){
            echo "success";
            $data = array('upload_data' => $this->upload->data());
            $image = $data['upload_data']['file_name'];
            $data = $this->donasi_model->save_donasi_non_buku($this->session->userdata('id_anggota'), $image);
            echo json_encode($data);
        } else{
            $error = array('error' => $this->upload->display_errors());
            echo json_encode($error);
        }
    }


    public function add_non_donasi()
    {
        $this->data['content'] = 'add_non_donasi';
        $this->data['sidebar'] = 'sidebar_anggota';
        $this->data['javascript'] = 'donasi_js';
        $this->data['style'] = 'donasi_style';
        $this->load->view('layout/master_layout', $this->data);
    }
}
