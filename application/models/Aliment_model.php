<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aliment_model extends CI_Model
{
    public function getAllAliment()
    {
        $compte = array();
        $request = "SELECT a.id, a.nom, t_a.id, t_a.nom FROM aliment a JOIN type_aliment t_a ON a.id_type_aliment = t_a.id;";
        $query = $this->db->query($request);
        foreach ($query->result_array() as $row) {
            $compte[] = $row;
        }
        return $compte;
    }

    public function getAllTypeAliment()
    {
        $query = $this->db->get('type_aliment');
        return $query->result();
    }

    public function getAlimentByType($type)
    {
        $compte = array();
        $request = "SELECT a.id, a.nom, t_a.id, t_a.nom FROM aliment a JOIN type_aliment t_a ON a.id_type_aliment = t_a.id where a.id_type_aliment = %s;";

        $query = $this->db->query(sprintf($request,$type));
        foreach ($query->result_array() as $row) {
            $compte[] = $row;
        }
        return $compte;
    }
    
    public function insert($id_type_aliment, $nom)
    {
        $data = array(
            'id_type_aliment' => $id_type_aliment,
            'nom' => $nom
        );
        $this->db->insert('aliment', $data);
    }
}
