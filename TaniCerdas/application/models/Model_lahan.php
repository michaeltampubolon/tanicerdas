<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_lahan extends CI_Model { 

  public function create($data_lahan){
    $this->db->insert('lahan',$data_lahan);
  }
  public function getLahan($data){
    $this->db->where('id_user', $data);
    $query = $this->db->get('lahan');
    return $query->result();   
  }
  public function delete($id_lahan){
     $this->db->query("DELETE l.*, j.* FROM lahan l JOIN jadwal_tanam j ON l.id_lahan = j.id_lahan WHERE j.id_lahan = '$id_lahan' AND l.id_lahan= '$id_lahan'");
  }

  public function ubah_lahan($id_lahan,$data_lahan){
    $this->db->where('id_lahan',$id_lahan)->update('lahan',$data_lahan);
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
