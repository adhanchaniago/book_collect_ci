<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//header('Access-Control-Allow-Origin: *');

class LoginController extends CI_Controller {
    /**
     * @return CI_Loader
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model("anggota_model");
        $this->load->model("user_model");
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function action(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5($password)
        );
        $result = $this->login_model->cek_login("user", $where)->row();
        if($result != null){
            $data_session = array(
                'nama' => $result->username,
                'role' => $result->role,
                'id_anggota' => $result->id_anggota,
                'status' => "login"
            );

            $this->session->set_userdata($data_session);
            if ($result->role == "admin"){
                redirect(base_url("admin"));
            } else {
                redirect(base_url("anggota"));
            }
        }
        else {
            echo "Username dan password salah ! ";
        }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }

    public function register()
    {
        $this->load->view('register');
    }

    public function insert_user()
    {
        $id = $this->anggota_model->save();
        $data = $this->user_model->save_user($id, "anggota");

        echo json_encode($data);
    }
}