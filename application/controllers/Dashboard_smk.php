<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_smk extends CI_Controller
{

    public function index()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['siswa_smk'] = $this->Model_siswa->countSiswaSMK();
        $isi['guru_smk'] = $this->Model_guru->countGuruSMK();
        $isi['jurusan_smk'] = $this->Model_jurusan->countJurusanSMK();
        $isi['kelas_smk'] = $this->Model_kelas->countKelasSMK();
        $isi['content'] = 'SMK/tampilan_home';
        $this->load->view('templates/header');
        $this->load->view('SMK/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function data_guru()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['data_guru'] = $this->Model_guru->DataGuruSMK();

        $isi['content'] = 'SMK/Guru/tampilan_master_guru';
        $this->load->view('templates/header');
        $this->load->view('SMK/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function data_siswa()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['data_siswa'] = $this->Model_siswa->DataSiswaSMK();

        $isi['content'] = 'SMK/Siswa/tampilan_master_siswa';
        $this->load->view('templates/header');
        $this->load->view('SMK/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function data_kelas()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['data_kelas'] = $this->Model_kelas->DataKelasSMK();

        $isi['content'] = 'SMK/tampilan_master_kelas';
        $this->load->view('templates/header');
        $this->load->view('SMK/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function keterangan_tambahan()
    {
        $this->Model_keamanan->getKeamanan();

        // Drop Down
        $isi['guru'] = $this->Model_guru->DataGuruSMK();

        $isi['keterangan_tambahan'] = $this->Model_guru->keterangan_tambahan();

        $isi['content'] = 'SMK/Absensi/tampilan_keterangan_tambahan';
        $this->load->view('templates/header');
        $this->load->view('tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }
}
