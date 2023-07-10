<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alimentobjectif_model extends CI_Model
{
    // Insertion d'un enregistrement
    public function insert($data)
    {
        $this->db->insert('aliment_objectif', $data);
        return $this->db->insert_id();
    }

    // Récupération de tous les enregistrements
    public function get_all()
    {
        $compte = array();
        $request = "SELECT ao.id, ao.id_aliment, a.nom as aliment, ao.id_regime, r.nom as regime, ao.quantite, ao.poids, ao.prix FROM aliment_objectif ao JOIN aliment a ON ao.id_aliment = a.id JOIN regime r ON ao.id_regime = r.id";
        $query = $this->db->query($request);
        foreach ($query->result_array() as $row) {
            $compte[] = $row;
        }
        return $compte;
    }

    // Récupération d'un enregistrement par son ID
    public function get_by_id($id)
    {
        $compte = array();
        $request = "SELECT ao.id, ao.id_aliment, a.nom as aliment, ao.id_regime, r.nom as regime, ao.quantite, ao.poids, ao.prix FROM aliment_objectif ao JOIN aliment a ON ao.id_aliment = a.id JOIN regime r ON ao.id_regime = r.id where ao.id = %d";
        $query = $this->db->query(sprintf($request,$id));
        foreach ($query->result_array() as $row) {
            $compte[] = $row;
        }
        return $compte;
    }

    // Mise à jour d'un enregistrement
    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('aliment_objectif', $data);
    }

    // Suppression d'un enregistrement
    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('aliment_objectif');
    }
}
