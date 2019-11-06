<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{

    public function index()
    {
        $data['judul'] = 'Dasboard';

        $this->load->view('template/header', $data);
        $this->load->view('homepage/index');
        $this->load->view('template/footer');
    }
}
