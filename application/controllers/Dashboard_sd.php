<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_sd extends CI_Controller
{

    public function index()
    {
        $this->Model_keamanan->getKeamanan();
        // $isi['siswa_smk'] = $this->Model_siswa->countSiswaSMK();
        $isi['guru_sd'] = $this->Model_guru->countGuruSD();
        // $isi['jurusan_smk'] = $this->Model_jurusan->countJurusanSMK();
        // $isi['kelas_smk'] = $this->Model_kelas->countKelasSMK();
        $isi['content'] = 'SD/tampilan_home';
        $this->load->view('templates/header');
        $this->load->view('SD/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function data_guru()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['data_guru'] = $this->Model_guru->DataGuruSD();

        $isi['content'] = 'SD/tampilan_master_guru';
        $this->load->view('templates/header');
        $this->load->view('SD/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    // public function data_siswa()
    // {
    //     $this->Model_keamanan->getKeamanan();
    //     $isi['data_siswa'] = $this->Model_siswa->DataSiswaSMK();

    //     $isi['content'] = 'SMK/Siswa/tampilan_master_siswa';
    //     $this->load->view('templates/header');
    //     $this->load->view('SMK/tampilan_dashboard', $isi);
    //     $this->load->view('templates/footer');
    // }

    public function data_kelas()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['data_kelas'] = $this->Model_kelas->DataKelasSMK();

        $isi['content'] = 'SMK/tampilan_master_kelas';
        $this->load->view('templates/header');
        $this->load->view('SMK/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    // public function data_jurusan()
    // {
    //     $this->Model_keamanan->getKeamanan();
    //     $isi['jurusan'] = $this->Model_jurusan->DataJurusanSMK();

    //     $isi['content'] = 'SMK/tampilan_master_jurusan';
    //     $this->load->view('templates/header');
    //     $this->load->view('SMK/tampilan_dashboard', $isi);
    //     $this->load->view('templates/footer');
    // }

    public function data_absen_guru_perbulan()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['absen_guru_perbulan'] = $this->Model_guru->absenGuruPerbulanSD();

        $isi['content'] = 'SD/Absensi/tampilan_absenGuru_per_bulan';
        $this->load->view('templates/header');
        $this->load->view('SD/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }



    public function data_absen_guru_perhari($bulan_tahun)
    {
        $this->Model_keamanan->getKeamanan();
        $isi['header'] = $this->Model_guru->HeaderAbsenGuruPerhariSD($bulan_tahun);
        $isi['data'] = $this->Model_guru->DataAbsenGuruPerhariSD($bulan_tahun);


        $isi['content'] = 'SD/Absensi/tampilan_absenGuru_per_hari';
        $this->load->view('templates/header');
        $this->load->view('SD/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function keterangan_tambahan()
    {
        $this->Model_keamanan->getKeamanan();

        // Drop Down
        $isi['guru'] = $this->Model_guru->DataGuruSD();

        $isi['keterangan_tambahan'] = $this->Model_guru->keterangan_tambahanSD();

        $isi['content'] = 'SD/Absensi/tampilan_keterangan_tambahan';
        $this->load->view('templates/header');
        $this->load->view('SD/tampilan_dashboard', $isi);
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
        redirect('Dashboard_sd/keterangan_tambahan');
    }

    public function print_absen_guru_hari_masuk($hari_bulan_tahun)
    {
        $this->Model_keamanan->getKeamanan();
        $isi['header'] = $this->Model_guru->PrintHeaderGuruPerHari($hari_bulan_tahun);
        $isi['data'] = $this->Model_guru->PrintDataGuruPerHari($hari_bulan_tahun);


        $this->load->view('SMK/Absensi/print_absenGuru_per_perhari', $isi);
    }

    public function print_absen_guru_hari_keluar($hari_bulan_tahun)
    {
        $this->Model_keamanan->getKeamanan();
        $isi['header'] = $this->Model_guru->PrintHeaderGuruPerHarKeluar($hari_bulan_tahun);
        $isi['data'] = $this->Model_guru->PrintDataGuruPerHariKeluar($hari_bulan_tahun);


        $this->load->view('SMK/Absensi/print_absenGuru_per_perhari_keluar', $isi);
    }
}
