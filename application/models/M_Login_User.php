<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Login_User extends CI_Model {

    private $_table = "users";

    // Fungsi cek user dengan mengambil berdasarkan email dan password dari parameter
    public function cekUser($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        return $this->db->get($this->_table);
    }

}