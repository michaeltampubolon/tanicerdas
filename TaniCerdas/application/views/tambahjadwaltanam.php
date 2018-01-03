<?php 
  $id_lahan              = $lahans->id_lahan;

?>


<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('layout/header2');?>
<!--sidebar-menu-->
<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-list"></i>Forms</a>
  <ul>
    <li><a href="<?php echo base_url();?>index.php/Beranda"><i class="icon icon-home"></i> <span>Timeline</span></a> </li>
    
    <li><a href="<?php echo base_url();?>index.php/Beranda/detail/<?php echo $this->session->userdata('id_user')?>">
    <i class="icon icon-home"></i> <span>Profil</span></a> </li>

    <li class="active"> <a href="<?php echo base_url();?>index.php/Beranda/manajemenlahan"><i class="icon icon-inbox"></i> <span>Manajemen Lahan</span></a> </li>

    <li> <a href="<?php echo base_url();?>index.php/Beranda/komunitas/<?php echo $this->session->userdata('id_user')?>"><i class="icon icon-inbox"></i> <span>Komunitas</span></a> </li>
  </ul>
</div>

<!--close-left-menu-stats-sidebar-->

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="<?php echo base_url();?>index.php/Beranda" title="Menuju Timeline" class="tip-bottom"><i class="icon-home"></i> Timeline</a> <a href="<?php echo base_url();?>index.php/Beranda/manajemenlahan" class="tip-bottom">Manajemen Lahan</a> <a href="<?php echo base_url();?>index.php/Beranda/lahan" class="current">Jadwal Tanam</a> </div>
  <h1>Tambahkan Informasi Jadwal Tanam pada Lahan Anda.</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="widget-box">
      <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
        <h5>Jadwal Tanam</h5>
      </div>
      <div class="widget-content">
        <div class="control-group">
            <?php echo form_open_multipart('Lahan/tambah_jadwaltanam/'.$id_lahan,['class'=>'form-horizontal']);?>

            <div class="control-group">
              <label class="control-label">Jenis Tanaman</label>
              <div class="controls">
                <?php
                  echo "<select name='id_tanaman' id='id_tanaman'>";
                  if (count($jadwal)) {
                      foreach ($jadwal as $list) {
                          echo "<option value='". $list['id_tanaman'] . "'>" . $list['nama_tanaman'] . "</option>";
                      }
                  }
                  echo "</select><br/>";
                ?>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">ID Lahan</label>
              <div class="controls">
                <input type="text"  class="span11"  name="id_lahan" value="<?php echo set_value('id_lahan', $id_lahan) ?>" readonly/>
              </div>
            </div> 

            <div class="control-group">
              <label class="control-label">Kegiatan</label>
              <div class="controls"> 
                <textarea name="kegiatan" class="textarea_editor span12" rows="6" value="<?php echo set_value('kegiatan', '') ?>" placeholder="Kegiatan Tanam" required=""></textarea>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Durasi</label>
              <div class="controls">
                <input type="number"  class="span11" placeholder="Durasi Tanam" name="durasi" value="<?php echo set_value('durasi', '') ?>" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Progress</label>
              <div class="controls">
                 <textarea name="progress" class="textarea_editor span12" value="<?php echo set_value('progress', '') ?>" rows="6" placeholder="Progress Tanam" required=""></textarea>
              </div>
            </div>
            <div class="form-actions">
                <input type="hidden" name="is_submitted" value="1">
                <button type="submit" class="btn btn-success">Tambah Jadwal Tanam</button>
                <?=  anchor('Beranda/manajemenlahan','Kembali',['class'=>'btn btn-danger']) ?>
            </div>
            <?= form_close() ?>
        </div>
      </div>
    </div>
  </div>
</div></div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Design by <a href="https://tanicerdas.com">Tani Cerdas</a> </div>
</div>
<!--end-Footer-part--> 
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/jquery.ui.custom.js"></script> 
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/bootstrap-colorpicker.js"></script> 
<script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.js"></script> 
<script src="<?php echo base_url();?>assets/js/jquery.toggle.buttons.js"></script> 
<script src="<?php echo base_url();?>assets/js/masked.js"></script> 
<script src="<?php echo base_url();?>assets/js/jquery.uniform.js"></script> 
<script src="<?php echo base_url();?>assets/js/select2.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/matrix.js"></script> 
<script src="<?php echo base_url();?>assets/js/matrix.form_common.js"></script> 
<script src="<?php echo base_url();?>assets/js/wysihtml5-0.3.0.js"></script> 
<script src="<?php echo base_url();?>assets/js/jquery.peity.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/bootstrap-wysihtml5.js"></script> 
<script>
	$('.textarea_editor').wysihtml5();
</script>
</body>
</html>
