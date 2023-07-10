<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aliment extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Aliment_model');
    }

    public function index()
    {
        $data['listAliment'] = $this->Aliment_model->getAllAliment();
        $data['listTypeAliment'] = $this->Aliment_model->getAllTypeAliment();
        $this->load->view('header');
        $this->load->view('Aliment/admin_add', $data);
        $this->load->view('Aliment/admin_list', $data);
        $this->load->view('footer');
    }

    public function add()
    {
        $id_type_aliment = $this->input->post('type');
        $nom = $this->input->post('nom');
        $this->Aliment_model->insert($id_type_aliment, $nom);
        redirect('Aliment');
    }
}
