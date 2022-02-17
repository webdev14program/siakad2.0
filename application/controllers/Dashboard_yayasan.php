<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_yayasan extends CI_Controller
{
    public function index()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['guru_tk'] = $this->Model_guru->countGuruTK();
        $isi['guru_sd'] = $this->Model_guru->countGuruSD();
        $isi['guru_smp'] = $this->Model_guru->countGuruSMP();
        $isi['guru_sma'] = $this->Model_guru->countGuruSMA();
        $isi['guru_smk'] = $this->Model_guru->countGuruSMK();
        $isi['content'] = 'Yayasan/tampilan_home';
        $this->load->view('templates/header');
        $this->load->view('Yayasan/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function master_guru()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['guru_per_jenjang'] = $this->Model_guru->DataPerJenjang();

        $isi['content'] = 'Yayasan/Guru/tampilan_master_guru';
        $this->load->view('templates/header');
        $this->load->view('Yayasan/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function detail_master_guru($kode_jenjang)
    {
        $this->Model_keamanan->getKeamanan();
        $isi['header'] = $this->Model_guru->DataGuruHeader($kode_jenjang);
        $isi['data_guru'] = $this->Model_guru->DataGuru($kode_jenjang);

        $isi['content'] = 'Yayasan/Guru/detail_master_guru';
        $this->load->view('templates/header');
        $this->load->view('Yayasan/tampilan_dashboard', $isi);
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

        $isi['content'] = 'Yayasan/Absensi/tampilan_absenGuru_per_bulan';
        $this->load->view('templates/header');
        $this->load->view('Yayasan/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function data_absen_guru_perhari($bulan_tahun)
    {
        $this->Model_keamanan->getKeamanan();
        $isi['header'] = $this->Model_guru->HeaderAbsenGuruPerhariSMK($bulan_tahun);
        $isi['data'] = $this->Model_guru->DataAbsenGuruPerhariSMK($bulan_tahun);


        $isi['content'] = 'Yayasan/Absensi/tampilan_absenGuru_per_hari';
        $this->load->view('templates/header');
        $this->load->view('Yayasan/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function detail_absen_guru_hari_masuk($bulan_tahun)
    {
        $this->Model_keamanan->getKeamanan();
        $isi['header'] = $this->Model_guru->HeaderAbsenGuruPerhari($bulan_tahun);
        $isi['data'] = $this->Model_guru->DataAbsenGuruPerhari($bulan_tahun);


        $isi['content'] = 'Absensi/tampilan_detail_absenGuru_per_hari';
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
        $isi['guru'] = $this->Model_guru->DataGuruFull();

        $isi['keterangan_tambahan'] = $this->Model_guru->keterangan_tambahan();

        $isi['content'] = 'Yayasan/Absensi/tampilan_keterangan_tambahan';
        $this->load->view('templates/header');
        $this->load->view('Yayasan/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function upload_keterangan_tambahan()
    {
        $kode = $this->input->post('kode');
        $nama_keterangan = $this->input->post('nama_keterangan');

        $data = array(
            'id_keterangan'    => rand(100000, 999999),
            'kode_guru'         => $kode,
            'nama_keterangan'   => $nama_keterangan
        );

        $data2 = array(
            'id_absenGuru'    => rand(100000, 999999),
            'kode'              => $kode,
            'ket'               => $nama_keterangan
        );

        $this->db->insert('keterangan_tambahan', $data);
        $this->db->insert(' absenguru', $data2);
        redirect('Dashboard/keterangan_tambahan');
    }

    public function masalah_absen()
    {
        $this->load->view('masalah_absen/masalah_absen');
    }

    public function simpan_masalah_absen()
    {
        $temp = rand(1000000, 9999999);
        $kode_guru = $this->input->post('kode_guru');
        $status = $this->input->post('status');

        $data = array(
            'id_absenGuru' => $temp,
            'kode' => $kode_guru,
            'ket' => $status,
        );

        $this->db->insert('absenguru', $data);
        redirect('Dashboard/berhasil_basen');
    }

    public function berhasil_basen()
    {
        $this->load->view('masalah_absen/berhasil_absen');
    }

    public function delete_absen_guru($id_absenGuru)
    {
        $this->db->where('id_absenGuru ', $id_absenGuru);
        $this->db->delete('absenguru');
        redirect('Dashboard/data_absen_guru_perbulan');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/');
    }
}
