<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        // if (!$this->session->userdata('iduser')) {
        //     redirect('login');
        // }
        $this->load->view('header');
        $this->load->view('slidebar_back');
        $this->load->view('dashboard');
        // $this->load->view('footer');

    }
}