<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property CI_Session $session
 */
class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        if ($this->session->userdata('status') != 'login') {
            redirect('login');
        }
    }

    public function index() {
        $this->load->view('v_dashboard');
    }
}