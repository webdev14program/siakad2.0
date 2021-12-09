<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_kelas extends CI_Model
{
    public function DataKelas()
    {
        $sql = "SELECT * FROM `kelas`";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
