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
            <form action="<?php echo base_url();?>index.php/Login/login" method="post">
				 
                <?php
                    if (validation_errors() || $this->session->flashdata('result_login')) {
                  ?>
                        <div class="alert alert-danger animated fadeInDown" role="alert">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Peringatan!</strong>
                            <?php echo validation_errors(); ?>
                            <?php echo $this->session->flashdata('result_login'); ?>
                        </div>
                  <?php } ?>

                 <div class="control-group normal_text"> <h3><img src="<?php echo base_url();?>assets/img/logo2.png" alt="Logo" /></h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span>
                            <input type="text" name = "username" placeholder="Username" required="" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span>
                            <input type="password" name="password" placeholder="Password" required="" />
                        </div>
                    </div>
                </div>
                
                <h6 align="right">Belum memiliki akun? <a href="<?php echo base_url();?>index.php/Login/register" class="signup">Daftar</a></h6>

                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Lupa Password?</a></span>
                    <span class="pull-right"><input  class="btn btn-primary" type="submit" value="Masuk" >
                    </span>
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
