<?php

require APPPATH . '/libraries/REST_Controller.php';

class Skema_tanam extends REST_Controller {

	function __construct($config = 'rest') {
		parent::__construct($config);
	}

	function index_get() {
        $this->load->model('Tanaman_model');
		$skema = $this->Tanaman_model->getSkemaTanam($this->get('id'));
        $this->response($skema, 200);
	}

}