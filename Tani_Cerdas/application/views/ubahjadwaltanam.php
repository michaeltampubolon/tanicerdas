<?php 
  $id_lahan            = $jadwal->id_lahan;
  if($this->input->post('is_submitted')){ 
    $kegiatan          = set_value('kegiatan');
    $durasi            = set_value('durasi');
    $progress          = set_value('progress');
    //$id_tanaman      = set_value('id_tanaman');
  }else{
      $kegiatan        = $jadwal->kegiatan;
      $durasi          = $jadwal->durasi;
      $progress        = $jadwal->progress;
      $id_tanaman      = $jadwal->id_tanaman;
}
?>


<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('layout/header');?>
<!--sidebar-menu-->
<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-list"></i>Forms</a>
  <ul>
    <li><a href="<?php echo base_url();?>index.php/Beranda"><i class="icon icon-home"></i> <span>Timeline</span></a> </li>
    <li class="submenu active"> <a href="<?php echo base_url();?>index.php/Beranda/manajemenlahan"><i class="icon icon-inbox"></i> <span>Manajemen Lahan</span></a> </li>
  </ul>
</div>

<!--close-left-menu-stats-sidebar-->

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="<?php echo base_url();?>index.php/Beranda" title="Menuju Timeline" class="tip-bottom"><i class="icon-home"></i> Timeline</a> <a href="<?php echo base_url();?>index.php/Beranda/manajemenlahan" class="tip-bottom">Manajemen Jadwal Tanam</a> <a class="current">Ubah Jadwal Tanam</a> </div> 
  <h1>Ubah Informasi Jadwal Tanam pada Lahan Anda.</h1>
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
           <?php echo form_open_multipart('Lahan/ubah_jadwaltanam/'.$id_tanaman,['class'=>'form-horizontal']);?>
            <div class="control-group">
              <label class="control-label">Jenis Tanaman</label>
              <div class="controls">
                <select >
                  <option>First option</option>
                  <option>Second option</option>
                  <option>Third option</option>
                  <option>Fourth option</option>
                  <option>Fifth option</option>
                  <option>Sixth option</option>
                  <option>Seventh option</option>
                  <option>Eighth option</option>
                </select>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Kegiatan</label>
              <div class="controls"> 
                <textarea name="kegiatan" class="textarea_editor span12" rows="6" placeholder="Kegiatan Tanam" required=""><?= $kegiatan ?></textarea>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Durasi</label>
              <div class="controls">
                <input type="number"  class="span11" placeholder="Durasi Tanam" name="durasi" value="<?= $durasi ?>" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Progress</label>
              <div class="controls">
                 <textarea name="progress" class="textarea_editor span12" rows="6" placeholder="Progress Tanam" required=""><?= $progress ?></textarea>
              </div>
            </div>
            <div class="form-actions">
                <input type="hidden" name="is_submitted" value="1">
                <button type="submit" class="btn btn-success">Ubah Jadwal Tanam</button>
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
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
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
