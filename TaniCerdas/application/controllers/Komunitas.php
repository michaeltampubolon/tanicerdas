<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komunitas extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Model_Komunitas'); 
	}
  	
  	public function index(){
  		if (!isset($this->session->userdata['id_user'])) {
			redirect('Login');
		}
		$this->load->library('form_validation');
		$this->load->library('session');
	}

	function cari() {
	$data['tampil']=$this->Model_Komunitas->cariKomunitas(); 

	if($data['tampil']==null) {
		$this->load->view('unknownkomunitas',$data);  
	}
	  else {
	     $this->load->view('daftarkomunitas',$data); 

	}
}
}