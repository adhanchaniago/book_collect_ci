<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//header('Access-Control-Allow-Origin: *');

class AdminController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("anggota_model");
        $this->load->model("user_model");
        $this->load->model("buku_model");
        $this->load->model("berita_model");
        $this->load->model("donasi_model");
        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
        if($this->session->userdata('role') != "admin"){
            redirect(base_url("login"));
        }
    }

    public function dashboard()
    {
        $this->data['content'] = 'dashboard_admin';
        $this->data['sidebar'] = 'sidebar_admin';
        $this->data['javascript'] = null;
        $this->data['style'] = null;
        $this->load->view('layout/master_layout', $this->data);
    }

    public function add_user()
    {
        $this->data['content'] = 'add_user';
        $this->data['sidebar'] = 'sidebar_admin';
        $this->data['javascript'] = 'add_user_js';
        $this->data['style'] = null;
        $this->load->view('layout/master_layout', $this->data);
    }

    public function insert_user()
    {
        $id = $this->anggota_model->save();
        $this->user_model->save_user($id, "admin");

        $this->load->view("admin/add_user");
    }

    public function add_buku()
    {
        $this->data['content'] = 'add_buku';
        $this->data['sidebar'] = 'sidebar_admin';
        $this->data['javascript'] = 'add_buku_js';
        $this->data['style'] = 'add_buku_style';
        $this->load->view('layout/master_layout', $this->data);
    }

    public function insert_buku()
    {
        $config['upload_path']="./dist/image/cover_buku/";
        $config['allowed_types']='jpeg|jpg|png';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);
        if($this->upload->do_upload("cover_buku")){
            $data = array('upload_data' => $this->upload->data());
            $image = $data['upload_data']['file_name'];
            $data = $this->buku_model->save_buku($image);
            echo json_encode($data);
        } else{
            $error = array('error' => $this->upload->display_errors());
            echo json_encode($error);
        }
    }

    public function edit_buku()
    {
        $config['upload_path']="./dist/image/cover_buku/";
        $config['allowed_types']='jpeg|jpg|png';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);
        if($this->upload->do_upload("cover_buku")){
            $data = array('upload_data' => $this->upload->data());
            $image = $data['upload_data']['file_name'];
            $data = $this->buku_model->update_buku($image);
            echo json_encode($data);
        } else{
            $data = $this->buku_model->update_buku(null);
            echo json_encode($data);
        }
    }

    public function list_buku()
    {
        $this->data['content'] = 'list_buku';
        $this->data['sidebar'] = 'sidebar_admin';
        $this->data['javascript'] = 'add_buku_js';
        $this->data['style'] = 'add_buku_style';
        $this->data['list_buku'] = $this->buku_model->list_buku();
        $this->load->view('layout/master_layout', $this->data);
    }

    public function add_berita()
    {
        $this->data['content'] = 'add_berita';
        $this->data['sidebar'] = 'sidebar_admin';
        $this->data['javascript'] = 'add_berita_js';
        $this->data['style'] = 'add_berita_style';
        $this->load->view('layout/master_layout', $this->data);
    }

    public function insert_berita()
    {
        $config['upload_path']="./dist/image/berita/";
        $config['allowed_types']='jpeg|jpg|png';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);
        if($this->upload->do_upload("image")){
            $data = array('upload_data' => $this->upload->data());
            $image = $data['upload_data']['file_name'];
            $data = $this->berita_model->save_berita($image);
            echo json_encode($data);
        } else{
            $error = array('error' => $this->upload->display_errors());
            echo json_encode($error);
        }
    }

    public function content_berita($id){
        echo $this->berita_model->content_berita($id);
    }

    public function list_berita()
    {
        $this->data['content'] = 'list_berita';
        $this->data['sidebar'] = 'sidebar_admin';
        $this->data['javascript'] = 'berita_js';
        $this->data['style'] = null;
        $this->data['list_berita'] = $this->berita_model->list_berita();
        $this->load->view('layout/master_layout', $this->data);
    }


    public function change_progres_buku()
    {
        $data = $this->donasi_model->change_progres("donasi_buku");

        echo json_encode($data);
    }

    public function change_progres_non_buku()
    {
        $data = $this->donasi_model->change_progres("donasi_non_buku");

        echo json_encode($data);
    }

    public function donasi_buku()
    {
        $this->data['content'] = 'kelola_donasi_buku';
        $this->data['sidebar'] = 'sidebar_admin';
        $this->data['javascript'] = 'kelola_data_donasi_js';
        $this->data['style'] = null;
        $this->data['list_donasi'] = $this->donasi_model->list_donasi_buku_with_anggota();
        $this->load->view('layout/master_layout', $this->data);
    }

    public function donasi_non_buku()
    {
        $this->data['content'] = 'kelola_donasi_non_buku';
        $this->data['sidebar'] = 'sidebar_admin';
        $this->data['javascript'] = 'kelola_data_donasi_js';
        $this->data['style'] = null;
        $this->data['list_donasi'] = $this->donasi_model->list_donasi_non_buku_with_anggota();
        $this->load->view('layout/master_layout', $this->data);
    }
}
