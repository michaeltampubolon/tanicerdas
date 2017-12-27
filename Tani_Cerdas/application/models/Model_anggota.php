<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_anggota extends CI_Model {
  public function create($data_anggota){
    $this->db->insert('user',$data_anggota);
  }

  public function getkodeunik($table) { 
        $q = $this->db->query("SELECT MAX(RIGHT(id_user,4)) AS idmax FROM ".$table);
        //$kd = ""; //kode awal
        if($q->num_rows()>0){ //jika data ada
            foreach($q->result() as $k){
                $tmp = ((int)$k->idmax)+1; //string kode diset ke integer dan ditambahkan 1 dari kode terakhir
                $kd = sprintf("%04s",$tmp); //kode ambil 4 karakter terakhir
            }
        }else{ //jika data kosong diset ke kode awal
            $kd = "0001";
        }
        $kar = "PTN."; //karakter depan kodenya
        //gabungkan string dengan kode yang telah dibuat tadi
        return $kar.$kd;
   } 
}
