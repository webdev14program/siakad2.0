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

    public function DataGuruFull()
    {
        $sql = "SELECT * FROM `guru`";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function DataGuruSD()
    {
        $sql = "SELECT * FROM `guru`
                WHERE guru.jenjang LIKE '%SD%';";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function DataGuruSMP()
    {
        $sql = "SELECT * FROM `guru`
                WHERE guru.jenjang LIKE '%SMP%';";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function DataGuruSMA()
    {
        $sql = "SELECT * FROM `guru`
                WHERE guru.jenjang LIKE '%SMA%';";
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
        $sql = "SELECT *, monthname(absenguru.date) as bulan, year(absenguru.date) AS tahun, concat(guru.jenjang,monthname(absenguru.date),year(absenguru.date)) AS bulan_tahun, jenjang.jenjang AS nama_jenjang,jenjang.kode_jenjang AS kode_jenjang, jenjang.* FROM `absenguru`
                INNER JOIN guru
                ON absenguru.kode=guru.kode
                INNER JOIN jenjang
                ON guru.jenjang=jenjang.kode_jenjang
                GROUP by bulan_tahun,guru.jenjang  
                ORDER BY `tahun`, jenjang.id_jenjang ASC;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function DataAbsenGuruPerhariPerbulan()
    {
        $sql = "SELECT *, monthname(absenguru.date) as bulan, year(absenguru.date) AS tahun, concat(guru.jenjang,monthname(absenguru.date),year(absenguru.date)) AS bulan_tahun, jenjang.jenjang AS nama_jenjang,jenjang.kode_jenjang AS kode_jenjang, jenjang.* ,
concat(jenjang.kode_jenjang,monthname(absenguru.date),year(absenguru.date)) AS jenjang_bulan_tahun
FROM `absenguru`
                INNER JOIN guru
                ON absenguru.kode=guru.kode
                INNER JOIN jenjang
                ON guru.jenjang=jenjang.kode_jenjang
                GROUP by bulan_tahun,guru.jenjang  
                ORDER BY `tahun`, jenjang.id_jenjang ASC;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function AbsenGuruPerbulanSD()
    {
        $sql = "SELECT *, monthname(absenguru.date) as bulan, year(absenguru.date) AS tahun, concat(guru.jenjang,monthname(absenguru.date),year(absenguru.date)) AS bulan_tahun, jenjang.jenjang AS nama_jenjang,jenjang.kode_jenjang AS kode_jenjang, jenjang.* FROM `absenguru`
                INNER JOIN guru
                ON absenguru.kode=guru.kode
                INNER JOIN jenjang
                ON guru.jenjang=jenjang.kode_jenjang
                WHERE jenjang.kode_jenjang='SD'
                GROUP by bulan_tahun,guru.jenjang  
               ORDER BY absenguru.date DESC;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function AbsenGuruPerbulanSMP()
    {
        $sql = "SELECT *, monthname(absenguru.date) as bulan, year(absenguru.date) AS tahun, concat(guru.jenjang,monthname(absenguru.date),year(absenguru.date)) AS bulan_tahun, jenjang.jenjang AS nama_jenjang,jenjang.kode_jenjang AS kode_jenjang, jenjang.* FROM `absenguru`
                INNER JOIN guru
                ON absenguru.kode=guru.kode
                INNER JOIN jenjang
                ON guru.jenjang=jenjang.kode_jenjang
                WHERE jenjang.kode_jenjang='SMP'
                GROUP by bulan_tahun,guru.jenjang  
                ORDER BY absenguru.date DESC;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function AbsenGuruPerbulanSMA()
    {
        $sql = "SELECT *, monthname(absenguru.date) as bulan, year(absenguru.date) AS tahun, concat(guru.jenjang,monthname(absenguru.date),year(absenguru.date)) AS bulan_tahun, jenjang.jenjang AS nama_jenjang,jenjang.kode_jenjang AS kode_jenjang, jenjang.* FROM `absenguru`
                INNER JOIN guru
                ON absenguru.kode=guru.kode
                INNER JOIN jenjang
                ON guru.jenjang=jenjang.kode_jenjang
                WHERE jenjang.kode_jenjang='SMA'
                GROUP by bulan_tahun,guru.jenjang  
                ORDER BY absenguru.date DESC;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function AbsenGuruPerbulanSMK()
    {
        $sql = "SELECT *, monthname(absenguru.date) as bulan, year(absenguru.date) AS tahun, concat(guru.jenjang,monthname(absenguru.date),year(absenguru.date)) AS bulan_tahun, jenjang.jenjang AS nama_jenjang,jenjang.kode_jenjang AS kode_jenjang, jenjang.* FROM `absenguru`
                INNER JOIN guru
                ON absenguru.kode=guru.kode
                INNER JOIN jenjang
                ON guru.jenjang=jenjang.kode_jenjang
                WHERE jenjang.kode_jenjang='SMK'
                GROUP by bulan_tahun,guru.jenjang  
                ORDER BY absenguru.date DESC;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function HeaderAbsenGuruPerhari($bulan_tahun)
    {
        $sql = "SELECT day(absenguru.date) AS hari,monthname(absenguru.date) AS bulan, year(absenguru.date) AS tahun,concat(guru.jenjang,day(absenguru.date),monthname(absenguru.date),year(absenguru.date)) AS jenjang_hari_bulan_tahun FROM `absenguru`
                INNER JOIN guru
                ON absenguru.kode=guru.kode
                WHERE concat(guru.jenjang,day(absenguru.date),monthname(absenguru.date),year(absenguru.date)) = '$bulan_tahun'
                GROUP BY jenjang_hari_bulan_tahun;";
        $query = $this->db->query($sql);
        return $query->row_array();
    }
    public function DataAbsenGuruPerhari($bulan_tahun)
    {
        $sql = "SELECT absenguru.id_absenGuru,guru.id,guru.nama,guru.jenjang,absenguru.ket,concat(hour(absenguru.date),':',minute(absenguru.date)) AS jam,
                day(absenguru.date) AS hari,monthname(absenguru.date) AS bulan, year(absenguru.date) AS tahun,concat(guru.jenjang,day(absenguru.date),monthname(absenguru.date),year(absenguru.date)) AS jenjang_hari_bulan_tahun FROM `absenguru`
                INNER JOIN guru
                ON absenguru.kode=guru.kode
                WHERE absenguru.ket = 'Masuk' AND concat(guru.jenjang,day(absenguru.date),monthname(absenguru.date),year(absenguru.date)) = '$bulan_tahun'
                ORDER BY absenguru.date DESC;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function HeaderAbsenGuruPerhariSD($bulan_tahun)
    {
        $sql = "SELECT *, monthname(absenguru.date) as bulan, year(absenguru.date) AS tahun, concat(guru.jenjang,monthname(absenguru.date),year(absenguru.date)) AS bulan_tahun, jenjang.jenjang AS nama_jenjang,jenjang.kode_jenjang AS kode_jenjang, jenjang.* FROM `absenguru`
                INNER JOIN guru
                ON absenguru.kode=guru.kode
                INNER JOIN jenjang
                ON guru.jenjang=jenjang.kode_jenjang
               WHERE (concat(guru.jenjang,monthname(absenguru.date),year(absenguru.date))) = '$bulan_tahun'
               GROUP BY absenguru.date
                ORDER BY absenguru.date DESC;";
        $query = $this->db->query($sql);
        return $query->row_array();
    }
    public function DataAbsenGuruPerhariSD($bulan_tahun)
    {
        $sql = "SELECT *, day(absenguru.date) AS tanggal,monthname(absenguru.date) as bulan, year(absenguru.date) AS tahun, concat(guru.jenjang,day(absenguru.date),monthname(absenguru.date),year(absenguru.date)) AS bulan_tahun,concat(guru.jenjang,day(absenguru.date),monthname(absenguru.date),year(absenguru.date)) AS tanggal_bulan_tahun,jenjang.jenjang AS nama_jenjang,jenjang.kode_jenjang AS kode_jenjang, jenjang.* FROM `absenguru`
                INNER JOIN guru
                ON absenguru.kode=guru.kode
                INNER JOIN jenjang
                ON guru.jenjang=jenjang.kode_jenjang
               WHERE concat(guru.jenjang,monthname(absenguru.date),year(absenguru.date)) ='$bulan_tahun'
               GROUP BY tanggal_bulan_tahun
                ORDER BY absenguru.date DESC;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function HeaderAbsenGuruPerhariSMP($bulan_tahun)
    {
        $sql = "SELECT *, monthname(absenguru.date) as bulan, year(absenguru.date) AS tahun, concat(guru.jenjang,monthname(absenguru.date),year(absenguru.date)) AS bulan_tahun, jenjang.jenjang AS nama_jenjang,jenjang.kode_jenjang AS kode_jenjang, jenjang.* FROM `absenguru`
                INNER JOIN guru
                ON absenguru.kode=guru.kode
                INNER JOIN jenjang
                ON guru.jenjang=jenjang.kode_jenjang
               WHERE (concat(guru.jenjang,monthname(absenguru.date),year(absenguru.date))) = '$bulan_tahun'
               GROUP BY absenguru.date
                ORDER BY absenguru.date DESC;";
        $query = $this->db->query($sql);
        return $query->row_array();
    }
    public function DataAbsenGuruPerhariSMP($bulan_tahun)
    {
        $sql = "SELECT *, day(absenguru.date) AS tanggal,monthname(absenguru.date) as bulan, year(absenguru.date) AS tahun, concat(guru.jenjang,day(absenguru.date),monthname(absenguru.date),year(absenguru.date)) AS bulan_tahun,concat(guru.jenjang,day(absenguru.date),monthname(absenguru.date),year(absenguru.date)) AS tanggal_bulan_tahun,jenjang.jenjang AS nama_jenjang,jenjang.kode_jenjang AS kode_jenjang, jenjang.* FROM `absenguru`
                INNER JOIN guru
                ON absenguru.kode=guru.kode
                INNER JOIN jenjang
                ON guru.jenjang=jenjang.kode_jenjang
               WHERE concat(guru.jenjang,monthname(absenguru.date),year(absenguru.date)) ='$bulan_tahun'
               GROUP BY tanggal_bulan_tahun
                ORDER BY absenguru.date DESC;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function HeaderAbsenGuruPerhariSMA($bulan_tahun)
    {
        $sql = "SELECT *, monthname(absenguru.date) as bulan, year(absenguru.date) AS tahun, concat(guru.jenjang,monthname(absenguru.date),year(absenguru.date)) AS bulan_tahun, jenjang.jenjang AS nama_jenjang,jenjang.kode_jenjang AS kode_jenjang, jenjang.* FROM `absenguru`
                INNER JOIN guru
                ON absenguru.kode=guru.kode
                INNER JOIN jenjang
                ON guru.jenjang=jenjang.kode_jenjang
               WHERE (concat(guru.jenjang,monthname(absenguru.date),year(absenguru.date))) = '$bulan_tahun'
               GROUP BY absenguru.date
                ORDER BY absenguru.date DESC;";
        $query = $this->db->query($sql);
        return $query->row_array();
    }
    public function DataAbsenGuruPerhariSMA($bulan_tahun)
    {
        $sql = "SELECT *, day(absenguru.date) AS tanggal,monthname(absenguru.date) as bulan, year(absenguru.date) AS tahun, concat(guru.jenjang,day(absenguru.date),monthname(absenguru.date),year(absenguru.date)) AS bulan_tahun,concat(guru.jenjang,day(absenguru.date),monthname(absenguru.date),year(absenguru.date)) AS tanggal_bulan_tahun,jenjang.jenjang AS nama_jenjang,jenjang.kode_jenjang AS kode_jenjang, jenjang.* FROM `absenguru`
                INNER JOIN guru
                ON absenguru.kode=guru.kode
                INNER JOIN jenjang
                ON guru.jenjang=jenjang.kode_jenjang
               WHERE concat(guru.jenjang,monthname(absenguru.date),year(absenguru.date)) ='$bulan_tahun'
               GROUP BY tanggal_bulan_tahun
                ORDER BY absenguru.date DESC;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function HeaderAbsenGuruPerhariSMK($bulan_tahun)
    {
        $sql = "SELECT *, monthname(absenguru.date) as bulan, year(absenguru.date) AS tahun, concat(guru.jenjang,monthname(absenguru.date),year(absenguru.date)) AS bulan_tahun, jenjang.jenjang AS nama_jenjang,jenjang.kode_jenjang AS kode_jenjang, jenjang.* FROM `absenguru`
                INNER JOIN guru
                ON absenguru.kode=guru.kode
                INNER JOIN jenjang
                ON guru.jenjang=jenjang.kode_jenjang
               WHERE (concat(guru.jenjang,monthname(absenguru.date),year(absenguru.date))) = '$bulan_tahun'
               GROUP BY absenguru.date
                ORDER BY absenguru.date DESC;";
        $query = $this->db->query($sql);
        return $query->row_array();
    }
    public function DataAbsenGuruPerhariSMK($bulan_tahun)
    {
        $sql = "SELECT *, day(absenguru.date) AS tanggal,monthname(absenguru.date) as bulan, year(absenguru.date) AS tahun, concat(guru.jenjang,day(absenguru.date),monthname(absenguru.date),year(absenguru.date)) AS bulan_tahun,
concat(guru.jenjang,day(absenguru.date),monthname(absenguru.date),year(absenguru.date)) AS tanggal_bulan_tahun,
jenjang.jenjang AS nama_jenjang,jenjang.kode_jenjang AS kode_jenjang, jenjang.* FROM `absenguru`
                INNER JOIN guru
                ON absenguru.kode=guru.kode
                INNER JOIN jenjang
                ON guru.jenjang=jenjang.kode_jenjang
               WHERE concat(guru.jenjang,monthname(absenguru.date),year(absenguru.date)) ='$bulan_tahun'
               GROUP BY tanggal_bulan_tahun
                ORDER BY absenguru.date DESC;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function PrintHeaderGuruPerbulan($bulan_tahun)
    {
        $sql = "SELECT guru.id,guru.kode,guru.nama,guru.jenjang,absenguru.ket,monthname(absenguru.date) AS bulan,year(absenguru.date) AS tahun,concat(guru.jenjang,monthname(absenguru.date),year(absenguru.date)) AS bulan_tahun,concat(hour(absenguru.date),':',minute(absenguru.date)) AS jam ,
                COUNT(IF(absenguru.ket='Masuk','Masuk',NULL)) AS ket_masuk,
                COUNT(IF(concat(hour(absenguru.date),':',minute(absenguru.date))>'7:16' AND absenguru.ket='Masuk','Terlambat',NULL)) AS ket_terlambat,
                COUNT(IF(hour(absenguru.date)>13 AND absenguru.ket='Keluar','Keluar',NULL)) AS ket_keluar
                FROM `absenguru`
                INNER JOIN guru
                ON absenguru.kode=guru.kode
                WHERE concat(guru.jenjang,monthname(absenguru.date),year(absenguru.date))='$bulan_tahun'
                GROUP BY guru.id
                ORDER BY guru.id ASC;";
        $query = $this->db->query($sql);
        return $query->row_array();
    }
    public function PrintGuruPerbulan($bulan_tahun)
    {
        $sql = "SELECT guru.id,guru.kode,guru.nama,guru.jenjang,absenguru.ket,monthname(absenguru.date) AS bulan,year(absenguru.date) AS tahun,concat(guru.jenjang,monthname(absenguru.date),year(absenguru.date)) AS bulan_tahun,concat(hour(absenguru.date),':',minute(absenguru.date)) AS jam ,
                COUNT(IF(absenguru.ket='Masuk','Masuk',NULL)) AS ket_masuk,
                COUNT(IF(concat(hour(absenguru.date),':',minute(absenguru.date))>'6:41' AND absenguru.ket='Masuk','Terlambat',NULL)) AS ket_terlambat,
                COUNT(IF(hour(absenguru.date)>13 AND absenguru.ket='Keluar','Keluar',NULL)) AS ket_keluar,
                COUNT(if(absenguru.ket='Sakit','Sakit',NULL)) AS ket_sakit,
                COUNT(if(absenguru.ket='Ijin','Ijin',NULL)) AS ket_ijin
                FROM `absenguru`
                INNER JOIN guru
                ON absenguru.kode=guru.kode
                WHERE concat(guru.jenjang,monthname(absenguru.date),year(absenguru.date)) ='$bulan_tahun'
                GROUP BY guru.id
                ORDER BY guru.id ASC;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function PrintHeaderGuruPerHari($hari_bulan_tahun)
    {
        $sql = "SELECT guru.jenjang,absenguru.ket,day(absenguru.date) AS hari,monthname(absenguru.date) AS bulan, YEAR(absenguru.date) AS tahun,
concat(guru.jenjang,day(absenguru.date),monthname(absenguru.date),year(absenguru.date)) AS tanggal
FROM `absenguru`
INNER JOIN guru
ON absenguru.kode=guru.kode
WHERE absenguru.ket='Masuk' AND concat(guru.jenjang,day(absenguru.date),monthname(absenguru.date),year(absenguru.date)) ='$hari_bulan_tahun'
GROUP BY tanggal
ORDER BY absenguru.date DESC;";
        $query = $this->db->query($sql);
        return $query->row_array();
    }
    public function PrintDataGuruPerHari($hari_bulan_tahun)
    {
        $terlambat_lebih = '<h6 class="text-danger font-weight-bold">absen masuk > jam 8</h6>';
        $terlambat = '<h6 class="text-danger font-weight-bold">Terlambat</h6>';
        $masuk = '<h6 class="text-success font-weight-bold">Sukses Absen</h6>';
        $sql = "SELECT guru.id,guru.nama, guru.jenjang, concat(hour(absenguru.date),':',minute(absenguru.date)) AS jam, absenguru.ket, 
                day(absenguru.date) AS hari,monthname(absenguru.date) AS bulan,YEAR(absenguru.date) as tahun,
                concat(guru.jenjang,day(absenguru.date),monthname(absenguru.date),year(absenguru.date)) AS tanggal,
                if(HOUR(absenguru.date)<7 AND minute(absenguru.date)<59  OR minute(absenguru.date)<=5 ,'$masuk','$terlambat') AS status_absen_masuk,
                if(hour(absenguru.date)>=8  ,'$terlambat_lebih',null) AS status_lewat_absen_masuk
                FROM `absenguru`
                INNER JOIN guru
                ON absenguru.kode=guru.kode
                WHERE absenguru.ket='Masuk' AND concat(guru.jenjang,day(absenguru.date),monthname(absenguru.date),year(absenguru.date)) ='$hari_bulan_tahun'
                ORDER BY absenguru.date DESC;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function PrintHeaderGuruPerHarKeluar($hari_bulan_tahun)
    {
        $sql = "SELECT guru.id,guru.nama,guru.jenjang,day(absenguru.date) AS hari,monthname(absenguru.date) AS bulan,YEAR(absenguru.date) as tahun,
                concat(hour(absenguru.date),':',minute(absenguru.date)) AS jam,absenguru.ket,
                concat(guru.jenjang,day(absenguru.date),monthname(absenguru.date),year(absenguru.date)) AS tanggal,
                IF(hour(absenguru.date)<=12 ,'Absen Keluar < Jam 12', 'Sukses Absen Keluar') as status_keluar
                FROM `absenguru`
                INNER JOIN guru
                ON absenguru.kode=guru.kode
                WHERE absenguru.ket = 'Keluar' AND concat(guru.jenjang,day(absenguru.date),monthname(absenguru.date),year(absenguru.date)) ='$hari_bulan_tahun'
                order BY concat(hour(absenguru.date),':',minute(absenguru.date)) DESC;";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

    public function PrintDataGuruPerHariKeluar($hari_bulan_tahun)
    {
        $belum_keluar = '<h6 class="text-danger font-weight-bold">Absen Keluar < Jam 12</h6>';
        $sukses_keluar = '<h6 class="text-success font-weight-bold">Sukses Absen Keluar</h6>';
        $sql = "SELECT guru.id,guru.nama,guru.jenjang,day(absenguru.date) AS hari,monthname(absenguru.date) AS bulan,YEAR(absenguru.date) as tahun,
            concat(hour(absenguru.date),':',minute(absenguru.date)) AS jam,absenguru.ket,
            concat(guru.jenjang,day(absenguru.date),monthname(absenguru.date),year(absenguru.date)) AS tanggal,
            IF(hour(absenguru.date)<=12 ,'$belum_keluar', '$sukses_keluar') as status_keluar
            FROM `absenguru`
            INNER JOIN guru
            ON absenguru.kode=guru.kode
            WHERE absenguru.ket = 'Keluar' AND concat(guru.jenjang,day(absenguru.date),monthname(absenguru.date),year(absenguru.date)) ='$hari_bulan_tahun'
           order BY status_keluar ASC;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function keterangan_tambahan()
    {
        $sql = "SELECT guru.id,guru.kode,guru.nama,guru.jenjang,keterangan_tambahan.nama_keterangan,keterangan_tambahan.timestamp,
            day(keterangan_tambahan.timestamp) AS hari,monthname(keterangan_tambahan.timestamp) AS bulan, year(keterangan_tambahan.timestamp) AS tahun
            FROM `keterangan_tambahan`
            INNER JOIN guru
            ON keterangan_tambahan.kode_guru=guru.kode
            ORDER BY keterangan_tambahan.timestamp DESC;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }


    public function keterangan_tambahanSD()
    {
        $sql = "SELECT guru.id,guru.kode,guru.nama,guru.jenjang,keterangan_tambahan.nama_keterangan,keterangan_tambahan.timestamp,
            day(keterangan_tambahan.timestamp) AS hari,monthname(keterangan_tambahan.timestamp) AS bulan, year(keterangan_tambahan.timestamp) AS tahun
            FROM `keterangan_tambahan`
            INNER JOIN guru
            ON keterangan_tambahan.kode_guru=guru.kode
            WHERE guru.jenjang='SD'
            ORDER BY keterangan_tambahan.timestamp DESC;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function keterangan_tambahanSMP()
    {
        $sql = "SELECT guru.id,guru.kode,guru.nama,guru.jenjang,keterangan_tambahan.nama_keterangan,keterangan_tambahan.timestamp,
            day(keterangan_tambahan.timestamp) AS hari,monthname(keterangan_tambahan.timestamp) AS bulan, year(keterangan_tambahan.timestamp) AS tahun
            FROM `keterangan_tambahan`
            INNER JOIN guru
            ON keterangan_tambahan.kode_guru=guru.kode
            WHERE guru.jenjang='SMP'
            ORDER BY keterangan_tambahan.timestamp DESC;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function keterangan_tambahanSMA()
    {
        $sql = "SELECT guru.id,guru.kode,guru.nama,guru.jenjang,keterangan_tambahan.nama_keterangan,keterangan_tambahan.timestamp,
            day(keterangan_tambahan.timestamp) AS hari,monthname(keterangan_tambahan.timestamp) AS bulan, year(keterangan_tambahan.timestamp) AS tahun
            FROM `keterangan_tambahan`
            INNER JOIN guru
            ON keterangan_tambahan.kode_guru=guru.kode
            WHERE guru.jenjang='SMA'
            ORDER BY keterangan_tambahan.timestamp DESC;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function keterangan_tambahanSMK()
    {
        $sql = "SELECT guru.id,guru.kode,guru.nama,guru.jenjang,keterangan_tambahan.nama_keterangan,keterangan_tambahan.timestamp,
            day(keterangan_tambahan.timestamp) AS hari,monthname(keterangan_tambahan.timestamp) AS bulan, year(keterangan_tambahan.timestamp) AS tahun
            FROM `keterangan_tambahan`
            INNER JOIN guru
            ON keterangan_tambahan.kode_guru=guru.kode
            WHERE guru.jenjang='SMK'
            ORDER BY keterangan_tambahan.timestamp DESC;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
