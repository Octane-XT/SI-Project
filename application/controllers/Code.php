<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Code extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Code_model');
    }

    public function index()
    {
        if (!$this->session->userdata('iduser')) {
            redirect('login');
        }
        $this->load->view('header');
        $this->load->view('code/index');
        $this->load->view('footer');
    }

    public function add_code(){
        if (!$this->session->userdata('iduser')) {
            redirect('login');
        }
        $this->load->view('header');
        $this->load->view('code/add');
        $this->load->view('code/list');
        $this->load->view('footer');
    }

    public function check_code(){
        $code = $this->input->post('code');
        $login = $this->Code_model->check($code);
        redirect('portemonnaie/index');
    }
}
