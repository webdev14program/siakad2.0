<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_siswa extends CI_Model
{
    public function DataSiswa()
    {
        $sql = "SELECT *,kelas.kelas AS nama_kelas FROM `siswa`
        INNER join kelas
        ON siswa.kelas=kelas.id;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
