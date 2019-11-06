<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mhs_model extends CI_Model
{

    public function getAllMhs()
    {
        return $this->db->get('mhs')->result_array();
    }

    public function tambahMhs()
    {
        $data = [
            'nama_mhs' => $this->input->post('nama', true),
            'nim_mhs' => $this->input->post('nim', true),
            'jenis_kelamin' => $this->input->post('gender', true),
            'alamat' => $this->input->post('alamat', true),
            'no_hp' => $this->input->post('nope', true)
        ];

        $this->db->insert('mhs', $data);
    }

    public function hapusDataMhs($id)
    {
        // $this->db->where('id_mhs', $id);
        $this->db->delete('mhs', ['id_mhs' => $id]);
    }

    public function detailDataMhs($id)
    {
        return $this->db->get_where('mhs', ['id_mhs' => $id])->row_array();
    }

    public function editMhs()
    {
        $data = [
            'nama_mhs' => $this->input->post('nama', true),
            'nim_mhs' => $this->input->post('nim', true),
            'jenis_kelamin' => $this->input->post('gender', true),
            'alamat' => $this->input->post('alamat', true),
            'no_hp' => $this->input->post('nope', true)
        ];

        $this->db->where('id_mhs', $this->input->post('id'));
        $this->db->update('mhs', $data);
    }

    public function cariDataMhs()
    {
        $keyword = $this->input->post('keyword');
        $this->db->like('nama_mhs', $keyword);
        $this->db->or_like('alamat', $keyword);
        $this->db->or_like('nim_mhs', $keyword);
        $this->db->or_like('jenis_kelamin', $keyword);
        return $this->db->get('mhs')->result_array();
    }
}
