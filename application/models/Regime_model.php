<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Regime_model extends CI_Model
{
    public function getAllRegime()
    {
        $query = $this->db->get('regime');
        return $query->result();
    }

    public function insert($nom, $objectif)
    {
        $data = array(
            'nom' => $nom,
            'objectif' => $objectif
        );
        $this->db->insert('regime', $data);
    }
}
