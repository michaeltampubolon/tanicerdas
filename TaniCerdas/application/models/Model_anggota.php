<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_anggota extends CI_Model {
  public function create($data_anggota){
    $this->db->insert('user',$data_anggota);
  }
}
