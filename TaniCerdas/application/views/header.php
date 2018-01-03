<!DOCTYPE html>
<html lang="en">
    <head>
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/bootstrap/css/bootstrap-responsive.min.css"/>
    <script src="<?php echo base_url(); ?>resources/bootstrap/js/jquery-1.7.2.min.js"></script>
    <script src="<?php echo base_url(); ?>resources/bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>            
        <div class="container-fluid">

            <br/>
            
            <div class="navbar" id="nav">
                <div class="navbar-inner">
                <div class="container">
                    <a class="brand" href="#"><b>Tani Cerdas</b></a>
                    <div class="nav-collapse">
                    <ul class="nav">
                        <li><a href="<?php echo site_url('thread'); ?>">Beranda</a></li>
                        <script>
                        $(function() {
                            $('#btn-new-thread').click(function() {
                                window.location = '<?php echo site_url('thread/create'); ?>';
                            });
                        });
                        </script>
                        <li><button id="btn-new-thread" class="btn btn-primary btn-mini">Post Baru</button></li>
                    </ul>
                    <ul class="nav pull-right">                        
                        <?php if ($this->session->userdata('cibb_logged_in') != 1): ?>
                        <li class="divider-vertical"></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                            <li>
                                <form class="well" action="<?php echo site_url('petani/join'); ?>" method="post" style="margin: 5px 10px;">
                                <label>Username</label>
                                <input type="text" name="row[username]" class="span3" placeholder="">
                                <label>Password</label>
                                <input type="password" name="row[password]" class="span3" placeholder="">
                                <input type="submit" name="btn-login" class="btn btn-primary" value="Login"/>
                                </form>
                            </li>
                            </ul>
                        </li>
                        <?php else: ?>
						<?php if ($this->session->userdata('admin_area') != 0): ?>
                        <li><a href="<?php echo site_url('penyuluh'); ?>">Penyuluh</a></li>
						<?php endif; ?>
                        <li><a href="<?php echo site_url('petani/logout'); ?>">Keluar</a></li>
                        <?php endif; ?>
                    </ul>
                    </div><!-- /.nav-collapse -->
                </div>
                </div><!-- /navbar-inner -->
            </div><!-- /navbar -->
            
            <div class="row-fluid">