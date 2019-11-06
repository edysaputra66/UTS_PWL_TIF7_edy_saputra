<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Log_model extends CI_Model
{

    public function getAllLog()
    {
        return $this->db->get('log_nope')->result_array();
    }

    public function hapusDataLog($id)
    {
        // $this->db->where('id_mhs', $id);
        $this->db->delete('log_nope', ['id_log' => $id]);
    }

    public function relasi()
    {
        $this->db->select('*');
        $this->db->from('log_nope');
        $this->db->join('mhs', 'mhs.nim_mhs=log_nope.nim_mhs');
        $query = $this->db->get();
        return $query->result();
    }
}
