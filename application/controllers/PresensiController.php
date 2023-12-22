<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PresensiController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('PresensiModel');
        $this->load->model('UsersModel');
    }

    public function index() {
        // Tampilkan form input NIM
        $this->load->view('input_nim');
    }

    public function proses_presensi() {
        // Ambil NIM dari form input
        $nim = $this->input->post('nim');

        // Cek apakah NIM valid
        $user = $this->UsersModel->getUserByNim($nim);
        if (!$user) {
            echo "NIM tidak valid!";
            return;
        }

        // Simpan data presensi
        $presensi_data = array(
            'nim' => $nim,
            'status' => 'Hadir', // Anda bisa mengubah sesuai kebutuhan
            'waktu' => date('Y-m-d H:i:s')
        );
        $this->PresensiModel->insertPresensi($presensi_data);

        // Tampilkan data presensi
        $presensi_list = $this->PresensiModel->getPresensiList();
        $data['presensi_list'] = $presensi_list;
        $this->load->view('list_presensi', $data);
    }
}
