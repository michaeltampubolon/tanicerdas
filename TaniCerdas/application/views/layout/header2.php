<head>
<title>Tani Cerdas</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/colorpicker.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/datepicker.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/uniform.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/select2.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/fullcalendar.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/matrix-style.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/matrix-media.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-wysihtml5.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.gritter.css" />
<link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="<?php echo base_url();?>index.php/Beranda">Tani Cerdas</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome,  <?php echo $this->session->userdata('nama'); ?></span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> Profil Saya</a></li>
        <li class="divider"></li>
        <li><a href="<?php echo base_url();?>index.php/Beranda/logout"><i class="icon-key"></i> Keluar</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="<?php echo base_url();?>index.php/Beranda/logout"><i class="icon icon-share-alt"></i> <span class="text">Keluar</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu--> 
<form action="<?php echo base_url();?>index.php/Komunitas/cari" method=POST>
<div id="search">
  <input type="text" name="cari" placeholder="Cari Komunitas"/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div> 
</form>