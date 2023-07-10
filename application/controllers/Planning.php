<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Planning extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if (!$this->session->userdata('iduser')) {
            redirect('login');
        }
        $this->load->view('header');
        $this->load->view('planning');
        $this->load->view('footer');
    }

    
}
