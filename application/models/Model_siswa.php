<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_siswa extends CI_Model
{

    public function countSiswaSMK()
    {
        $sql = "SELECT count(*) AS siswa_smk FROM `siswa`
                WHERE siswa.jenjang LIKE '%SMK%';";
        $query = $this->db->query($sql);
        return $query->row()->siswa_smk;
    }
    public function DataSiswaPerJenjang()
    {
        $sql = "SELECT *,kelas.id AS id_kelas,jurusan.id AS id_jurusan,kelas.kelas AS nama_kelas,jurusan.jurusan AS nama_jurusan ,siswa.jenjang AS nama_jenjang,count(siswa.nama_siswa) jumlah_siswa FROM `siswa`
                INNER JOIN kelas
                ON siswa.kelas=kelas.id
                INNER JOIN jurusan
                ON siswa.jurusan=jurusan.kode
                GROUP BY kelas.id;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function DataSiswaHeader($id_kelas)
    {
        $sql = "SELECT *,kelas.id AS id_kelas,jurusan.id AS id_jurusan,kelas.kelas AS nama_kelas,jurusan.jurusan AS nama_jurusan ,siswa.jenjang AS nama_jenjang FROM `siswa`
                INNER JOIN kelas
                ON siswa.kelas=kelas.id
                INNER JOIN jurusan
                ON siswa.jurusan=jurusan.kode
                WHERE kelas.id='$id_kelas';";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

    public function DataSiswa($id_kelas)
    {
        $sql = "SELECT *,kelas.id AS id_kelas,jurusan.id AS id_jurusan,kelas.kelas AS nama_kelas,jurusan.jurusan AS nama_jurusan ,siswa.jenjang AS nama_jenjang,siswa.id AS id_siswa FROM `siswa`
                INNER JOIN kelas
                ON siswa.kelas=kelas.id
                INNER JOIN jurusan
                ON siswa.jurusan=jurusan.kode
                WHERE kelas.id='$id_kelas';";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function DataSiswaSMK()
    {
        $sql = "SELECT *, siswa.id AS id_siswa,siswa.jenjang AS nama_jenjang,siswa.jurusan AS kode_jurusan, jurusan.jurusan AS nama_jurusan,kelas.kelas AS nama_kelas FROM `siswa`
                INNER JOIN kelas
                ON siswa.kelas=kelas.id
                INNER JOIN jurusan
                ON siswa.jurusan = jurusan.kode
                WHERE siswa.jenjang LIKE '%SMK%';";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
