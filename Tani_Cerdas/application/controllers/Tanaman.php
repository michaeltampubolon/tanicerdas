<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tanaman extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Model_tanaman');
		// $this->load->model('Model_JadwalTanam');
	}
  	
  	public function index(){
  		if (!isset($this->session->userdata['id_user'])) {
			redirect('Login');
		}
		$this->load->library('form_validation');
		$this->load->library('session');
	}

	public function listTanaman($id_lahan){ 
        $this->load->model('Model_tanaman');
        $data['list_tanaman'] = $this->Model_tanaman->list_tanamanrek($id_lahan);
        foreach($data['list_tanaman'] as $tanaman){
            $data['skema_tanam'][$tanaman->id] = $this->Model_tanaman->get_skema_tanam($tanaman->id);
        }
		$this->load->view('tanamanlist',$data);
	}


}