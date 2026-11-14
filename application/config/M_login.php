<?php
defined('BASEPATH') OR exit('no direct script acess allowed');

class M_login extends CI_Model {
    public function cek_login($username, $password) {
        return $this->db->get_where('users',[
            'username'=>$username,
            'password'=>md5($password)
        ]);
    }
}
