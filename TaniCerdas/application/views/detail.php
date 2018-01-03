<?php 
  $id_user              = $user->id_user;
  if($this->input->post('is_submitted')){
    $nama            = set_value('nama');
    $email           = set_value('email');
    $password        = set_value('password');
    $no_telp         = set_value('no_telp');
    $no_identitas    = set_value('no_identitas');
    $provinsi        = set_value('provinsi');
    $kota            = set_value('kota');
    $kecamatan       = set_value('kecamatan');
    $alamat_jalan    = set_value('alamat_jalan');
  }else{
      $nama            = $user->nama;
      $email           = $user->email;
      $password        = $user->password;
      $no_telp         = $user->no_telp;
      $no_identitas    = $user->no_identitas;
      $provinsi        = $user->provinsi;
      $kota            = $user->kota;
      $kecamatan       = $user->kecamatan;
      $alamat_jalan    = $user->alamat_jalan;
}
?>

<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('layout/header2');?>
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Timeline</a>
  <ul>
    <li><a href="<?php echo base_url();?>index.php/Beranda"><i class="icon icon-home"></i> <span>Timeline</span></a> </li>
    
    <li class="active"><a href="<?php echo base_url();?>index.php/Beranda/detail/<?php echo $this->session->userdata('id_user')?>">
    <i class="icon icon-user"></i> <span>Profil</span></a> </li>

    <li> <a href="<?php echo base_url();?>index.php/Beranda/manajemenlahan"><i class="icon icon-inbox"></i> <span>Manajemen Lahan</span></a> </li>

    <li> <a href="<?php echo base_url();?>index.php/Beranda/komunitas/<?php echo $this->session->userdata('id_user')?>"><i class="icon icon-inbox"></i> <span>Komunitas</span></a> </li>
  </ul>
</div>
<!--sidebar-menu-->
 
<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo base_url();?>index.php/Beranda" title="Menuju Timeline" class="tip-bottom"><i class="icon-user"></i> Profil Pengguna</a></div>
  </div>

<!--End-breadcrumbs-->


<!--Action boxes-->
  <div class="container-fluid">
<!--Chart-box-->    
    <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-user"></i></span>
          <h5>Profil  <?php echo $this->session->userdata('nama'); ?></h5>
        </div>
        <div class="widget-content" >
          <div class="row-fluid"> 
            <div class="span9">
                <div class="widget-box"> 
                <div class="widget-content nopadding collapse in" id="collapseG2">
                  <ul class="recent-posts">
                    <li>
                      <div class="article-post"> 
                        <span class="user-info"><strong>Nama Lengkap &emsp;&emsp;&emsp;: <?php echo $nama; ?></strong></span>
                      </div>
                    </li>
                    <li>
                      <div class="article-post">  <span class="user-info"><strong>Email &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: <?php echo $email; ?></strong></span>
                      </div>
                    </li>
                    <li>
                      <div class="article-post">  <span class="user-info"><strong>No Telepon &emsp;&emsp;&emsp;&emsp;&emsp;: <?php echo $no_telp; ?></strong></span>
                      </div> 
                    </li>
                    <li>
                      <div class="article-post">  <span class="user-info"><strong>No Identitas &emsp;&emsp;&emsp;&emsp;&nbsp;: <?php echo $no_identitas; ?></strong></span>
                      </div> 
                    </li>

                    <li>
                      <div class="article-post">  <span class="user-info"><strong>Provinsi &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: <?php echo $provinsi; ?></strong></span>
                      </div> 
                    </li>

                    <li>
                      <div class="article-post">  <span class="user-info"><strong>Kota &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: <?php echo $kota; ?></strong></span>
                      </div> 
                    </li>

                    <li>
                      <div class="article-post">  <span class="user-info"><strong>Kecamatan &emsp;&emsp;&emsp;&emsp;&emsp;: <?php echo $kecamatan; ?></strong></span>
                      </div> 
                    </li>

                    <li>
                      <div class="article-post">  <span class="user-info"><strong>Alamat Lengkap &emsp;&emsp;: <?php echo $alamat_jalan; ?></strong></span>
                      </div> 
                    </li>
                  </ul>
                </div>  
              </div>
              <div class="fr">
                   <?=  anchor('Beranda/ubah_profil/'.$id_user,'Ubah Profil',['class'=>'btn btn-primary']) ?> 
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<!--End-Chart-box--> 
    <hr/>
  </div>
</div>
<?php $this->load->view('layout/footer');?>
</body>
</html>
