<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

  public function index()
	{
		$this->load->library('form_validation');
		$this->load->library('session');

		$id_user 		= $this->input->post('id_user');
		$nama 			= $this->input->post('nama');
		$username 		= $this->input->post('username');
		$password 		= $this->input->post('password');
		$repass 		= $this->input->post('repass');
		$email 			= $this->input->post('email');
		$no_identitas 	= $this->input->post('no_identitas');
		$no_telp 		= $this->input->post('no_telp');
		$provinsi 		= $this->input->post('provinsi');
		$kota 			= $this->input->post('kota');
		$kecamatan 		= $this->input->post('kecamatan');
		$alamat_jalan 	= $this->input->post('alamat_jalan');

		$this->form_validation->set_rules('id_user', 'Jenis Pengguna', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[6]|max_length[12]|is_unique[user.username]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[20]');
		$this->form_validation->set_rules('repass', 'Repassword', 'required|min_length[6]|matches[password]');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('no_identitas', 'No Identitas', 'required|min_length[16]|max_length[16]');
		$this->form_validation->set_rules('no_telp', 'No Telepon', 'required|min_length[10]|max_length[13]');
		$this->form_validation->set_rules('provinsi', 'Provinsi', 'required');
		$this->form_validation->set_rules('kota', 'Kota', 'required');
		$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required');
		$this->form_validation->set_rules('alamat_jalan', 'Alamat Lengkap', 'required');


		if($this->form_validation->run()==false){
			$this->load->view('register');
		}else{
			$this->load->model('Model_anggota');
			$data_anggota = array(
				'id_user' 		=> set_value('id_user'),
				'nama' 			=> set_value('nama'),
				'username' 		=> set_value('username'),
				'password' 		=> md5($password),
				'email' 		=> set_value('email'),
				'no_identitas' 	=> set_value('no_identitas'),	
				'no_telp' 		=> set_value('no_telp'),
				'provinsi' 		=> set_value('provinsi'),
				'kota' 			=> set_value('kota'),
				'kecamatan' 	=> set_value('kecamatan'),				
				'alamat_jalan' 	=> set_value('alamat_jalan'),
				);
			$this->Model_anggota->create($data_anggota);
			redirect('Beranda');
		}
	}

}
