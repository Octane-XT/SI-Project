<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->model('Users_model');
	  }

    public function index()
    {
		if ($this->input->get('message')) {
			$data['message'] = $this->input->get('message');
			$this->load->view('login', $data);
		} else {
			$this->load->view('login');
		}
    }

    public function check()
	{
		$email = $this->input->post('email');
		$pass = $this->input->post('password');
		$login = $this->Users_model->check($email,$pass);

		if ($login==null) {
			redirect('Login?message=Aucun compte correspondant ou verifiez votre email et mot de passe');
		} else {
			$this->session->set_userdata('iduser',$login->id);
			redirect('Landing');
		}
	}

	public function logout() {
		$this->session->unset_userdata('iduser');
		redirect('Login');
	}
}
