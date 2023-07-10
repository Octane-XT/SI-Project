<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sport extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Sport_model');
    }

    public function index()
    {
        $data['listSport'] = $this->Sport_model->getAllSport();
        $this->load->view('header');
        $this->load->view('slidebar_back');
        $this->load->view('Sport/admin_add');
        $this->load->view('Sport/admin_list', $data);
        $this->load->view('footer');
    }

    public function add()
    {
        $nom = $this->input->post('nom');
        $this->Sport_model->insert($nom);
        redirect('Sport');
    }

    public function edit($id)
    {
        $data['id'] = $id;
        $data['listSport'] = $this->Sport_model->getAllSport();
        $this->load->view('header');
        $this->load->view('slidebar_back');
        $this->load->view('Sport/admin_edit', $data);
        $this->load->view('footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $nom = $this->input->post('nom');
        $this->Sport_model->update($id, $nom);
        redirect('Sport');
    }

    public function delete($id)
    {
        $this->Sport_model->delete($id);
        redirect('Sport');
    }
}
