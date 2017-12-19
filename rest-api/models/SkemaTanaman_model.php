<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SkemaTanaman_model extends CI_Model {

  public function list()
  {
    $query = $this->db->get('skema_tanam');
    return $query->result();
  }

}
