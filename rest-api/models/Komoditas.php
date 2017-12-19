<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komoditas extends CI_Model {
  public function create($data){
    $this->db->insert('komoditas',$data);
  }

  public function list()
  {
    $query = $this->db->get('komoditas');
    return $query->result();
  }

}
