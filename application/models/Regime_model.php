<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Regime_model extends CI_Model
{
    public function getAllRegime()
    {
        $query = $this->db->get('regime');
        return $query->result();
    }
}
