<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Code_model extends CI_Model
{
    public function getAllCode()
    {
        $query = $this->db->get('code');
        return $query->result();
    }

    public function insert($nom, $argent)
    {
        $data = array(
            'nom' => $nom,
            'argent' => $argent,
            'estutilise' => 0
        );
        $this->db->insert('code', $data);
    }
}
