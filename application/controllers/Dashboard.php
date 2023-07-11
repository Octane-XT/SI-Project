<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Aliment_model');
        $this->load->model('Users_model');
        $this->load->model('Abonnement_model');
        $this->load->model('Regime_model');

    }
    public function index()
    {
        if (!$this->session->userdata('iduser')) {
            redirect('Login');
        }
        $data = array();
        $data['petit_dejeuner'] =$this->Aliment_model->getAlimentByType('1');
        $data['dejeuner'] =$this->Aliment_model->getAlimentByType('3');
        $data['gouter'] =$this->Aliment_model->getAlimentByType('2');
        $data['diner'] =$this->Aliment_model->getAlimentByType('4');
        $data['total'] = count( $data['dejeuner'])+count( $data['petit_dejeuner'])+count( $data['gouter'])+count( $data['diner']);
       $regimes = $this->Regime_model->getAllRegime();
       $data['regimes'] = array();
       for ($i=0; $i <count($regimes) ; $i++) { 
        $data['regimes'][] = $regimes[$i]->nom;
       }
        $data['total_petit_dejeuner'] = count( $data['petit_dejeuner']);
        $data['total_dejeuner'] = count( $data['dejeuner']);
        $data['total_gouter'] = count( $data['gouter']);
        $data['total_diner'] = count( $data['diner']);
        $data['poids'] = array();
        $data['montant'] = array();
        $data['total_diner_pour'] = count( $data['diner'])/$data['total'] *100;
        $data['total_petit_dejeuner_pour'] = count( $data['petit_dejeuner'])/$data['total'] *100;
        $data['total_dejeuner_pour'] = count( $data['dejeuner'])/$data['total'] *100;
        $data['total_gouter_pour'] = count( $data['gouter'])/$data['total'] *100;
        $data['users'] =array();
        $data['users_total'] = 0;
        $data['abonnement'] =array();
        $data['abonnement_total'] = 0;
        $data['regimes_total'] =array();
        $data['abo_regime'] = $this->Abonnement_model->getAbonnementRegime();
        for($i=0;$i<count($data['regimes']);$i++){
            $data['regimes_total'][] = $this->Abonnement_model->getByRegime($regimes[$i]->id);
             $data['poids'][] = $this->Abonnement_model->getAbonnementAliment($regimes[$i]->id)->sum + $this->Abonnement_model->getAbonnementSport($regimes[$i]->id)->sum;
             $data['montant'][] = $this->Abonnement_model->getAbonnementAliment($regimes[$i]->id)->sum_prix + $this->Abonnement_model->getAbonnementSport($regimes[$i]->id)->sum_prix;
        }
       
        for($i = 1 ;$i<13;$i++) {
            $data['users'][] = $this->Users_model->getByMonth($i);
            $data['users_total'] = $data['users_total'] + intval($this->Users_model->getByMonth($i));
            $data['abonnement'][] = $this->Abonnement_model->getByMonth($i);
            $data['abonnement_total'] = $data['abonnement_total'] + intval($this->Abonnement_model->getByMonth($i));
        }
        $data['abo_users']  = $data['abonnement_total'] / $data['users_total']  ;
        $this->load->view('header');
        $this->load->view('slidebar_back');
        $this->load->view('dashboard',$data);
       
      


    }
}