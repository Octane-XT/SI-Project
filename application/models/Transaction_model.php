<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaction_model extends CI_Model
{
    public function getAllTransaction()
    {
        $compte = array();
        $request = "SELECT t.id, u.id, u.nom, u.prenom, m.id, m.nom, t.vola, t.type FROM transaction t JOIN utilisateur u ON t.id_utilisateur = u.id JOIN motif m ON t.id_motif = m.id;";
        $query = $this->db->query($request);
        foreach ($query->result_array() as $row) {
            $compte[] = $row;
        }
        return $compte;
    }

    public function insert($id_utilisateur, $id_motif, $vola)
    {
        $type = ($id_motif->id == 1) ? 0 : 1;

        $data = array(
            'id_utilisateur' => $id_utilisateur,
            'id_motif' => $id_motif,
            'vola' => $vola,
            'type' => $type
        );

        $this->db->insert('transaction', $data);
    }
}
