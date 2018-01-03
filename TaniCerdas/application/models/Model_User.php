<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_User extends CI_Model {

     public function findUser($id_user){ 
      $data = $this->db->where('id_user',$id_user)->limit(1)->get('user');
      if ($data->num_rows() > 0 ){
              return $data->row();
          }else {
              return array();
          }            
  	}

  	public function ubah_user($id_user,$data_user){
    	$this->db->where('id_user',$id_user)->update('user',$data_user);
  	}
}
