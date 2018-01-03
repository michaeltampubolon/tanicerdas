<?php

class petani extends CI_Controller {
    public $data = array();
    
    public function __construct() {
        parent::__construct();
        $this->load->model('petani_model');
        $this->petani_model->check_role();
    } 
    
    public function join(){
        // event register button
        if ($this->input->post('btn-reg')) 
        {
            $this->petani_model->register();
            if ($this->petani_model->error_count != 0) {
                $this->data['error']    = $this->petani_model->error;
            } else {
                $this->session->set_userdata('tmp_success', 1);
                redirect('petani/join');
            }
        }
        
        $tmp_success = $this->session->userdata('tmp_success');
        if ($tmp_success != NULL) {
            // new user created
            $this->session->unset_userdata('tmp_success');
            $this->data['tmp_success'] = 1;
        }
        
        // event login button
        if ($this->input->post('btn-login'))
        {
            $this->petani_model->check_login();
            if ($this->petani_model->error_count != 0) {
                $this->data['error_login']    = $this->petani_model->error;
            } else {
                redirect('petani');
            }
        }
         
        $this->load->view('header', $this->data);
        $this->load->view('layout/header');
        $this->load->view('petani/join');
        $this->load->view('footer');
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('petani/join');
    }
    
    public function index(){ 
        $this->load->view('header', $this->data);
        $this->load->view('layout/header');
        $this->load->view('petani/index');
        $this->load->view('footer');
    }
}