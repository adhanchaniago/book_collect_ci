<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//header('Access-Control-Allow-Origin: *');

class FrontController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("anggota_model");
        $this->load->model("user_model");
        $this->load->model("buku_model");
        $this->load->model("berita_model");
        $this->load->model("donasi_model");
    }

    public function index()
    {
        $this->data['header'] = 'header';
        $this->load->view('index', $this->data);
    }

    public function berita()
    {
        $this->data['header'] = 'header-bl';
        $this->load->view('berita', $this->data);
    }
}
