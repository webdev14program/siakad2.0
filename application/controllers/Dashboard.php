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
        $isi['guru_per_jenjang'] = $this->Model_guru->DataPerJenjang();

        $isi['content'] = 'Guru/tampilan_master_guru';
        $this->load->view('templates/header');
        $this->load->view('tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function detail_master_guru($kode_jenjang)
    {
        $this->Model_keamanan->getKeamanan();
        $isi['header'] = $this->Model_guru->DataGuruHeader($kode_jenjang);
        $isi['data_guru'] = $this->Model_guru->DataGuru($kode_jenjang);

        $isi['content'] = 'Guru/detail_master_guru';
        $this->load->view('templates/header');
        $this->load->view('tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function print_master_guru($kode_jenjang)
    {
        $this->Model_keamanan->getKeamanan();
        $isi['header'] = $this->Model_guru->DataGuruHeader($kode_jenjang);
        $isi['data_guru'] = $this->Model_guru->DataGuru($kode_jenjang);

        $this->load->view('Guru/print_akun_guru', $isi);
    }

    public function master_siswa()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['siswa'] = $this->Model_siswa->DataSiswaPerJenjang();

        $isi['content'] = 'Siswa/tampilan_master_siswa';
        $this->load->view('templates/header');
        $this->load->view('tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function detail_master_siswa($id_kelas)
    {
        $this->Model_keamanan->getKeamanan();
        $isi['header'] = $this->Model_siswa->DataSiswaHeader($id_kelas);
        $isi['data_siswa'] = $this->Model_siswa->DataSiswa($id_kelas);

        $isi['content'] = 'Siswa/detail_master_siswa';
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

    public function master_jurusan()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['jurusan'] = $this->Model_jurusan->DataJurusan();

        $isi['content'] = 'tampilan_master_jurusan';
        $this->load->view('templates/header');
        $this->load->view('tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function data_absen_guru_perbulan()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['absen_guru_perbulan'] = $this->Model_guru->AbsenGuruPerbulan();

        $isi['content'] = 'Absensi/tampilan_absenGuru_per_bulan';
        $this->load->view('templates/header');
        $this->load->view('tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function print_absen_guru_perbulan($bulan_tahun)
    {
        $this->Model_keamanan->getKeamanan();
        $isi['header'] = $this->Model_guru->PrintHeaderGuruPerbulan($bulan_tahun);
        $isi['data_absen_perJenjang'] = $this->Model_guru->PrintGuruPerbulan($bulan_tahun);

        $this->load->view('Absensi/print_absenGuru_per_bulan', $isi);
    }

    public function data_absen_siswa_perbulan()
    {
        $this->Model_keamanan->getKeamanan();
        // $isi['absen_guru_perbulan'] = $this->Model_guru->AbsenGuruPerbulan();

        $isi['content'] = 'Absensi/tampilan_absenSiswa_per_bulan';
        $this->load->view('templates/header');
        $this->load->view('tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function keterangan_tambahan()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['keterangan_tambahan'] = $this->Model_guru->keterangan_tambahan();

        $isi['content'] = 'Absensi/tampilan_keterangan_tambahan';
        $this->load->view('templates/header');
        $this->load->view('tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }


    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/');
    }
}
