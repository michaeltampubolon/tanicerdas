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
            <?php echo form_open_multipart('Beranda/ubah_profil/'.$id_user,['class'=>'form-horizontal']);?>
            <div class="span9">
                <div class="widget-box"> 
                <div class="widget-content nopadding collapse in" id="collapseG2">
                  <ul class="recent-posts">

                    <div class="control-group">
                      <label class="control-label">Nama Lengkap</label>
                      <div class="controls">
                        <input type="text" class="span11" placeholder="Nama Lengkap"  name="nama" value="<?= $nama ?>" required />
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">Email Anda</label>
                      <div class="controls">
                        <input type="email" class="span11" placeholder="Email Anda"  name="email" value="<?= $email ?>" required />
                      </div>
                    </div>

                        <input type="hidden" class="span11" name="password" value="<?= $password ?>" />

                    <div class="control-group">
                      <label class="control-label">No Telepon </label>
                      <div class="controls">
                        <input type="number" class="span11" placeholder="No Telepon "  name="no_telp" value="<?= $no_telp ?>" required />
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label">No Identitas</label>
                      <div class="controls">
                        <input type="number" class="span11" placeholder="No Identitas"  name="no_identitas" value="<?= $no_identitas ?>" required />
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label">Provinsi </label>
                      <div class="controls">
                        <input type="text" class="span11" placeholder="Provinsi"  name="provinsi" value="<?= $provinsi?>" required />
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label">Kota</label>
                      <div class="controls">
                        <input type="text" class="span11" placeholder="Kota"  name="kota" value="<?= $kota ?>" required />
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label">Kecamatan </label>
                      <div class="controls">
                        <input type="text" class="span11" placeholder="Kecamatan"  name="kecamatan" value="<?= $kecamatan?>" required />
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label">Alamat Lengkap</label>
                      <div class="controls">
                         <textarea name="alamat_jalan" class="textarea_editor span12" rows="6" placeholder="Alamat Lengkap" required=""><?= $alamat_jalan ?></textarea>
                      </div>
                    </div>

                  </ul>
                </div>  
              </div>
              <div class="form-actions">
                <input type="hidden" name="is_submitted" value="1">
                <button type="submit" class="btn btn-success">Perbaharui</button>
                <?=  anchor('Beranda/detail','Kembali',['class'=>'btn btn-danger']) ?>
            </div>
            </div>
            <?= form_close() ?>
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
