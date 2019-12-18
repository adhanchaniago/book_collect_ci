<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//header('Access-Control-Allow-Origin: *');

class AnggotaController extends CI_Controller {

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
        $this->load->view('layout/master_layout', $this->data);
    }

    public function add_non_donasi()
    {
        $this->data['content'] = 'add_non_donasi';
        $this->data['sidebar'] = 'sidebar_anggota';
        $this->load->view('layout/master_layout', $this->data);
    }
}
