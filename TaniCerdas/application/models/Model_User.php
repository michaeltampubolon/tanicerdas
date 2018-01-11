<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;

class Model_User extends Eloquent {
  protected $table = 'user';
  public $timestamps = FALSE;
  protected $primaryKey = 'id_user';


  
  public function findUser($id_user){ 
      $data = $this->where('id_user',$id_user)->first();
      if ($data->count() > 0 ){
              return $data;
          }else {
              return array();
          }            
  	}

  	public function ubah_user($id_user,$data_user){
    	$this->where('id_user',$id_user)->update('user',$data_user);
  	}

  //   public function create($data_anggota){
  //   $this->db->insert('user',$data_anggota);
  // }
}
