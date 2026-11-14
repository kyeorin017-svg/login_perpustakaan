<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @property CI_Session $session
 * @property CI_Input $input
 * @property M_login $M_login
*/
class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('M_login');
    }

    public function index() {
        if ($this->session->userdata('status') == 'login') {
            redirect('dashboard');
        }
        $this->load->view('v_login');
    }

    public function aksi_login() {
        $username = $this->input->post('username', TRUE);
        $password = $this->input->post('password', TRUE);

        $cek = $this->M_login->cek_login($username, $password);

        if ($cek->num_rows() > 0) {
            $user = $cek->row();
            $data_session = array(
                'nama'   => $user->nama,
                'role'   => $user->role,
                'status' => 'login'
            );
            $this->session->set_userdata($data_session);
            redirect('dashboard');
        } else {
            $this->session->set_flashdata('error', 'Username atau password salah!');
            redirect('login');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}