<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lahan extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Model_lahan');
		$this->load->model('Model_JadwalTanam');
		$this->load->model('Model_tanaman');
		// if (!isset($this->session->userdata['id_user'])) {
		// 	redirect('Login');
		// }
	}
  	 
  	public function index(){
  		if (!isset($this->session->userdata['id_user'])) {
			redirect('Login');
		}
		$this->load->library('form_validation');
		$this->load->library('session');
	}

	public function list_lahan(){
		$lahan = Model_lahan::all();
		
		$data1['id_user'] = $this->session->userdata('id_user');
		$data['lahan'] = $lahan->where('id_user', $data1['id_user']);
		$this->load->view('manajemenlahan',$data);
	}

	public function tambah_lahan(){
		$data = array(
			'provinsi' 			=> $this->input->post('provinsi'),
			'kota' 				=> $this->input->post('kota'),
			'kecamatan' 		=> $this->input->post('kecamatan'),
			'longlat' 			=> $this->input->post('longlat'),
			'luas' 				=> $this->input->post('luas'),
			'temperatur' 		=> $this->input->post('temperatur'),
			'curah_hujan' 		=> $this->input->post('curah_hujan'),
			'tekstur' 			=> $this->input->post('tekstur'),
			'ph' 				=> $this->input->post('ph'),
			'drainase' 			=> $this->input->post('drainase'),
			'kedalaman_tanah' 	=> $this->input->post('kedalaman_tanah'),
			'lereng' 			=> $this->input->post('lereng'),
			'ketebalan_gambut' 	=> $this->input->post('ketebalan_gambut'),
			'drainase' 			=> $this->input->post('drainase'),
			'id_user' 			=> $this->session->userdata('id_user'),
		);

		$this->Model_lahan->tambah_lahan($data);
		redirect('Beranda/manajemenlahan');
	}

	public function hapus_lahan($id_lahan){
		$this->Model_lahan->hapus_lahan($id_lahan);
		redirect('Beranda/manajemenlahan');
	}

	public function ubah_lahan($id_lahan){
		$this->form_validation->set_rules('provinsi','Provinsi','required');
		$this->form_validation->set_rules('kota','Kota','required');
		$this->form_validation->set_rules('kecamatan','Kecamatan','required');
		$this->form_validation->set_rules('longlat','Longitude Latitude','required');
		$this->form_validation->set_rules('luas','Luas Lahan','required');
		$this->form_validation->set_rules('temperatur','Temperatur','required');
		$this->form_validation->set_rules('curah_hujan','Curah Hujan','required');
		$this->form_validation->set_rules('tekstur','Tekstur Tanah','required');
		$this->form_validation->set_rules('ph','pH Lahan','required');
		$this->form_validation->set_rules('drainase','Kondisi Drainase','required');
		$this->form_validation->set_rules('kedalaman_tanah','Tingkat Kedalaman Tanah','required');
		$this->form_validation->set_rules('lereng','Kondisi Lereng Lahan','required');
		$this->form_validation->set_rules('ketebalan_gambut','Ketebalan Gambut','required'); 
		
		if ($this->form_validation->run() == FALSE)	{
			$data['lahans'] = Model_lahan::find($id_lahan); 
			$this->load->view('editlahan',$data);
		} else {	 
			$data = array(
				'id_lahan'			=> $id_lahan,
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
				'kedalaman_tanah'	=> set_value('kedalaman_tanah'),
				'lereng'			=> set_value('lereng'),
				'ketebalan_gambut'	=> set_value('ketebalan_gambut'),
			);

			$this->Model_lahan->ubah_lahan($data);
			redirect('Beranda/manajemenlahan');			
		}				
	}

	public function listjadwaltanam($id_lahan){ 
		$lahan = $this->Model_lahan->find($id_lahan);
		$data['id_lahan'] = $id_lahan;
		$data['jadwal_tanam'] = $lahan->jadwalTanam;
		$this->load->view('manajemenjadwaltanam',$data); 
	}

	public function ubah_jadwaltanam($id){ 
		$this->form_validation->set_rules('kegiatan','Kegiatan','required');
		$this->form_validation->set_rules('tgl','Tanggal','required');
		$this->form_validation->set_rules('durasi','Durasi','required');
		$this->form_validation->set_rules('progress','Progress','required');
		$this->form_validation->set_rules('ket','Keterangan');
		$this->form_validation->set_rules('seq','Seq','required');
		//$this->form_validation->set_rules('longlat','Longitude Latitude','required');
		
		if ($this->form_validation->run() == FALSE)	{
				$data['jadwal'] = $this->Model_JadwalTanam->find($id); 
				$this->load->view('ubahjadwaltanam',$data); 
			} else {	
				$data_jadwal_tanam = array(
					'id'			=> $id,
					'kegiatan' 		=> set_value('kegiatan'),
					'tgl' 			=> set_value('tgl'),
					'durasi' 		=> set_value('durasi'),
					'progress' 		=> set_value('progress'),
					'ket' 			=> $this->input->ket,
					'seq' 			=> set_value('seq'),
				);
				$jadwal = $this->Model_JadwalTanam->ubah_jadwal_tanam($data_jadwal_tanam);
				redirect('Lahan/listjadwaltanam/'.$jadwal->id_lahan);		
			}				
	}
	public function hapus_jadwaltanam($id_jadwal){
		$jadwal = $this->Model_JadwalTanam->find($id_jadwal);
		$id_lahan = $jadwal->id_lahan;
		$jadwal->delete();
		redirect('Lahan/listjadwaltanam/'.$id_lahan);
	}

}