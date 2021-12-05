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
}
