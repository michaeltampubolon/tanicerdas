<?php

require APPPATH . '/libraries/REST_Controller.php';

class Tanaman extends REST_Controller {

	function __construct($config = 'rest') {
		parent::__construct($config);
	}

	function index_get() {
        $this->load->model('Tanaman_model');

        $data = array();
        if($this->get()){
            $data = array(
                'temperatur' => $this->get('temp'),
                'kelembaban_udara' => $this->get('udara'),
                'ph_tanah' => $this->get('ph'),
                'ketinggian_tempat' => $this->get('dpl'),
                'curah_hujan' => $this->get('hujan'),
                'search' => $this->get('s'),
            );
        }
		$product = $this->Tanaman_model->list($data);
        $this->response($product, 200);
	}

	// function index_post() {
	// 	///	ID Generator 
	// 	$lid_sql = "SELECT id FROM tanaman WHERE kel_komoditas = ? ORDER BY id DESC";
	// 	$lid_res = $this->db->query($lid_sql, array($this->input->post('tanaman_komoditas')))->row();
	// 	$lid = str_pad((int)$this->input->post('tanaman_komoditas'), 4, '0', STR_PAD_LEFT) . 
	// 			(isset($lid_res)
	// 				?str_pad((int)substr($lid_res->id, -4) + 1, 4, '0', STR_PAD_LEFT)
	// 				:'0001');
		
	// 	/// INSERT DATA
	// 	$data = array(
	// 		'id' => $lid,
	// 		'tanaman' => $this->input->post('tanaman_nama'),
	// 		'temperatur' => $this->input->post('tanaman_temp'),
	// 		'kelembaban_udara' => $this->input->post('tanaman_kelembaban'),
	// 		'ph_tanah' => $this->input->post('tanaman_ph'),
	// 		'kel_komoditas' => $this->input->post('tanaman_komoditas'),
	// 		'est_biaya' => $this->input->post('tanaman_biaya'),
	// 		'kebutuhan_nasional' => $this->input->post('tanaman_kebutuhan'),
	// 		'ketinggian_tempat' => $this->input->post('tanaman_ketinggian'),
	// 		'curah_hujan' => $this->input->post('tanaman_hujan'),
	// 		'keterangan' => $this->input->post('tanaman_ket'),
	// 		);
	// 	$insert = $this->db->insert('tanaman', $data);
	// 	if ($insert) {
	// 		$this->response($data, 200);
	// 	} else {
	// 		$this->response(array('status' => 'fail', 502));
	// 	}
	// }

	// function index_put() {
	// 	$id = $this->put('tanaman_id');
	// 	$data = array(
	// 		'tanaman' => $this->put('tanaman_nama'),
	// 		'temperatur' => $this->put('tanaman_temp'),
	// 		'kelembaban_udara' => $this->put('tanaman_kelembaban'),
	// 		'ph_tanah' => $this->put('tanaman_ph'),
	// 		'kel_komoditas' => $this->put('tanaman_komoditas'),
	// 		'est_biaya' => $this->put('tanaman_biaya'),
	// 		'kebutuhan_nasional' => $this->put('tanaman_kebutuhan'),
	// 		'ketinggian_tempat' => $this->put('tanaman_ketinggian'),
	// 		'curah_hujan' => $this->put('tanaman_hujan'),
	// 		'keterangan' => $this->put('tanaman_ket'),
	// 		);
	// 	$this->db->where('id', $id);
	// 	$update = $this->db->update('tanaman', $data);
	// 	if ($update) {
	// 		$this->response($data, 200);
	// 	} else {
	// 		$this->response(array('status' => 'fail', 502));
	// 	}
	// }

	// function index_delete() {
	// 	$id = $this->delete('tanaman_id');
	// 	$this->db->where('id', $id);
	// 	$delete = $this->db->delete('tanaman');
	// 	if ($delete) {
	// 		$this->response(array('status' => 'success'.$delete."!"), 201);
	// 	} else {
	// 		$this->response(array('status' => 'fail', 502));
	// 	}
	// }

}