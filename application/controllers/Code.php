<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Code extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Code_model');
    }

    public function index()
    {
        if (!$this->session->userdata('iduser')) {
            redirect('login');
        }
        $message = $this->input->get('message');
        if (isset($message) && $message !== "") {
            $data['error'] = $this->input->get('message');
        }
        $data["code"] = $this->Code_model->getAllCode();
        $data['user'] = $this->Users_model->getUserById($_SESSION['iduser']);
        $this->load->view('header_front', $data);
        $this->load->view('code/add', $data);
        $this->load->view('code/list',$data);
        $this->load->view('footer');
    }

    public function add_code(){
        if (!$this->session->userdata('iduser')) {
            redirect('login');
        }
        $data['user'] = $this->Users_model->getUserById($_SESSION['iduser']);
        $this->load->view('header_front', $data);
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
