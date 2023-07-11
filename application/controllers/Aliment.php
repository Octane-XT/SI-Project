<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aliment extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Aliment_model');
        $this->load->model('Users_model');
    }

    public function index()
    {
        $data['listAliment'] = $this->Aliment_model->getAllAliment();
        $data['listTypeAliment'] = $this->Aliment_model->getAllTypeAliment();
        $data['user'] = $this->Users_model->getUserById($_SESSION['iduseradmin']);
        $this->load->view('header_back', $data);
        $this->load->view('slidebar_back');
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

    public function edit($id)
    {
        $data['id'] = $id;
        $data['listTypeAliment'] = $this->Aliment_model->getAllTypeAliment();
        $data['user'] = $this->Users_model->getUserById($_SESSION['iduseradmin']);
        $this->load->view('header_back', $data);
        $this->load->view('slidebar_back');
        $this->load->view('Aliment/admin_edit', $data);
        $this->load->view('footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $id_type_aliment = $this->input->post('type');
        $nom = $this->input->post('nom');
        $this->Aliment_model->update($id, $id_type_aliment, $nom);
        redirect('Aliment');
    }

    public function delete($id)
    {
        $this->Aliment_model->delete($id);
        redirect('Aliment');
    }
}
