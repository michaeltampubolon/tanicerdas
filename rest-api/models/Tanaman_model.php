<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tanaman_model extends CI_Model {
  
  public function create($data_lahan){
    $this->db->insert('tanaman',$data_lahan);
  }

  public function list($filter_params = NULL)
  {
    $query = $this->db->select('tanaman.*,komoditas.komoditas')
      ->from('tanaman')
      ->join('komoditas','komoditas.id = tanaman.kel_komoditas', 'left');
    if ($filter_params){
      if($filter_params['temperatur']){
        $query->where('temperatur >',$filter_params['temperatur']-10);
        $query->where('temperatur <',$filter_params['temperatur']+10);
      }
      if($filter_params['kelembaban_udara']){
        $query->or_where('kelembaban_udara >',$filter_params['kelembaban_udara']-10);
        $query->where('kelembaban_udara <',$filter_params['kelembaban_udara']+10);
      }
      if($filter_params['ph_tanah']){
        $query->or_where('ph_tanah >',$filter_params['ph_tanah']-1);
        $query->where('ph_tanah <',$filter_params['ph_tanah']+1);
      }
      if($filter_params['ketinggian_tempat']){
        $query->or_where('ketinggian_tempat >',$filter_params['ketinggian_tempat']-100);
        $query->where('ketinggian_tempat <',$filter_params['ketinggian_tempat']+100);
      }
      if($filter_params['curah_hujan']){
        $query->or_where('curah_hujan >',$filter_params['curah_hujan']-15);
        $query->where('curah_hujan <',$filter_params['curah_hujan']+15);
      }
      if($filter_params['search']){
        $query->like('tanaman',$filter_params['search']);
        $query->or_like('komoditas',$filter_params['search']);
        $query->or_like('keterangan',$filter_params['search']);
      }
    }
    return $query->get()->result();
  }

  public function getSkemaTanam($id)
  {
    $query = $this->db->where('id_tanaman',$id)
      ->get('skema_tanam');
    
    return $query->result();
  }

}
