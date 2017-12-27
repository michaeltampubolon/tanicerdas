<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if (!isset($this->session->userdata['id_user'])) {
			redirect('Login');
		}
		$this->load->model('Model_lahan'); 
	}

	public function index() {
		$this->load->view('profil');
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('Login');
	}
	public function lahan(){
		$this->load->view('lahan');
	}
	public function manajemenlahan(){
		$data1['id_user'] = $this->session->userdata('id_user');
		$data['lahan'] = $this->Model_lahan->semuaLahan($data1['id_user']);
		$this->load->view('manajemenlahan',$data);
	}
	public function manajemenjadwaltanam(){
		$this->load->view('manajemenjadwaltanam');
	}
	public function tambahjadwaltanam($id_lahan){
		$data['id_lahan'] = $id_lahan;
		$data['lahans'] = $this->Model_lahan->find($id_lahan); 
		$this->load->view('tambahjadwaltanam',$data);
	}
	
}

