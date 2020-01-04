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
        $this->load->model("kontak_model");
        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
        if($this->session->userdata('role') != "admin"){
            redirect(base_url("login"));
        }
        $this->load->library('pdf');
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

    public function list_kontak()
    {
        $this->data['content'] = 'list_kontak';
        $this->data['sidebar'] = 'sidebar_admin';
        $this->data['javascript'] = 'kontak_js';
        $this->data['style'] = null;
        $this->data['list_kontak'] = $this->kontak_model->list_kontak();
        $this->load->view('layout/master_layout', $this->data);
    }

    public function delete_kontak(){
        $data = $this->kontak_model->delete_kontak();
        echo json_encode($data);
    }

    public function cetak_donasi($id)
    {
        $data = $this->donasi_model->get_donasi_by_id($id);
        $pdf = new FPDF('L','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetTitle('Cetak Donasi | TBM Sigambir');
        $pdf->SetFont('Arial','BU',12);
        // mencetak string
        $pdf->Cell(50,7,'CETAK BUKTI DONASI',0,0,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(350,7,'TAMAN BACAAN MASYARAKAT',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(450,3,'"SIGAMBIR"',0,1,'C');
        $pdf->SetFont('Arial','',9);
        $pdf->Cell(450,7,'Jalan Dewi Sartika Desa Sigambir Brebes',0,1,'C');
        $pdf->SetFont('Arial','',9);
        $pdf->Cell(450,2,'Telp: 085647361412 Email: tbmsigambir@gmail.com',0,1,'C');
        $pdf->Cell(10,20,'',0,1,'C');
        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(20,6,'No Donatur',1,0);
        $pdf->Cell(30,6,'Nama Donatur',1,0);
        $pdf->Cell(27,6,'Instansi',1,0);
        $pdf->Cell(30,6,'Pekerjaan',1,0);
        $pdf->Cell(30,6,'No Hp',1,0);
        $pdf->Cell(30,6,'Email',1,0);
        $pdf->Cell(60,6,'Alamat Rumah',1,0);
        $pdf->Cell(22,6,'Jumlah Buku',1,0);
        $pdf->Cell(25,6,'Cara Donasi',1,1);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(20,6,$data->id,1,0);
        $pdf->Cell(30,6,$data->nama_donatur,1,0);
        $pdf->Cell(27,6,$data->instansi,1,0);
        $pdf->Cell(30,6,$data->pekerjaan,1,0);
        $pdf->Cell(30,6,$data->no_hp,1,0);
        $pdf->Cell(30,6,$data->email,1,0);
        $pdf->Cell(60,6,$data->alamat_rumah,1,0);
        $pdf->Cell(22,6,$data->jumlah_buku,1,0);
        $pdf->Cell(25,6,$data->cara_donasi,1,1);
        $pdf->Cell(10,11,'',0,1,'C');
        if ($data->cara_donasi == "dijemput"){
            $pdf->SetFont('Arial','B',8);
            $pdf->Cell(35,6,'Alamat Jemput',1,0);
            $pdf->SetFont('Arial','',8);
            $pdf->Cell(85,6,$data->alamat_jemput,1,1);
            $pdf->SetFont('Arial','B',8);
            $pdf->Cell(35,6,'Satu/Dalam Kota',1,0);
            $pdf->SetFont('Arial','',8);
            $pdf->Cell(85,6,$data->satu_kota,1,1);
        } else {
            $pdf->SetFont('Arial','B',10);
            $pdf->Cell(34,6,'Dikirim Ke TBM Dengan Alamat',0,1);
            $pdf->SetFont('Arial','',10);
            $pdf->Cell(34,3,'Jalan Dewi Sartika Desa Sigambir Kec Brebes Kab Brebes 53110',0,1);
        }
        $pdf->Output();
    }

    public function cetak_donasi_non_buku($id)
    {
        $data = $this->donasi_model->get_donasi_non_buku_by_id($id);
        $pdf = new FPDF('L','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetTitle('Cetak Donasi Non Buku| TBM Sigambir');
        $pdf->SetFont('Arial','BU',12);
        // mencetak string
        $pdf->Cell(80,7,'CETAK BUKTI DONASI NON BUKU',0,0,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(290,7,'TAMAN BACAAN MASYARAKAT',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(450,3,'"SIGAMBIR"',0,1,'C');
        $pdf->SetFont('Arial','',9);
        $pdf->Cell(450,7,'Jalan Dewi Sartika Desa Sigambir Brebes',0,1,'C');
        $pdf->SetFont('Arial','',9);
        $pdf->Cell(450,2,'Telp: 085647361412 Email: tbmsigambir@gmail.com',0,1,'C');
        $pdf->Cell(10,20,'',0,1,'C');
        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(20,6,'No Donatur',1,0);
        $pdf->Cell(30,6,'Nama Donatur',1,0);
        $pdf->Cell(27,6,'Instansi',1,0);
        $pdf->Cell(30,6,'Pekerjaan',1,0);
        $pdf->Cell(30,6,'No Hp',1,0);
        $pdf->Cell(30,6,'Email',1,0);
        $pdf->Cell(60,6,'Alamat',1,0);
        $pdf->Cell(22,6,'Terbilang',1,0);
        $pdf->Cell(25,6,'Tgl Transfer',1,1);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(20,6,$data->id,1,0);
        $pdf->Cell(30,6,$data->nama_donatur,1,0);
        $pdf->Cell(27,6,$data->instansi,1,0);
        $pdf->Cell(30,6,$data->pekerjaan,1,0);
        $pdf->Cell(30,6,$data->no_hp,1,0);
        $pdf->Cell(30,6,$data->email,1,0);
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->MultiCell(60,6,$data->alamat,1,'L');
        $pdf->SetXY($x + 60, $y);
        $pdf->MultiCell(22,6,$data->terbilang,1,'L');
        $pdf->SetXY($x + 60, $y);
        $x_cur = $pdf->GetX();
//        $pdf->MultiCell(47,6,$data->tgl_transfer,1,0);
        $pdf->MultiCell(47,6,$data->tgl_transfer,1,0);
        $pdf->Ln(1);
        $pdf->Cell(10,11,'',0,1,'C');
        $pdf->Output();
    }
}
