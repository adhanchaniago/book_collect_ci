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
        $this->load->library('pagination');
        $this->load->helper(array('url'));
    }

    public function index()
    {
        $this->data['header'] = 'header';
        $this->load->view('index', $this->data);
    }

    public function berita()
    {
        $this->data['header'] = 'header-bl';
        $this->load->database();
        $jumlah_data = $this->berita_model->jumlah_data();
        $this->load->library('pagination');
        $config['base_url'] = base_url().'berita';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 6;

        # style paging
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['next_link'] = '<span class="lnr lnr-chevron-right"></span>';
        $config['prev_link'] = '<span class="lnr lnr-chevron-left"></span>';
        $config['full_tag_open'] = '<nav class="blog-pagination justify-content-center d-flex"><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';
        $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close'] = '</span></li>';
        $config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close'] = '</span></li>';
        $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close'] = '</span></li>';
        $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close'] = '</span></li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';


        $from = $this->uri->segment(2);
        if (empty($from)){
            $from = 0;
        }
        $this->pagination->initialize($config);
        $this->data['list_berita'] = $this->berita_model->berita_data($config['per_page'], $from);

        $this->load->view('berita', $this->data);
    }

    public function koleksi()
    {
        $this->data['header'] = 'header-bl';
        $this->load->view('koleksi', $this->data);
    }

    function autocomplete_koleksi(){
        if (isset($_GET['term'])) {
            $result = $this->buku_model->search_buku($_GET['term']);
            if (count($result) > 0) {
                foreach ($result as $row)
                    $arr_result[] = $row->judul_buku;
                echo json_encode($arr_result);
            }
        }
    }

    public function by_judul()
    {
        $result = $this->buku_model->search_buku_by_title();
        echo json_encode($result);
    }

}
