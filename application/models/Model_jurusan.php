<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_jurusan extends CI_Model
{

    public function countJurusanSMK()
    {
        $sql = "SELECT COUNT(*) AS jurusan FROM `jurusan`;";
        $query = $this->db->query($sql);
        return $query->row()->jurusan;
    }

    public function DataJurusan()
    {
        $sql = "SELECT * FROM `jurusan`";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
