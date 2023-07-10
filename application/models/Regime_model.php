<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Regime_model extends CI_Model
{
    public function getAllRegime()
    {
        $query = $this->db->get('regime');
        return $query->result();
    }

    public function getRegimeByNomObjectif($nom, $objectif)
    {
        $this->db->where(['nom' => $nom, 'objectif' => $objectif]);
        $query = $this->db->get('regime');
        return $query->row();
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
