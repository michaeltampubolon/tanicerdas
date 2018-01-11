<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;

class Model_lahan extends Eloquent { 
  protected $table = 'lahan';
  public $timestamps = FALSE;
  protected $primaryKey = 'id_lahan';
  protected $fillable = ['provinsi','kota','kecamatan','longlat','luas','temperatur','curah_hujan',
    'tekstur','ph','drainase','kedalaman_tanah','lereng','ketebalan_gambut'
  ];

  public function JadwalTanam() {
    return $this->hasMany('Model_JadwalTanam', 'id_lahan');
  }

  public function Owner() {
    return $this->belongsTo('Model_User', 'id_user');
  }


  public function genNewIdLahan(){
    return "IDL-".rand(1111,9999);
  }

  public function setIdLahan($id_lahan){
    $this->id_lahan = $id_lahan;
  }

  public function tambah_lahan($data){
    $lahan = new Model_lahan;
		
		$lahan->provinsi 			= $data['provinsi'];
		$lahan->kota 				= $data['kota'];
		$lahan->kecamatan 			= $data['kecamatan'];
		$lahan->longlat 			= $data['longlat'];
		$lahan->luas 				= $data['luas'];
		$lahan->temperatur 			= $data['temperatur'];
		$lahan->curah_hujan 		= $data['curah_hujan'];
		$lahan->tekstur 			= $data['tekstur'];
		$lahan->ph 					= $data['ph'];
		$lahan->drainase 			= $data['drainase'];
		$lahan->kedalaman_tanah 	= $data['kedalaman_tanah'];
		$lahan->lereng 				= $data['lereng'];
		$lahan->ketebalan_gambut 	= $data['ketebalan_gambut'];
		$lahan->drainase 			= $data['drainase'];
		$lahan->id_user 			= $data['id_user'];
    $lahan->setIdLahan($lahan->genNewIdLahan());
    
    $lahan->save();
  }

  public function ubah_lahan($data){
    if ($lahan = $this->find($data['id_lahan'])){
		
      $lahan->provinsi 			= $data['provinsi'];
      $lahan->kota 				  = $data['kota'];
      $lahan->kecamatan 		= $data['kecamatan'];
      $lahan->longlat 			= $data['longlat'];
      $lahan->luas 				  = $data['luas'];
      $lahan->temperatur 		= $data['temperatur'];
      $lahan->curah_hujan 	= $data['curah_hujan'];
      $lahan->tekstur 			= $data['tekstur'];
      $lahan->ph 					  = $data['ph'];
      $lahan->drainase 			= $data['drainase'];
      $lahan->kedalaman_tanah 	= $data['kedalaman_tanah'];
      $lahan->lereng 				= $data['lereng'];
      $lahan->ketebalan_gambut 	= $data['ketebalan_gambut'];
      $lahan->drainase 			= $data['drainase'];
      
      $lahan->save();
    }
  }

  public function hapus_lahan($id_lahan){
    if($lahan = $this->find($id_lahan)) {
      foreach($lahan->JadwalTanam as $jadwal) {
        $jadwal->delete();
      }
      $lahan->delete();
    }
  }
}
