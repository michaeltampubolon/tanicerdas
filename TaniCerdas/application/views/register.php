<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tani Cerdas</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/matrix-login.css" />
        <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    </head>
    <body>

    <div id="content">
        <div id="loginbox">            
            <div class="control-group normal_text"> <h3><img src="<?php echo base_url();?>assets/img/logo2.png" alt="Logo" /></h3></div>
        </div>
        <div class="container-fluid"><hr>
            
                <div class="span12">
                        <div class="widget-content nopadding">
                            <form class="form-horizontal" method="post" action="<?php echo base_url();?>index.php/Register" name="basic_validate" id="basic_validate" novalidate="novalidate">
                                <br>
                                <table border-collapse = "collapse" width="100%">
                                    <tr>
                                        <td>
                                            <div class="control-group">
                                                <label class="control-label">Username Anda</label>
                                                <div class="controls">
                                                    <div class="main_input_box">
                                                         <input type="text" name = "username" placeholder="Username Anda" id="required" value="<?php echo set_value('username', '') ?>" required=""/>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                        

                                        <td>
                                            <div class="control-group">
                                                <label class="control-label">Provinsi</label>
                                                <div class="controls">
                                                    <div class="main_input_box">
                                                        <input type="text" name="provinsi" placeholder="Provinsi" value="<?php echo set_value('provinsi', '') ?>" required="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="control-group">
                                                <label class="control-label">Nama Lengkap</label>
                                                <div class="controls">
                                                    <div class="main_input_box">
                                                       <input type="text" name = "nama" placeholder="Nama Lengkap" id="required" value="<?php echo set_value('nama', '') ?>" required="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="control-group">
                                                <label class="control-label">Kabupaten/Kota</label>
                                                <div class="controls">
                                                    <div class="main_input_box">
                                                        <input type="text" name="kota" placeholder="Kabupaten/Kota" value="<?php echo set_value('kota', '') ?>" required="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                        
                                    <tr>
                                        <td>
                                            <div class="control-group">
                                                <label class="control-label">Email Anda</label>
                                                <div class="controls">
                                                    <div class="main_input_box">
                                                       <input type="email" name = "email" placeholder="Email Anda" id="email" value="<?php echo set_value('email', '') ?>" />
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="control-group">
                                                <label class="control-label">Kecamatan</label>
                                                <div class="controls">
                                                    <div class="main_input_box">
                                                        <input type="text" name="kecamatan" placeholder="Kecamatan" value="<?php echo set_value('kecamatan', '') ?>" required="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                             
                                                <div class="control-group">
                                                  <label class="control-label">Password Anda</label>
                                                  <div class="controls">
                                                    <div class="main_input_box">
                                                        <input type="password" name="password" id="password" placeholder="Password Anda" value="<?php echo set_value('password', '') ?>" required="" />
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="control-group">
                                                  <label class="control-label">Konfirmasi Password</label>
                                                  <div class="controls">
                                                    <input type="password" name="repass" id="repass" placeholder="Konfirmasi Password" value="<?php echo set_value('repass', '') ?>" required="" />
                                                  </div>
                                                </div>
                                        </td>
                                        
                                        <td>
                                            <div class="control-group">
                                                <label class="control-label">Alamat Lengkap</label>
                                                <div class="controls">
                                                    <div class="main_input_box">
                                                        <textarea name="alamat_jalan" placeholder="Alamat Lengkap" value="<?php echo set_value('alamat_jalan', '') ?>" required=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>                                      
                                    </tr>

                                    <tr>                                        
                                        <td>
                                              <div class="control-group">
                                                <label class="control-label">Nomor Identitas NIK</label>
                                                <div class="controls">
                                                   <input type="number" id="number" name="no_identitas" placeholder="Nomor Identitas NIK" value="<?php echo set_value('no_identitas', '') ?>" required/>
                                                </div>
                                              </div>
                                        </td>


                                        <td>
                                            <div class="control-group">
                                                <label class="control-label">Jenis Pengguna</label>
                                                <div class="controls">
                                                 <select name="id_user" value="<?php echo set_value('id_user', '') ?>" required="">
                                                    <?php
                                                        function ryRandom(){
                                                         $ryRandom = rand(111111,999999);
                                                         return $ryRandom;
                                                        }
                                                      echo '<option value="">Jenis Pengguna</option>
                                                      <option value="PTN-'.ryRandom().'">Petani</option>
                                                      <option value="PNY-'.ryRandom().'">Penyuluh</option>';
                                                      ?>
                                                  </select>
                                              </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="control-group">
                                                <label class="control-label">Nomor Telepon</label>
                                                <div class="controls">
                                                    <div class="main_input_box">
                                                        <input type="number" name="no_telp" placeholder="Nomor Telepon" value="<?php echo set_value('no_telp', '') ?>" required="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </td> 

                                        <td>
                                            <div class="form-actions">
                                                <span class="pull-right"><input  class="btn btn-primary" type="submit" value="Daftar" ></span>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <h6 align="right">Sudah memiliki akun? <a href="<?php echo base_url();?>index.php/Login" class="signup">Masuk</a></h6>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>

<div id="content">
  <div class="container-fluid"><hr>
    <div class="row-fluid"> 
    </div>
  </div>
</div>

         <div class="copyrights text-center">
              <p>Design by <a href="https://tanicerdas.com" class="external">Tani Cerdas</a></p>
          </div>
        <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>  
        <script src="<?php echo base_url();?>assets/js/matrix.login.js"></script> 
        <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script> 
        <script src="<?php echo base_url();?>assets/js/jquery.ui.custom.js"></script> 
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script> 
        <script src="<?php echo base_url();?>assets/js/jquery.uniform.js"></script> 
        <script src="<?php echo base_url();?>assets/js/select2.min.js"></script> 
        <script src="<?php echo base_url();?>assets/js/jquery.validate.js"></script> 
        <script src="<?php echo base_url();?>assets/js/matrix.js"></script> 
        <script src="<?php echo base_url();?>assets/js/matrix.form_validation.js"></script>
    </body>

</html>
