<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Objectif extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Regime_model');
        $this->load->model('Abonnement_model');
        $this->load->model('Regime_model');
        $this->load->model('Type_aliment_model');
    }
    public function index()
    {
        $message = $this->input->get('message');
        if (isset($message) && $message !== "") {
        $data['error'] = $this->input->get('message');
        }
        $data['listRegime'] = $this->Regime_model->getAllRegime();
        $data['user'] = $this->Users_model->getUserById($_SESSION['iduser']);
        $this->load->view('header');
        $this->load->view('slidebar');
        $this->load->view('objectif', $data);
        $this->load->view('footer');

    }
    public function checkRegime(){

       
        echo json_encode(array("status" => "true","message"=>$this->Abonnement_model->checkRegime($this->input->post('poids_but'))));
    }
    public function regime(){
        $user  =  abs($this->input->post('poids')-$this->Users_model->getUserById($this->session->userdata('iduser'))->poids);
        $regime  = $this->Regime_model->getRegimeById($this->input->post('type'));
        $type = $this->Type_aliment_model->getallType();
        $planning = array();
        $jour= 1;
        if($regime !=null){
            $petit_dejeuner = $this->Abonnement_model->getRegimeAliment($regime[0]->id,1);
             shuffle($petit_dejeuner);
            $petit_dejeuner_ind = 0;
            $dejeuner = $this->Abonnement_model->getRegimeAliment($regime[0]->id,3);
             shuffle($dejeuner);
            $dejeuner_ind = 0;
            $gouter = $this->Abonnement_model->getRegimeAliment($regime[0]->id,2);
            shuffle($gouter);
            $gouter_ind = 0;
            $diner = $this->Abonnement_model->getRegimeAliment($regime[0]->id,4);
            shuffle($diner);
            $diner_ind = 0;
            $sport = $this->Abonnement_model->getRegimeSport($regime[0] ->id);
            shuffle($sport);
            $sport_ind = 0;
            $i = 0;
            $planning['total'] = 0;
            while($user >0 ) { 
                $poids = $user;
                $planning[$i]['jour'] = $jour;
                

                $jour++;
                if(count($petit_dejeuner) > 0 ){
                    $planning[$i]['petit_dejeuner'] = $petit_dejeuner[$petit_dejeuner_ind];
                    $user = $user  -  $petit_dejeuner[$petit_dejeuner_ind]['poids'];
                    $planning['total'] = $planning['total'] + $petit_dejeuner[$petit_dejeuner_ind]['prix'] ;
                    if($petit_dejeuner_ind == count($petit_dejeuner)-1){
                        $petit_dejeuner_ind = 0;
                        shuffle($petit_dejeuner);
                    }else{
                        $petit_dejeuner_ind++;
                    }
                }
                else{
                    $planning[$i]['petit_dejeuner']['nom'] = 'rien';
                }
                if( count($dejeuner) > 0){
                    $planning[$i]['dejeuner'] = $dejeuner[$dejeuner_ind];
                    $user = $user  -  $dejeuner[$dejeuner_ind]['poids'];
                    $planning['total'] = $planning['total'] + $dejeuner[$dejeuner_ind]['prix'] ;
                    if($dejeuner_ind == count($dejeuner)-1){
                        $dejeuner_ind = 0;
                        shuffle($dejeuner);
                    }else{
                        $dejeuner_ind++;
                    }
                }else{
                    $planning[$i]['dejeuner']['nom'] = 'rien';
                }
                if(count($gouter) > 0 ){
                    $planning[$i]['gouter'] = $gouter[$gouter_ind];
                    $user = $user  -  $gouter[$gouter_ind]['poids'];
                    $planning['total'] = $planning['total'] + $gouter[$gouter_ind]['prix'] ;
                    if($gouter_ind == count($gouter)-1){
                        $gouter_ind = 0;
                        shuffle($gouter);
                    }else{
                        $gouter_ind++;
                    }
                }else{
                    $planning[$i]['gouter']['nom'] = 'rien';
                }
                if(count($diner) > 0){
                    $planning[$i]['diner'] = $diner[$diner_ind];
                    $user = $user  -  $diner[$diner_ind]['poids'];
                    $planning['total'] = $planning['total'] + $diner[$diner_ind]['prix'] ;
                    if($diner_ind == count($diner)-1){
                        $diner_ind = 0;
                        shuffle($diner);
                    }else{
                        $diner_ind++;
                    }
                }else{
                    $planning[$i]['diner']['nom'] = 'rien';
                }
                if(count($sport) > 0){
                    $planning[$i]['sport'] = $sport[$sport_ind];
                    $user = $user  -  $sport[$sport_ind]['poids'];
                    $planning[$i]['total'] = $planning[$i]['total'] + $sport[$sport_ind]['prix'] ;
                    if($sport_ind == count($sport)-1){
                        $sport_ind = 0;
                        shuffle($sport);
                    }else{
                        $sport_ind++;
                    }
                }else{
                    $planning[$i]['sport']['nom'] = 'rien';
                }
                
                $i++;
                if($poids == $user){
                    break;
                }

            }
            $user = $this->Users_model->getUserById($_SESSION['iduser']);
            if($planning['total']> $user->vola){
                redirect('Objectif?message=Veuillez recharger votre porte-monnaie , somme trop faible');
            }
            $data['planning']  = $planning;
           $this->load->view('header');
           $this->load->view('slidebar');
           $this->load->view('planning',$data);
        }else{
            redirect('Objectif');
        }
       
    }
}
