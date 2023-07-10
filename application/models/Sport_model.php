<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sport_model extends CI_Model
{
    public function getAllSport()
    {
        $query = $this->db->get('sport');
        return $query->result();
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
        $this->db->where('id', $id);
        $this->db->delete('sport');
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
