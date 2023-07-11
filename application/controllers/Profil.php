<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->model('Users_model');
	  }

    public function index()
    {
        $data['user'] = $this->Users_model->getUserById($_SESSION['iduser']);
        $this->load->view('header_front', $data);
        $this->load->view('slidebar');
        $this->load->view('profil/add');
        $this->load->view('footer');
    }

    public function update()
	{
        $poids = $this->input->post('poids');
        $taille = $this->input->post('taille');
        $this->Users_model->updateprofil($_SESSION['iduser'], $poids, $taille);
        redirect('Profil');
	}
}
