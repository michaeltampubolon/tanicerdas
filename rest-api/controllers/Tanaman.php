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

}