<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['guru_tk'] = $this->Model_guru->countGuruTK();
        $isi['guru_sd'] = $this->Model_guru->countGuruSD();
        $isi['guru_smp'] = $this->Model_guru->countGuruSMP();
        $isi['guru_sma'] = $this->Model_guru->countGuruSMA();
        $isi['guru_smk'] = $this->Model_guru->countGuruSMK();
        $isi['content'] = 'tampilan_home';
        $this->load->view('templates/header');
        $this->load->view('tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function master_guru()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['guru'] = $this->Model_guru->DataGuru();

        $isi['content'] = 'tampilan_master_guru';
        $this->load->view('templates/header');
        $this->load->view('tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function master_siswa()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['siswa'] = $this->Model_siswa->DataSiswa();

        $isi['content'] = 'tampilan_master_siswa';
        $this->load->view('templates/header');
        $this->load->view('tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function master_kelas()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['kelas'] = $this->Model_kelas->DataKelas();

        $isi['content'] = 'tampilan_master_kelas';
        $this->load->view('templates/header');
        $this->load->view('tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }
}
