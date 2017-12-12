<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_lahan extends CI_Model {
  public function create($data_lahan){
    $this->db->insert('lahan',$data_lahan);
  }
}
