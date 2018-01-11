<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if (!isset($this->session->userdata['id_user'])) {
			redirect('Login');
		}
		$this->load->model('Model_lahan');
		$this->load->model('Model_User'); 
		$this->load->model('Model_Komunitas'); 
		$this->load->model('Model_JadwalTanam'); 
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
		$usr = $this->session->userdata('id_user');
		$data['lahan'] = Model_lahan::where('id_user', $usr)->get();
		// print_r($data['lahan']);die();
		// foreach($data['lahan'] as $lahan){
		// 	print_r($lahan);
		// }die();
		$this->load->view('manajemenlahan',$data);
	}
	public function manajemenjadwaltanam(){
		$this->load->view('manajemenjadwaltanam');
	}
	public function tambahjadwaltanam($id_lahan){
		$data['id_lahan'] = $id_lahan;
		$data['lahans'] = $this->Model_lahan->find($id_lahan); 		
		$data['jadwal'] = $this->Model_JadwalTanam->getTanaman();
		$this->load->view('tambahjadwaltanam',$data);
	}
	public function detail($id_user){
		$this->form_validation->set_rules('nama','Nama Lengkap','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('no_telp','No Telepon','required');
		$this->form_validation->set_rules('no_identitas','No Identitas','required');
		$this->form_validation->set_rules('provinsi','Provinsi','required');
		$this->form_validation->set_rules('kota','Kota','required');
		$this->form_validation->set_rules('kecamatan','Kecamatan','required');
		$this->form_validation->set_rules('alamat_jalan','Alamat Jalan','required');
		
		if ($this->form_validation->run() == FALSE)	{
				$data['user'] = $this->Model_User->find($id_user); 
				$this->load->view('detail',$data);
			} else {	
				$data_user = array(
					'nama' 			=> set_value('nama'),
					'email' 		=> set_value('email'),
					'password' 		=> set_value('password'),
					'no_telp' 		=> set_value('no_telp'),
					'no_identitas' 	=> set_value('no_identitas'),
					'provinsi' 		=> set_value('provinsi'),
					'kota' 			=> set_value('kota'),
					'kecamatan' 	=> set_value('kecamatan'),
					'alamat_jalan'	=> set_value('alamat_jalan'),
				);
				$this->Model_user->ubah_user($id_user,$data_user);
				redirect('Beranda/profil');			
			}				
	}

	public function komunitas($id_user){
		$data1['id_user'] = $id_user;
		$data['kom'] = $this->Model_Komunitas->daftarKomunitas($data1['id_user']);
		$this->load->view('komunitas',$data);
	}

	public function ubah_profil($id_user){
		$this->form_validation->set_rules('nama','Nama Lengkap','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('no_telp','No Telepon','required');
		$this->form_validation->set_rules('no_identitas','No Identitas','required');
		$this->form_validation->set_rules('provinsi','Provinsi','required');
		$this->form_validation->set_rules('kota','Kota','required');
		$this->form_validation->set_rules('kecamatan','Kecamatan','required');
		$this->form_validation->set_rules('alamat_jalan','Alamat Jalan','required');
		
		if ($this->form_validation->run() == FALSE)	{
				$data['user'] = $this->Model_User->findUser($id_user); 
				$this->load->view('ubahprofil',$data); 
			} else {	
				$data_user = array(
					'nama' 			=> set_value('nama'),
					'email' 		=> set_value('email'),
					'password' 		=> set_value('password'),
					'no_telp' 		=> set_value('no_telp'),
					'no_identitas' 	=> set_value('no_identitas'),
					'provinsi' 		=> set_value('provinsi'),
					'kota' 			=> set_value('kota'),
					'kecamatan' 	=> set_value('kecamatan'),
					'alamat_jalan'	=> set_value('alamat_jalan'),
				);
				$this->Model_User->ubah_user($id_user,$data_user); 
				redirect('Beranda/detail/'.$id_user);			
			}				
	}
}