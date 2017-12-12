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
        <div id="loginbox">            
            <form action="<?php echo base_url();?>index.php/Register" method="post">
				 <div class="control-group normal_text"> <h3><img src="<?php echo base_url();?>assets/img/logo2.png" alt="Logo" /></h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span>
                            <input type="text" name = "username" placeholder="Username Anda" required="" value="<?php echo set_value('username', '') ?>" />
                        </div>
                    </div>
                </div>
                
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user-md"> </i></span>
                            <input type="text" name = "nama" placeholder="Nama Lengkap" required="" value="<?php echo set_value('nama', '') ?>" />
                        </div>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span>
                            <input type="email" name = "email" placeholder="Email Anda" required="" value="<?php echo set_value('email', '') ?>" />
                        </div>
                    </div>
                </div>


                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span>
                            <input type="password" name="password" placeholder="Password Anda" value="<?php echo set_value('password', '') ?>" required="" />
                        </div>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span>
                            <input type="password" name="repass" placeholder="Konfirmasi Password" value="<?php echo set_value('repass', '') ?>" required="" />
                        </div>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span>
                            <input type="number" name="no_identitas" placeholder="Nomor Identitas NIK" value="<?php echo set_value('no_identitas', '') ?>" required="" />
                        </div>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span>
                            <input type="number" name="no_telp" placeholder="Nomor Telepon" value="<?php echo set_value('no_telp', '') ?>" required="" />
                        </div>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span>
                            <input type="text" name="provinsi" placeholder="Provinsi" value="<?php echo set_value('provinsi', '') ?>" required="" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span>
                            <input type="text" name="kota" placeholder="Kabupaten/Kota" value="<?php echo set_value('kota', '') ?>" required="" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span>
                            <input type="text" name="kecamatan" placeholder="Kecamatan" value="<?php echo set_value('kecamatan', '') ?>" required="" />
                        </div>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span>
                            <input type="text" name="alamat_jalan" placeholder="Alamat Lengkap" value="<?php echo set_value('alamat_jalan', '') ?>" required="" />
                        </div>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                     <select name="id_user" value="<?php echo set_value('id_user', '') ?>" required="">
                          <option value="">Jenis Pengguna</option>
                          <option value="petani">Petani</option>
                          <option value="penyuluh">Penyuluh</option>
                      </select>
                  </div>
                </div>

                
                <h6 align="right">Sudah memiliki akun? <a href="<?php echo base_url();?>index.php/Login/register" class="signup">Masuk</a></h6>

                <div class="form-actions">
                    <span class="pull-right"><input  class="btn btn-primary" type="submit" value="Daftar" >
                    </span>
                </div>
            </form>

            

            <form id="recoverform" action="#" class="form-vertical">
				<p class="normal_text">Masukkan e-mail anda, kami akan mengirimkan intruksi untuk mengatur kata sandi baru anda.</p>
				
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
                        </div>
                    </div>
               
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Kembali Masuk</a></span>
                    <span class="pull-right"><a class="btn btn-info"/>Reecover</a></span>
                </div>
            </form>
        </div>
         <div class="copyrights text-center">
              <p>Design by <a href="https://tanicerdas.com" class="external">Tani Cerdas</a></p>
          </div>
        <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>  
        <script src="<?php echo base_url();?>assets/js/matrix.login.js"></script> 
    </body>

</html>
