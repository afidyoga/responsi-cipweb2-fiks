<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersModel extends CI_Model {

    public function getUserByNim($nim) {
        $query = $this->db->get_where('users', array('nim' => $nim));
        return $query->row();
    }
}
