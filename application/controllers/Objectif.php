<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Objectif extends CI_Controller
{
    public function index()
    {
        $this->load->model('Regime_model');
        $this->load->model('Users_model');
        $data['listRegime'] = $this->Regime_model->getAllRegime();
        $data['user'] = $this->Users_model->getUserById($_SESSION['iduser']);
        $this->load->view('objectif', $data);
    }
}
