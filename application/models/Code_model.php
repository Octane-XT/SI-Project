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

    public function update1($id, $nom, $argent)
    {
        $this->db->where('id', $id);
        $data = array(
            'nom' => $nom,
            'argent' => $argent
        );
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

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('code');
    }
    public function getusercodebyid($id)
    {
        $compte = array();
        $request = "SELECT u.id AS utilisateur_id, u.nom AS utilisateur_nom, u.prenom AS utilisateur_prenom, c.id AS code_id, c.nom AS code_nom, c.argent AS code_argent, c.estutilise AS code_estutilise FROM utilisateur u JOIN utilisateur_code uc ON u.id = uc.id_utilisateur JOIN code c ON uc.id_code = c.id where c.id =%d";
        $query = $this->db->query(sprintf($request, $id));
        return $query->result();
    }


}