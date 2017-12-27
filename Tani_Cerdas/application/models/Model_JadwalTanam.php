<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_JadwalTanam extends CI_Model {
  public function jadwaltanam($id_lahan){ 
    $this->db->where('id_lahan', $id_lahan);
    $query = $this->db->get('jadwal_tanam'); 
    return $query->result();          
  } 

  public function create($data_jadwal_tanam){
    $this->db->insert('jadwal_tanam',$data_jadwal_tanam);
  }

  public function delete($id_tanaman){
    $this->db->where('id_tanaman',$id_tanaman)->delete('jadwal_tanam');
  }

  public function find_jadwal_tanam($id_lahan){ 
	  $data = $this->db->where('id_lahan',$id_lahan)->limit(1)->get('lahan');
	  if ($data->num_rows() > 0 ){
	  	return $data->row();
	  }else {
	  	return array();
	  }           
  }

  public function find_jadwal($id_tanaman){ 
  $data = $this->db->where('id_tanaman',$id_tanaman)->limit(1)->get('jadwal_tanam');
  if ($data->num_rows() > 0 )
      {
          return $data->row();
      }else {
          return array();
      }           
  }

  public function ubah_jadwal_tanam($id_tanaman,$data_jadwal_tanam){
    $this->db->where('id_tanaman',$id_tanaman)->update('jadwal_tanam',$data_jadwal_tanam);
  }
}
