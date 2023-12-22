<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PresensiModel extends CI_Model {

    public function insertPresensi($data) {
        $this->db->insert('presensi', $data);
    }

    public function getPresensiList() {
        $this->db->select('users.nim, users.nama, presensi.status, presensi.waktu');
        $this->db->from('presensi');
        $this->db->join('users', 'users.nim = presensi.nim');
        $query = $this->db->get();
        return $query->result();
    }
}
