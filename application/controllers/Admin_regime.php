<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_regime extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Regime_model');
    }

    public function index()
    {
        $this->load->view('header');
        $this->load->view('regime/add');
        $this->load->view('regime/list');
        $this->load->view('footer');
    }

    public function add()
    {
        $data = array(
            'nom' => $this->input->post('nom'),
            'objectif' => $this->input->post('objectif')
        );
        $this->Regime_model->create($data);
        redirect('');
    }

    public function edit()
    {
        $id = $this->input->get('id');
        $data['regime'] = $this->Regime_model->get_by_id($id);
        $this->load->view('header');
        $this->load->view('regime/edit',$data);
        $this->load->view('footer');
    }

    public function delete(){
        $id = $this->input->get('id');
        $this->Regime_model->delete($id);
        redirect('');
    }
}
