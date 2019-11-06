<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Log extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Log_model');
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['judul'] = 'Log No.Hp';
        $data['log'] = $this->Log_model->relasi();

        $this->load->view('template/header', $data);
        $this->load->view('log/index', $data);
        $this->load->view('template/footer');
    }

    public function hapus($id)
    {
        $this->Log_model->hapusDataLog($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('log');
    }
}
