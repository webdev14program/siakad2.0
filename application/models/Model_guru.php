<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_guru extends CI_Model
{
    public function countGuruTK()
    {
        $sql = "SELECT COUNT(*) AS guru_tk FROM `guru`
                WHERE jenjang LIKE '%TK%';";
        $query = $this->db->query($sql);
        return $query->row()->guru_tk;
    }

    public function countGuruSD()
    {
        $sql = "SELECT COUNT(*) AS guru_sd FROM `guru`
                WHERE jenjang LIKE '%SD%';";
        $query = $this->db->query($sql);
        return $query->row()->guru_sd;
    }

    public function countGuruSMP()
    {
        $sql = "SELECT COUNT(*) AS guru_smp FROM `guru`
                WHERE jenjang LIKE '%SMP%';";
        $query = $this->db->query($sql);
        return $query->row()->guru_smp;
    }

    public function countGuruSMA()
    {
        $sql = "SELECT COUNT(*) AS guru_sma FROM `guru`
                WHERE jenjang LIKE '%SMA%';";
        $query = $this->db->query($sql);
        return $query->row()->guru_sma;
    }
    public function countGuruSMK()
    {
        $sql = "SELECT COUNT(*) AS guru_smk FROM `guru`
                WHERE jenjang LIKE '%SMK%';";
        $query = $this->db->query($sql);
        return $query->row()->guru_smk;
    }

    public function DataPerJenjang()
    {
        $sql = "SELECT *,COUNT(guru.jenjang) AS jumlah_guru,jenjang.jenjang AS nama_jenjang FROM `guru`
                INNER JOIN jenjang
                ON guru.jenjang=jenjang.kode_jenjang
                GROUP BY guru.jenjang
                ORDER BY jenjang.id_jenjang ASC;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function DataGuruHeader($kode_jenjang)
    {
        $sql = "SELECT *,jenjang.jenjang AS nama_jenjang FROM `guru`
                INNER JOIN jenjang
                ON guru.jenjang=jenjang.kode_jenjang
                WHERE guru.jenjang LIKE '%$kode_jenjang%';";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

    public function DataGuru($kode_jenjang)
    {
        $sql = "SELECT *,jenjang.jenjang AS nama_jenjang FROM `guru`
                INNER JOIN jenjang
                ON guru.jenjang=jenjang.kode_jenjang
                WHERE guru.jenjang LIKE '%$kode_jenjang%';";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function DataGuruSMK()
    {
        $sql = "SELECT * FROM `guru`
                WHERE guru.jenjang LIKE '%SMK%';";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function AbsenGuruPerbulan()
    {
        $sql = "SELECT *, monthname(absenguru.date) as bulan, year(absenguru.date) AS tahun, concat(guru.jenjang,monthname(absenguru.date),year(absenguru.date)) AS bulan_tahun, jenjang.jenjang AS nama_jenjang,jenjang.kode_jenjang AS kode_jenjang FROM `absenguru`
INNER JOIN guru
ON absenguru.kode=guru.kode
INNER JOIN jenjang
ON guru.jenjang=jenjang.kode_jenjang
GROUP by bulan_tahun,guru.jenjang  
ORDER BY `tahun` ASC;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function PrintHeaderGuruPerbulan($bulan_tahun)
    {
        $sql = "SELECT guru.id,guru.kode,guru.nama,guru.jenjang,monthname(absenguru.date) AS bulan,year(absenguru.date) AS tahun,
                concat(guru.jenjang,monthname(absenguru.date),year(absenguru.date)) AS bulan_tahun,
                count(IF(absenguru.ket='Masuk',
                'Masuk',NULL)) AS ket_masuk,
                COUNT(IF(hour(absenguru.date)>7  AND absenguru.ket='Masuk',
                'Terlambat',NULL)) AS ket_terlambat,
                count(IF(hour(absenguru.date)>13 AND absenguru.ket='Keluar',
                'Keluar',NULL)) AS ket_keluar
                FROM `absenguru`
                INNER join guru
                ON absenguru.kode=guru.kode
                WHERE concat('SMK',monthname(absenguru.date),year(absenguru.date)) LIKE '%$bulan_tahun%'
                GROUP BY guru.kode;";
        $query = $this->db->query($sql);
        return $query->row_array();
    }
    public function PrintGuruPerbulan($bulan_tahun)
    {
        $sql = "SELECT guru.id,guru.kode,guru.nama,guru.jenjang,monthname(absenguru.date) AS bulan,year(absenguru.date) AS tahun,
                concat(guru.jenjang,monthname(absenguru.date),year(absenguru.date)) AS bulan_tahun,
                count(IF(absenguru.ket='Masuk',
                'Masuk',NULL)) AS ket_masuk,
                COUNT(IF(hour(absenguru.date)>7  AND absenguru.ket='Masuk',
                'Terlambat',NULL)) AS ket_terlambat,
                count(IF(hour(absenguru.date)>13 AND absenguru.ket='Keluar',
                'Keluar',NULL)) AS ket_keluar
                FROM `absenguru`
                INNER join guru
                ON absenguru.kode=guru.kode
                WHERE concat('SMK',monthname(absenguru.date),year(absenguru.date)) LIKE '%$bulan_tahun%'
                GROUP BY guru.kode;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function keterangan_tambahan()
    {
        $sql = "SELECT guru.id,guru.kode,guru.nama,guru.jenjang,keterangan_tambahan.nama_keterangan,keterangan_tambahan.bukti_fisik,keterangan_tambahan.timestamp,
day(keterangan_tambahan.timestamp) AS hari,monthname(keterangan_tambahan.timestamp) AS bulan, year(keterangan_tambahan.timestamp) AS tahun
FROM `keterangan_tambahan`
INNER JOIN guru
ON keterangan_tambahan.id_guru=guru.id
ORDER BY hari DESC;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
