<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Komunitas extends CI_Model {

    function cariKomunitas(){
      $c = $this->input->POST ('cari');
      $this->db->like('nama_komunitas', $c);
      $query = $this->db->get ('komunitas_tani');
      return $query->result(); 
    }

    function daftarKomunitas($id_user){
      $this->db->select('*');
      $this->db->from('komunitas_tani');
      $this->db->join('anggota_komunitas', 'komunitas_tani.id_komunitas = anggota_komunitas.id_komunitas');
      $this->db->where('anggota_komunitas.id_user', $id_user);
      $query = $this->db->get();
      return $query->result();
    }

    public function findKomunitas($id_komunitas){ 
      $data = $this->db->where('id_komunitas',$id_komunitas)->limit(1)->get('komunitas_tani');
      if ($data->num_rows() > 0 ){
        return $data->row();
      }else {
        return array();
      }           
    }
}
