<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sport_model extends CI_Model
{
    public function getAllSport()
    {
        $query = $this->db->get('sport');
        return $query->result();
    }

    public function getSportInObjectif($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('sport_objectif');


        if (count($query->result()) < 1) {
            return true;
        } else {
            return false;
        }
    }

    public function insert($nom)
    {
        $data = array(
            'nom' => $nom
        );
        $this->db->insert('sport', $data);
    }

    public function delete($id)
    {
        if ($this->db->where('id_sport', $id)->count_all_results('sport_objectif') > 0) {
            return false;
        }

        // Supprimer l'enregistrement
        $this->db->where('id', $id)->delete('sport');
        return true;
    }

    public function update($id, $nom)
    {
        $this->db->where('id', $id);
        $data = array(
            'nom' => $nom
        );
        $this->db->update('sport', $data);
    }
}
