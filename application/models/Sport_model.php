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
}
