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
}
