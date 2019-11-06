<?php
defined('BASEPATH') or exit('No direct script access allowed');

class V_mhs extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('view_model');
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['judul'] = 'view all data';
        $data['view'] = $this->view_model->getAllView();

        $this->load->view('template/header', $data);
        $this->load->view('v_mhs/index', $data);
        $this->load->view('template/footer');
    }
}
