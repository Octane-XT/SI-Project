<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Type_aliment_model extends CI_Model
{
    public function getAllType()
    {
        $query = $this->db->get('type_aliment');
        return $query->result();
    }
}