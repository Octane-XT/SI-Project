<?php

class Alimentobjectif extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Alimentobjectif_model');
    }

    public function index()
    {
        $data['aliment_objectifs'] = $this->Alimentobjectif_model->get_all();
        $this->load->view('header');
        $this->load->view('slidebar_back');
        $this->load->view('alimentobjectif/list', $data);
        $this->load->view('footer');
    }

    public function create()
    {
        $this->load->model('Aliment_model');
        $this->load->model('Regime_model');
        $data['aliment'] = $this->Aliment_model->getAllAliment();
        $data['regime'] = $this->Regime_model->getAllRegime();
        $this->load->view('alimentobjectif/add',$data);
    }

    public function store()
    {
        $data = array(
            'id_aliment' => $this->input->post('aliment'),
            'id_regime' => $this->input->post('regime'),
            'quantite' => $this->input->post('quantite'),
            'poids' => $this->input->post('poids'),
            'prix' => $this->input->post('prix')
        );
        $this->Alimentobjectif_model->insert($data);
        redirect('alimentobjectif');
    }

    public function show($id)
    {
        $data['aliment_objectif'] = $this->Alimentobjectif_model->get_by_id($id);
        $this->load->view('alimentobjectif/show', $data);
    }


    public function edit($id)
    {
        $this->load->model('Aliment_model');
        $this->load->model('Regime_model');
        $data['aliment'] = $this->Aliment_model->getAllAliment();
        $data['regime'] = $this->Regime_model->getAllRegime();
        $data['aliment_objectif'] = $this->Alimentobjectif_model->get_by_id($id);
        $this->load->view('alimentobjectif/edit', $data);
    }

    public function update($id)
    {
        $data = array(
            'id_aliment' => $this->input->post('id_aliment'),
            'id_regime' => $this->input->post('id_regime'),
            'quantite' => $this->input->post('quantite'),
            'poids' => $this->input->post('poids')
        );
        $this->Alimentobjectif_model->update($id, $data);
        redirect('alimentobjectif');
    }

    // Suppression d'un enregistrement
    public function delete($id)
    {
        $this->Alimentobjectif_model->delete($id);
        redirect('alimentobjectif');
    }
}
