<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_kelas extends CI_Model
{
    public function countKelasSMK()
    {
        $sql = "SELECT COUNT(*) AS kelas_smk FROM `kelas`
                WHERE jenjang LIKE '%SMK%';";
        $query = $this->db->query($sql);
        return $query->row()->kelas_smk;
    }

    public function DataKelas()
    {
        $sql = "SELECT *,kelas.id AS id_kelas FROM `kelas`
                INNER JOIN jurusan
                ON kelas.kode=jurusan.kode;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function DataKelasSMK()
    {
        $sql = "SELECT *,kelas.id AS id_kelas,jurusan.kode AS kode_jurusan FROM `kelas`
                INNER JOIN jurusan
                ON kelas.kode=jurusan.kode
                WHERE kelas.jenjang LIKE '%SMK%';";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
