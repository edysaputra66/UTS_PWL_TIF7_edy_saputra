<?php
defined('BASEPATH') or exit('No direct script access allowed');

class View_model extends CI_Model
{

    public function getAllView()
    {
        $this->db->select('*');
        $this->db->from('view_mahasiswa');
        $query = $this->db->get();
        return $query->result();
    }
}
