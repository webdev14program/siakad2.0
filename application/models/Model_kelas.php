<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_kelas extends CI_Model
{
    public function DataKelas()
    {
        $sql = "SELECT *,kelas.id AS id_kelas FROM `kelas`
INNER JOIN jurusan
ON kelas.kode=jurusan.kode;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
