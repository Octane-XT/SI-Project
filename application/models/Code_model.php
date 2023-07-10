<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Code_model extends CI_Model
{
    public function getAllCode()
    {
        $query = $this->db->get('code');
        return $query->result();
    }

    public function insert($data)
    {
        $this->db->insert('code', $data);
    }

    public function update($id){
        $data = array(
            'estutilise' => 1
        );
        $this->db->where('nom', $id);
        $this->db->update('code', $data);
    }

    public function getid($id){
        $this->db->where('nom', $id);
        $query = $this->db->get('code');
        return $query->result();
    }

    public function getcodebyid($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('code');
        return $query->result();
    }
    public function update_admin($id)
    {
        $data = array(
            'estutilise' => 11
        );
        $this->db->where('id', $id);
        $this->db->update('code', $data);
    }
    
    public function insert_user($idu,$idc){
        $data = array(
            'id_utilisateur' => $idu,
            'id_code' => $idc
        );
        $this->db->insert('utilisateur_code', $data);
    }
}
