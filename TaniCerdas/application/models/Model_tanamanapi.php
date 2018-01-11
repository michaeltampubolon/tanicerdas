<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_tanamanapi extends CI_Model {    
    var $API ="";
	function __construct() {
		parent::__construct();
        $this->API="http://tanaman.id/index.php/tanaman";
	}

    // API Model
	// function list_tanaman(){
	// 	return json_decode($this->restclient->get());
    // }
    function list_tanamanrek($id_lahan){
        $params = array();
        if($lahan = Model_lahan::where('id_lahan', $id_lahan)->first()){
            $params = array(
                'temp'  => $lahan->temperatur,
                'ph'    => $lahan->ph,
                // 'udara' => ?,
                // 'dpl'
                'hujan' => $lahan->curah_hujan,
                // 'search'
            );
        }
		return json_decode($this->restclient->get($params));
    }
    function tanamanrek_detail($id_tanaman){
		return json_decode($this->restclient->get(
            array(
                'idt'   => $id_tanaman,
            )
        ));
	}
	function get_skema_tanam($id){
        $rc = $this->restclient;
        $rc->set_api("http://tanaman.id/index.php/skema_tanam");
        $params = array('id'=>  $id);
        $data = json_decode($this->restclient->get($params));
        // OREDER BY seq ASC
        usort($data, function($a, $b) { 
            return $a->seq < $b->seq ? -1 : 1; 
        }); 
		return ($data);
    }
}
