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
        $this->load->library('pdf');
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
}
