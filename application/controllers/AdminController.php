<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//header('Access-Control-Allow-Origin: *');

class AdminController extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

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
        $this->data['content'] = 'menu_admin';
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
        $data = $this->buku_model->save_buku();

        echo json_encode($data);
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
        $data = $this->berita_model->save_berita();

        echo json_encode($data);
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
