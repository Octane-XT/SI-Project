<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Regime extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Regime_model');
        $this->load->model('Aliment_model');
        $this->load->model('Sport_model');
        $this->load->model('Alimentobjectif_model');
        $this->load->model('Sportobjectif_model');
    }

    public function index()
    {
        $data['listRegime'] = $this->Regime_model->getAllRegime();
        $data['listPetitDejeuner'] = $this->Aliment_model->getAlimentByType(1);
        $data['listGouter'] = $this->Aliment_model->getAlimentByType(2);
        $data['listDejeuner'] = $this->Aliment_model->getAlimentByType(3);
        $data['listDiner'] = $this->Aliment_model->getAlimentByType(4);
        $data['listSport'] = $this->Sport_model->getAllSport();

        $this->load->view('header');
        $this->load->view('slidebar_back');
        $this->load->view('Regime/admin_add', $data);
        $this->load->view('footer');
    }

    public function add()
    {
        $nomregime = $this->input->post('nom');
        $typeregime = $this->input->post('type');

        $petitDejeuner = $this->input->post('petitDejeuner');
        $quantitepetitdej = $this->input->post('quantitepetitdej');
        $prixpetitdej = $this->input->post('prixpetitdej');
        $poidspetitdej = $this->input->post('poidspetitdej');

        $Gouter = $this->input->post('Gouter');
        $quantitegouter = $this->input->post('quantitegouter');
        $prixgouter = $this->input->post('prixgouter');
        $poidsgouter = $this->input->post('poidsgouter');

        $Dejeuner = $this->input->post('Dejeuner');
        $quantitedejeuner = $this->input->post('quantitedejeuner');
        $prixdejeuner = $this->input->post('prixdejeuner');
        $poidsdejeuner = $this->input->post('poidsdejeuner');

        $Diner = $this->input->post('Diner');
        $quantitediner = $this->input->post('quantitediner');
        $prixdiner = $this->input->post('prixdiner');
        $poidsdiner = $this->input->post('poidsdiner');

        $sport = $this->input->post('sport');
        $frequencesport = $this->input->post('frequencesport');
        $prixsport = $this->input->post('prixsport');
        $poidssport = $this->input->post('poidssport');


        $quantitepetitdej = array_filter($quantitepetitdej, function($value) {
            return $value !== null && $value !== "";
        });
        $quantitepetitdej = array_values($quantitepetitdej);
        $prixpetitdej = array_filter($prixpetitdej, function($value) {
            return $value !== null && $value !== "";
        });
        $prixpetitdej = array_values($prixpetitdej);
        $poidspetitdej = array_filter($poidspetitdej, function($value) {
            return $value !== null && $value !== "";
        });
        $poidspetitdej = array_values($poidspetitdej);


        $quantitegouter = array_filter($quantitegouter, function($value) {
            return $value !== null && $value !== "";
        });
        $quantitegouter = array_values($quantitegouter);
        $prixgouter = array_filter($prixgouter, function($value) {
            return $value !== null && $value !== "";
        });
        $prixgouter = array_values($prixgouter);
        $poidsgouter = array_filter($poidsgouter, function($value) {
            return $value !== null && $value !== "";
        });
        $poidsgouter = array_values($poidsgouter);


        $quantitedejeuner = array_filter($quantitedejeuner, function($value) {
            return $value !== null && $value !== "";
        });
        $quantitedejeuner = array_values($quantitedejeuner);
        $prixdejeuner = array_filter($prixdejeuner, function($value) {
            return $value !== null && $value !== "";
        });
        $prixdejeuner = array_values($prixdejeuner);
        $poidsdejeuner = array_filter($poidsdejeuner, function($value) {
            return $value !== null && $value !== "";
        });
        $poidsdejeuner = array_values($poidsdejeuner);


        $quantitediner = array_filter($quantitediner, function($value) {
            return $value !== null && $value !== "";
        });
        $quantitediner = array_values($quantitediner);
        $prixdiner = array_filter($prixdiner, function($value) {
            return $value !== null && $value !== "";
        });
        $prixdiner = array_values($prixdiner);
        $poidsdiner = array_filter($poidsdiner, function($value) {
            return $value !== null && $value !== "";
        });
        $poidsdiner = array_values($poidsdiner);


        $frequencesport = array_filter($frequencesport, function($value) {
            return $value !== null && $value !== "";
        });
        $frequencesport = array_values($frequencesport);
        $prixsport = array_filter($prixsport, function($value) {
            return $value !== null && $value !== "";
        });
        $prixsport = array_values($prixsport);
        $poidssport = array_filter($poidssport, function($value) {
            return $value !== null && $value !== "";
        });
        $poidssport = array_values($poidssport);



        $this->Regime_model->insert($nomregime, $typeregime);

        $regimebynomobjectif = $this->Regime_model->getRegimeByNomObjectif($nomregime, $typeregime);

        foreach ($petitDejeuner as $index => $aliment) {
            $aliment = intval($aliment);
            $quantite = intval($quantitepetitdej[$index]);
            $prix = intval($prixpetitdej[$index]);
            $poids = intval($poidspetitdej[$index]);
        
            $this->Alimentobjectif_model->insert($aliment, intval($regimebynomobjectif->id), $quantite, $poids, $prix);
        }
        
        foreach ($Gouter as $index => $aliment) {
            $aliment = intval($aliment);
            $quantite = intval($quantitegouter[$index]);
            $prix = intval($prixgouter[$index]);
            $poids = intval($poidsgouter[$index]);
        
            $this->Alimentobjectif_model->insert($aliment, intval($regimebynomobjectif->id), $quantite, $poids, $prix);
        }

        foreach ($Dejeuner as $index => $aliment) {
            $aliment = intval($aliment);
            $quantite = intval($quantitedejeuner[$index]);
            $prix = intval($prixdejeuner[$index]);
            $poids = intval($poidsdejeuner[$index]);
        
            $this->Alimentobjectif_model->insert($aliment, intval($regimebynomobjectif->id), $quantite, $poids, $prix);
        }

        foreach ($Diner as $index => $aliment) {
            $aliment = intval($aliment);
            $quantite = intval($quantitediner[$index]);
            $prix = intval($prixdiner[$index]);
            $poids = intval($poidsdiner[$index]);
        
            $this->Alimentobjectif_model->insert($aliment, intval($regimebynomobjectif->id), $quantite, $poids, $prix);
        }

        foreach ($sport as $index => $activite) {
            $activite = intval($activite);
            $frequence = intval($frequencesport[$index]);
            $prix = intval($prixsport[$index]);
            $poids = intval($poidssport[$index]);
        
            $this->Sportobjectif_model->insert($activite, intval($regimebynomobjectif->id), $frequence, $poids, $prix);
        }

        redirect('Regime');
    }

    public function edit($id)
    {
        $data['id'] = $id;
        $data['listTypeRegime'] = $this->Regime_model->getAllTypeRegime();
        $this->load->view('header');
        $this->load->view('slidebar_back');
        $this->load->view('Regime/admin_edit', $data);
        $this->load->view('footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $id_type_Regime = $this->input->post('type');
        $nom = $this->input->post('nom');
        $this->Regime_model->update($id, $id_type_Regime, $nom);
        redirect('Regime');
    }

    public function delete($id)
    {
        $this->Regime_model->delete($id);
        redirect('Regime');
    }
}
