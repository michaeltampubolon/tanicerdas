<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;

class Model_tanaman extends Eloquent {
    
    protected $table = 'tanaman';
    public $timestamps = FALSE;
    protected $primaryKey = 'id_tanaman';
    protected $fillable = array('nama_tanaman','kelompok_tanaman','akar','biji','daun','batang',
        'kategori_komoditas'
    );
    
    var $API ="";
	function __construct() {
		parent::__construct();
        $this->API="http://tanaman.id/index.php/tanaman";
	}

    public function JadwalTanam() {
        return $this->hasMany('Model_JadwalTanam');
    }

    public function Lahan() {
        return $this->belongsToMany('Model_lahan', 'jadwal_tanam', 'id_lahan','id_tanaman');
    }


    // // API Model
	// // function list_tanaman(){
	// // 	return json_decode($this->restclient->get());
    // // }
    // function list_tanamanrek($id_lahan){
    //     $params = array();
    //     if($lahan = Model_lahan::where('id_lahan', $id_lahan)->first()){
    //         $params = array(
    //             'temp'  => $lahan->temperatur,
    //             'ph'    => $lahan->ph,
    //             // 'udara' => ?,
    //             // 'dpl'
    //             'hujan' => $lahan->curah_hujan,
    //             // 'search'
    //         );
    //     }
	// 	return json_decode($this->restclient->get($params));
    // }
    // function tanamanrek_detail($id_tanaman){
	// 	return json_decode($this->restclient->get(
    //         array(
    //             'idt'   => $id_tanaman,
    //         )
    //     ));
	// }
	// function get_skema_tanam($id){
    //     $rc = $this->restclient;
    //     $rc->set_api("http://tanaman.id/index.php/skema_tanam");
    //     $params = array('id'=>  $id);
    //     $data = json_decode($this->restclient->get($params));
    //     // OREDER BY seq ASC
    //     usort($data, function($a, $b) { 
    //         return $a->seq < $b->seq ? -1 : 1; 
    //     }); 
	// 	return ($data);
    // }

    // function save($array)
	// {
	// 	$this->restclient->post($array);
	// }
	// function update($array)
	// {
	// 	$this->restclient->put($array);
	// }
	// function delete($id)
	// {
	// 	$this->restclient->delete($id);
	// }
    // // db Model
    // public function create($data_tanaman){
    //     $this->db->insert('tanaman',$data_tanaman);
    // }
    // public function semuaTanaman($data){
    //     // $this->db->where('id_lahan', $data);
    //     return json_decode($this->restclient->get());
    //     // $query = $this->db->get('tanaman');
    //     // return $query->result();   
    // }
    // public function find($id){ 
    //     $data = $this->db->where('id_tanaman',$id)->limit(1)->get('tanaman');
    //     if ($data->num_rows() > 0 )
    //         {
    //             return $data->row();
    //         }else {
    //             return array();
    //         }           
    // }
}
