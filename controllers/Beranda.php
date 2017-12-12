<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct() {
		parent::__construct();
		//$this->load->model(array('Mod_Login'));
		if (!isset($this->session->userdata['id_user'])) {
			redirect('Login');
		}
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
}
