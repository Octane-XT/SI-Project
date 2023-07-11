<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Offre extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        if (!$this->session->userdata('iduser')) {
            redirect('login');
        }
    }

    public function index()
    {
        $data['user'] = $this->Users_model->getUserById($_SESSION['iduser']);
        $this->load->view('header_front', $data);
        $this->load->view('slidebar');
        $this->load->view('offre');
        $this->load->view('footer');
    }

    public function valider()
    {
        $volarest = $this->Users_model->getVolaValue($this->session->userdata('iduser')) - 10000;
        if($volarest > 0){
            $this->Users_model->activergold($this->session->userdata('iduser'),$volarest);
            redirect('objectif');
        }else{
            redirect('offre?message=Argent insuffisant');
        }  
    }

    public function logout()
    {
        $this->session->unset_userdata('iduseradmin');
        redirect('Admin');
    }
}
