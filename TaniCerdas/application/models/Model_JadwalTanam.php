<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;

class Model_JadwalTanam extends Eloquent {
  protected $table = 'jadwal_tanam';
  public $timestamps = FALSE;
  protected $primaryKey = 'id';
  protected $fillable = array('kegiatan','durasi','tgl','progress','ket','seq');

  public function lahan() {
      return $this->belongsTo('Model_lahan');
  }

  public function tanaman() {
      return $this->belongsTo('Model_tanaman', 'id_tanaman');
  }

  public function jadwaltanam($id_lahan){ 
    $this->where('id_lahan', $id_lahan);
    $this->orderby("seq","asc");

    return $this->get();   
  } 

  public function tambah_jadwaltanam($id_lahan, $id_tanaman){
    // PERIKSA SEMUA  PROGRESS pada lahan sudah selesai
    $jadwal = $this->where('id_lahan',$id_lahan)
        ->where('progress', '<', 100)
        ->get();

    if($jadwal->count()==0){
        $CI =& get_instance();
        // PUSH TANAMAN
        if(!Model_tanaman::find($id_tanaman)){
            $tanaman =  $CI->Model_tanamanapi->tanamanrek_detail($id_tanaman);
            $data_tanaman = array(
                'id_tanaman' 			=> $id_tanaman,
                'nama_tanaman'			=> $tanaman[0]->tanaman,
                'kategori_komoditas' 	=> $tanaman[0]->komoditas,
            );
            $CI->Model_tanaman->insert($data_tanaman);
        }
            
        // PUSH JADWAL
        if($skema_tanam = $CI->Model_tanamanapi->get_skema_tanam($id_tanaman)){
            $day = 0;
            $date = new DateTime();
            $data_jadwal_tanam = array();
            foreach($skema_tanam as $skema){
                array_push($data_jadwal_tanam, array(
                    'id_tanaman' 	=> $id_tanaman,
                    'id_lahan' 		=> $id_lahan,
                    'kegiatan' 		=> $skema->subjek,
                    'durasi' 		=> $skema->durasi,
                    'seq' 		=> $skema->seq,
                    'ket' 		=> $skema->keterangan,
                    'tgl'		=> $date->add(new DateInterval('P'.$day.'D'))->format('Y-m-d'),
                    'progress' 		=> 0,
                ));
                $day = $skema->durasi;
            }
            $this->insert($data_jadwal_tanam);
        }
    }
  }

  public function ubah_jadwal_tanam($data){
    $model = $this->find($data['id']);
    $model->update($data);
    return $model;
  }
}
