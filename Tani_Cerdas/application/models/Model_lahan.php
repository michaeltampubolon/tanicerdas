<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_lahan extends CI_Model {

  public function create($data_lahan){
    $this->db->insert('lahan',$data_lahan);
  }
  public function semuaLahan($data){
    $this->db->where('id_user', $data);
    $query = $this->db->get('lahan');
    return $query->result();   
  }
  public function delete($id_lahan){
    //$this->db->where('id_lahan',$id_lahan)->delete('lahan');
    //$this->db->where('id_lahan',$id_lahan)->delete('jadwal_tanam');

    $this->db->query("DELETE lahan,jadwal_tanam FROM user,pemohon,peserta 
        WHERE user.id_user=pemohon.id_pemohon 
        AND pemohon.id_pemohon=peserta.id_peserta 
        AND pemohon.id_pemohon= $id";
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
