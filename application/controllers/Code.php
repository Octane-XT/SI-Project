<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Code extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Code_model');
    }

    public function index()
    {
        if (!$this->session->userdata('iduser')) {
            redirect('login');
        }
        if (isset($message) && $message !== "") {
            $data['error'] = $this->input->get('message');
        }
        $data["code"] = $this->Code_model->getAllCode();
        $this->load->view('header');
        $this->load->view('code/add');
        $this->load->view('code/list',$data);
        $this->load->view('footer');
    }

    public function add_code(){
        if (!$this->session->userdata('iduser')) {
            redirect('login');
        }
        $this->load->view('header');
        $this->load->view('code/add');
        $this->load->view('code/list');
        $this->load->view('footer');
    }

    public function check_code(){
        $code = $this->input->post('code');
        $id = $this->Code_model->getid($code);
        if($id==null || $id[0]->estutilise == 1 || $id[0]->estutilise == 11){
            redirect('Code?message=code non valide');
        }else{
            $this->Code_model->update($code);
            $this->Code_model->insert_user($this->session->userdata('iduser'), $id[0]->id);
            redirect('Code');
        }
        
    }
}
