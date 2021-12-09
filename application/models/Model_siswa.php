<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_siswa extends CI_Model
{
    public function DataSiswa()
    {
        $sql = "SELECT *,siswa.id AS id_siswa,kelas.kelas AS nama_kelas,jurusan.jurusan AS nama_jurusan FROM `siswa`
INNER JOIN kelas
ON siswa.kelas=kelas.id
INNER JOIN jurusan
ON siswa.jurusan=jurusan.kode;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
