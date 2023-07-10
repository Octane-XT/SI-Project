<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_code extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Code_model');
    }

    public function index()
    {
        $data['code'] = $this->Code_model->getAllCode();
        $this->load->view('header');
        $this->load->view('slidebar_back');
        $this->load->view('code/admin_add');
        $this->load->view('code/admin_list',$data);
        $this->load->view('footer');
    }

    public function add()
    {
        $data = array(
            'nom' => $this->input->post('nom'),
            'argent' => $this->input->post('argent')
        );
        $this->Code_model->create($data);
        redirect('');
    }

    public function edit()
    {
        $id = $this->input->get('id');
        $data['code'] = $this->Code_model->get_by_id($id);
        $this->load->view('header');
        $this->load->view('code/admin_edit', $data);
        $this->load->view('footer');
    }

    public function delete()
    {
        $id = $this->input->get('id');
        $this->Code_model->delete($id);
        redirect('');
    }

    public function validate($id){
        $this->Code_model->update_admin($id);
        $this->Code_model->update_admin($id);
        redirect('');
    }
}
