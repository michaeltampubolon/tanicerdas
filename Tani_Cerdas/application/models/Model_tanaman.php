<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_tanaman extends CI_Model {
    // API Model
    var $API ="";
	function __construct() {
		parent::__construct();
		$this->API="http://tanaman.id/index.php/tanaman";
	}
	function list_tanaman(){
		return json_decode($this->restclient->get());
    }
    function list_tanamanrek($id_lahan){
        $this->db->where('id_lahan', $id_lahan);
        if($lahan = $this->db->get('lahan')->row()){
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
	function get_skema_tanam($id){
        $rc = $this->restclient;
        $rc->set_api("http://tanaman.id/index.php/skema_tanam");
        $params = array('id'=>  $id);        
		return json_decode($this->restclient->get($params));
    }    
    function save($array)
	{
		$this->restclient->post($array);
	}
	function update($array)
	{
		$this->restclient->put($array);
	}
	function delete($id)
	{
		$this->restclient->delete($id);
	}
    // db Model
    public function create($data_lahan){
        $this->db->insert('lahan',$data_lahan);
    }
    public function semuaTanaman($data){
        // $this->db->where('id_lahan', $data);
        return json_decode($this->restclient->get());
        // $query = $this->db->get('tanaman');
        // return $query->result();   
    }
    public function find($id_lahan){ 
        $data = $this->db->where('id_lahan',$id_lahan)->limit(1)->get('lahan');
        if ($data->num_rows() > 0 )
            {
                return $data->row();
            }else {
                return array();
            }           
    }
}
