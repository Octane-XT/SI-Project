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

    public function getUserById($id)
    {
        $query = $this->db->get_where('utilisateur', array('id' => $id));
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

    public function getVolaValue($user_id)
    {
        $this->db->select('vola');
        $this->db->from('utilisateur');
        $this->db->where('id', $user_id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->vola;
        } else {
            return null;
        }
    }

    function updateVola($user_id, $new_vola)
    {
        $data = array(
            'vola' => $new_vola
        );

        $this->db->where('id', $user_id);
        $this->db->update('utilisateur', $data);

        // Check if the update was successful
        if ($this->db->affected_rows() > 0) {
            return true; // Update successful
        } else {
            return false; // Update failed
        }
    }

    public function activergold($userId, $vola)
    {
        $this->updateVola($userId, $vola);
        $data = array(
            'isgold' => 1
        );

        $this->db->where('id', $userId);
        $this->db->update('utilisateur', $data);

        return $this->db->affected_rows() > 0;
    }

    public function getIsGold($userId)
    {
        $this->db->select('isgold');
        $this->db->from('utilisateur');
        $this->db->where('id', $userId);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->isgold;
        } else {
            return false;
        }
    }



}