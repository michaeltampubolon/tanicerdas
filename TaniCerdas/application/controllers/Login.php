<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  public function __construct() {
    parent::__construct();
    if ($this->session->userdata('username')) {
      redirect('Beranda');
    }
    $this->load->model(array('Mod_Login'));
  }

  public function index() {
    $this->load->view('login');
  }

  public function login() {
    $this->form_validation->set_rules('username', 'username', 'required|trim|xss_clean');
    $this->form_validation->set_rules('password', 'password', 'required|trim|xss_clean');
    if ($this->form_validation->run() == FALSE) {
    	$this->load->view('login');
    } else {
      $usr = $this->input->post('username');
      $psw = $this->input->post('password');
      $u = $usr;
      $p = ($psw);
      $cek = $this->Mod_Login->cek($u, $p);
      if ($cek->num_rows() > 0) {
        //login berhasil, buat session
        foreach ($cek->result() as $qad) {
          $sess_data['id_user'] 	= $qad->id_user;
          $sess_data['nama'] 		= $qad->nama;
          $sess_data['username'] 	= $qad->username;
          $this->session->set_userdata($sess_data);
        }
        $this->session->set_flashdata('success', 'Login Berhasil !');
        redirect('Beranda');
      } else {
        $this->session->set_flashdata('result_login', '<br>Username atau Password yang anda masukkan salah.');
        redirect('Login');
      }
    }
  }

  public function register() {
    $this->load->view('register');
  }
  
}
