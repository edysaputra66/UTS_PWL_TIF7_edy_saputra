<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mhs_model');
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['judul'] = 'Mahasiswa';
        $data['mhs'] = $this->Mhs_model->getAllMhs();
        if ($this->input->post('keyword')) {
            $data['mhs'] = $this->Mhs_model->cariDataMhs();
        }

        $this->load->view('template/header', $data);
        $this->load->view('mhs/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah Mahasiswa';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'NIM', 'required|numeric');
        $this->form_validation->set_rules('gender', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('nope', 'No. HP', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('template/header', $data);
            $this->load->view('mhs/tambah');
            $this->load->view('template/footer');
        } else {

            $this->Mhs_model->tambahMhs();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('mahasiswa');
        }
    }

    public function hapus($id)
    {
        $this->Mhs_model->hapusDataMhs($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('mahasiswa');
    }

    public function detail($id)
    {
        $data['judul'] = 'Form Detail Mahasiswa';
        $data['mhs'] = $this->Mhs_model->detailDataMhs($id);

        $this->load->view('template/header', $data);
        $this->load->view('mhs/detail', $data);
        $this->load->view('template/footer');
    }

    public function edit($id)
    {
        $data['judul'] = 'Edit Mahasiswa';
        $data['mhs'] = $this->Mhs_model->detailDataMhs($id);
        $data['gender'] = ['L', 'P'];

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'NIM', 'required|numeric');
        $this->form_validation->set_rules('gender', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('nope', 'No. HP', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('template/header', $data);
            $this->load->view('mhs/edit', $data);
            $this->load->view('template/footer');
        } else {

            $this->Mhs_model->editMhs();
            $this->session->set_flashdata('flash', 'diedit');
            redirect('mahasiswa');
        }
    }
}
