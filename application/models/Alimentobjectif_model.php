<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alimentobjectif_model extends CI_Model
{
    // Insertion d'un enregistrement
    public function insert($id_aliment, $id_regime, $quantite, $poids, $prix)
    {
        $data = array(
            'id_aliment' => $id_aliment,
            'id_regime' => $id_regime,
            'quantite' => $quantite,
            'poids' => $poids,
            'prix' => $prix
        );
        $this->db->insert('aliment_objectif', $data);
        return $this->db->insert_id();
    }

    // Récupération de tous les enregistrements
    public function get_all()
    {
        return $this->db->get('aliment_objectif')->result();
    }

    // Récupération d'un enregistrement par son ID
    public function get_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('aliment_objectif')->row();
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
