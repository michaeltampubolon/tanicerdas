<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lahan extends CI_Controller {

  public function index(){
		$this->load->library('form_validation');
		$this->load->library('session');

	}

	public function tambah_lahan(){
		$id_lahan 			= $this->input->post('id_lahan');
		$provinsi 			= $this->input->post('provinsi');
		$kota 				= $this->input->post('kota');
		$kecamatan 			= $this->input->post('kecamatan');
		$longlat 			= $this->input->post('longlat');
		$luas 				= $this->input->post('luas');
		$temperatur 		= $this->input->post('temperatur');
		$curah_hujan 		= $this->input->post('curah_hujan');
		$tekstur 			= $this->input->post('tekstur');
		$ph 				= $this->input->post('ph');
		$drainase 			= $this->input->post('drainase');
		$kedalaman_tanah 	= $this->input->post('kedalaman_tanah');
		$lereng 			= $this->input->post('lereng');
		$ketebalan_gambut 	= $this->input->post('ketebalan_gambut');
		$drainase 			= $this->input->post('drainase');
		$id_user 			= $this->input->post('id_user');

		$this->load->model('Model_lahan');
		$data_lahan = array(
			'id_lahan' 			=> set_value('id_lahan'),
			'provinsi' 			=> set_value('provinsi'),
			'kota' 				=> set_value('kota'),
			'kecamatan' 		=> set_value('kecamatan'),
			'longlat' 			=> set_value('longlat'),
			'luas' 				=> set_value('luas'),
			'temperatur' 		=> set_value('temperatur'),
			'curah_hujan' 		=> set_value('curah_hujan'),
			'tekstur' 			=> set_value('tekstur'),
			'ph' 				=> set_value('ph'),
			'drainase' 			=> set_value('drainase'),
			'kedalaman_tanah' 	=> set_value('kedalaman_tanah'),
			'lereng' 			=> set_value('lereng'),
			'ketebalan_gambut' 	=> set_value('ketebalan_gambut'),
			'drainase' 			=> set_value('drainase'),
			'id_user' 			=> set_value('id_user'),
			);
		$this->Model_lahan->create($data_lahan);
		redirect('Beranda/lahan');
	}

}
