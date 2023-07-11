<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sportobjectif_model extends CI_Model
{
    public function getAllSportObjectif()
    {
        $compte = array();
        $request = "SELECT s_o.id as id, s.id as id_sport, s.nom as nom_sport, r.id as id_regime, r.nom as nom_regime, s_o.frequence as frequence, s_o.poids as poids, s_o.prix as prix FROM sport_objectif s_o JOIN sport s ON s_o.id_sport = s.id JOIN regime r ON s_o.id_regime = r.id;";
        $query = $this->db->query($request);
        foreach ($query->result_array() as $row) {
            $compte[] = $row;
        }
        return $compte;
    }

    public function insert($id_sport, $id_regime, $frequence, $poids, $prix)
    {
        $data = array(
            'id_sport' => $id_sport,
            'id_regime' => $id_regime,
            'frequence' => $frequence,
            'poids' => $poids,
            'prix' => $prix
        );
        $this->db->insert('sport_objectif', $data);
    }
}
