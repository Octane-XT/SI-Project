<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_code extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Code_model');
        $this->load->model('Users_model');
        if (!$this->session->userdata('iduseradmin')) {
            redirect('Login');
        }
    }

    public function index()
    {
        $data['user'] = $this->Users_model->getUserById($_SESSION['iduseradmin']);
        $data['code'] = $this->Code_model->getAllCode();
        $message = $this->input->get('message');
        if (isset($message) && $message !== "") {
            $data['error'] = $this->input->get('message');
        }
        $this->load->view('header_back', $data);
        $this->load->view('slidebar_back');
        $this->load->view('code/admin_add', $data);
        $this->load->view('code/admin_list', $data);
        $this->load->view('footer');
    }

    public function add()
    {

        if ($this->input->post('argent') < 0) {
            redirect('Admin_code?message=Argent negatif non autorise');
        }
        if ($this->input->post('nom') == '') {
            redirect('Admin_code?message=Code non autorise');
        }
        $data = array(
            'code' => $this->input->post('nom'),
            'argent' => $this->input->post('argent')
        );
        $this->Code_model->insert($data);
        redirect('Admin_code');
    }

    public function edit($id)
    {
        $data['code'] = $this->Code_model->getcodebyid($id);
        $data['user'] = $this->Users_model->getUserById($_SESSION['iduseradmin']);
        $this->load->view('header_back', $data);
        $this->load->view('code/admin_edit', $data);
        $this->load->view('footer');
    }

    public function delete($id)
    {
        $this->Code_model->delete($id);
        redirect('Admin_code');
    }

    public function validate($id)
    {
        $this->Code_model->update_admin($id);
        $data = $this->Code_model->getusercodebyid($id);
        $this->load->model('Users_model');
        $vola = $this->Users_model->getVolaValue($data[0]->utilisateur_id);
        $this->Users_model->updateVola($data[0]->utilisateur_id, $vola + $data[0]->code_argent);
        redirect('Admin_code');
    }
}
