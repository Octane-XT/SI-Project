<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Abonnement_model extends CI_Model
{
    public function getByMonth($month)
{
    $compte = 0;
    $request = "SELECT count(*)  as count from abonnement where MONTH(datedebut) = %s ;";
    $query = $this->db->query(sprintf($request,$month));
    foreach ($query->result_array() as $row) {
        $compte = $row['count'];
    }
    return $compte;

}
public function getByRegime($month)
{
    $compte = 0;
    $request = "SELECT count(*)  as count from abonnement where id_regime = %s ;";
    $query = $this->db->query(sprintf($request,$month));
    foreach ($query->result_array() as $row) {
        $compte = $row['count'];
    }
    return $compte;

}
public function getAbonnementRegime()
{
    $compte = array();
    $request = "select count(id_regime) as count , regime.* from regime left outer join abonnement on regime.id = abonnement.id_regime order by count desc;";
    $query = $this->db->query(sprintf($request));
    foreach ($query->result_array() as $row) {
        if($row['objectif']> 0 ){
            $row['objectif'] = 'prise de masse';
        }else{
            $row['objectif'] = 'perte de poids';
        }
        $compte[] = $row;

    }
    return $compte;
}
public function getAbonnementAliment($regime)
{
    $compte = new StdClass();
    $request = "select regime.*, coalesce(sum(poids),0) as sum,coalesce(sum(prix),0) as sum_prix from regime left outer join aliment_objectif on regime.id =  aliment_objectif.id_regime where id_regime=%s;";
    $query = $this->db->query(sprintf($request,$regime));
    foreach ($query->result_array() as $row) {
        $compte->sum = $row['sum']* $row['objectif'];
        $compte->sum_prix= $row['sum_prix'];
    }
    return $compte;
}
public function getRegimeAliment($regime,$type)
{
    $compte = array();
    $request = "select aliment_objectif.*,aliment.* from aliment_objectif  join regime on regime.id =  aliment_objectif.id_regime  join aliment on aliment_objectif.id_aliment = aliment.id where id_regime=%s and id_type_aliment = %s;";
    $query = $this->db->query(sprintf($request,$regime,$type));
    foreach ($query->result_array() as $row) {
        $compte[] = $row;
    }
    return $compte;
}
public function getRegimeSport($regime)
{
    $compte = array();
    $request = "select sport_objectif.* from regime  join sport_objectif on regime.id =  sport_objectif.id_regime where id_regime=%s ";
    $query = $this->db->query(sprintf($request,$regime));
    foreach ($query->result_array() as $row) {
        $compte[] = $row;
    }
    return $compte;
}

public function getAbonnementSport($regime)
{
    $compte = new StdClass();
    $request = "select regime.*, coalesce(sum(poids),0) as sum,coalesce(sum(prix),0)  as sum_prix from regime left outer join sport_objectif on regime.id =  sport_objectif.id_regime where id_regime=%s;";
    $query = $this->db->query(sprintf($request,$regime));
    foreach ($query->result_array() as $row) {
        $compte->sum = $row['sum']* $row['objectif'];
        $compte->sum_prix= $row['sum_prix'];
    }
    return $compte;
}
public function checkregime($poids_but){
    $this->load->model('Users_model');
    $poids_actu = $this->Users_model->getUserById($this->session->userdata('iduser'))->poids ;
    $poids =  $poids_but - $poids_actu ;
    if($poids < 0){
        $compte = array();
        $request = "select regime.* from regime where objectif=-1;";
        $query = $this->db->query(sprintf($request));
        foreach ($query->result_array() as $row) {
            $compte[]= $row;
        }
        return $compte;
    }else{
        $compte = array();
        $request = "select regime.* from regime where objectif=1;";
        $query = $this->db->query(sprintf($request));
        foreach ($query->result_array() as $row) {
            $compte[]= $row;
        }
        return $compte;
    }
}

}
