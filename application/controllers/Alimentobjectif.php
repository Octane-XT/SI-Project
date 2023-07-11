<?php

class Alimentobjectif extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Alimentobjectif_model');
        $this->load->model('Users_model');
    }

    public function index()
    {
        $message = $this->input->get('message');
        if (isset($message) && $message !== "") {
            $data['error'] = $this->input->get('message');
        }
        $this->load->model('Aliment_model');
        $this->load->model('Regime_model');
        $data['aliment'] = $this->Aliment_model->getAllAliment();
        $data['regime'] = $this->Regime_model->getAllRegime();
        $data['aliment_objectifs'] = $this->Alimentobjectif_model->get_all();
        $data['user'] = $this->Users_model->getUserById($_SESSION['iduseradmin']);
        $this->load->view('header_back', $data);
        $this->load->view('slidebar_back');
        $this->load->view('alimentobjectif/add', $data);
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
        if($this->input->post('quantite')>0 && $this->input->post('prix') > 0 && $this->input->post('poids')){
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
        redirect('alimentobjectif?message=valeur negatif non autorise');
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
