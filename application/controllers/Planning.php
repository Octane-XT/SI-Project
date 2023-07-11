<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Planning extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model')
    }

    public function index()
    {
        if (!$this->session->userdata('iduser')) {
            redirect('login');
        }
        $data['user'] = $this->Users_model->getUserById($_SESSION['iduser']);
        $this->load->view('header_front', $data);
        $this->load->view('planning');
        $this->load->view('footer');
    }

    
}
