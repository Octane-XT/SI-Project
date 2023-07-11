<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
    }

    public function index()
    {
        $this->load->view('admin_login');
    }

    public function check()
    {
        $email = $this->input->post('email');
        $pass = $this->input->post('password');
        $login = $this->Users_model->check($email, $pass);

        if ($login->isadmin == 1) {
            $this->session->set_userdata('iduseradmin', $login->id);
            redirect('Dashboard');
        } else {
            redirect('Admin');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('iduseradmin');
        redirect('Admin');
    }
}
