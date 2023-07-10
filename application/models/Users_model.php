<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users_model extends CI_Model
{
    public function get_user()
    {
        $query = $this->db->get('utilisateur');
        return $query->result();
    }

    public function check($email, $pwd)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $pwd);
        $query = $this->db->get('utilisateur');
        return $query->row();
    }

    public function add_user()
    {
        $data = array(
            'nom' => $this->input->post('nom'),
            'prenom' => $this->input->post('prenom'),
            'date_naissance' => $this->input->post('date_naissance'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'genre' => $this->input->post('genre'),
            'poids' => $this->input->post('poids'),
            'taille' => $this->input->post('taille')
        );
        $this->db->insert('utilisateur', $data);
    }
    public function getByMonth($month)
    {
        $compte = 0;
        $request = "SELECT count(*)  as count from utilisateur where MONTH(date_creation) = %s ;";
        $query = $this->db->query(sprintf($request, $month));
        foreach ($query->result_array() as $row) {
            $compte = $row['count'];
        }
        return $compte;
    }
    public function edit_user($id)
    {
        $data = array(
            'nom' => $this->input->post('fname'),
            'prenom' => $this->input->post('lname'),
            'email' => $this->input->post('mail'),
            'password' => $this->input->post('pass')
        );
        $this->db->where('id', $id);
        $this->db->update('utilisateur', $data);
    }

    public function delete_user($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('utilisateur');
    }
}
