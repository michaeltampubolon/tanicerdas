<?php 
  $id_lahan              = $lahans->id_lahan;
  if($this->input->post('is_submitted')){
    $provinsi          = set_value('provinsi');
    $kota              = set_value('kota');
    $kecamatan         = set_value('kecamatan');
    $longlat           = set_value('longlat');
    $luas              = set_value('luas');
    $temperatur        = set_value('temperatur');
    $curah_hujan       = set_value('curah_hujan');
    $tekstur           = set_value('tekstur');
    $ph                = set_value('ph');
    $drainase          = set_value('drainase');
    $kedalaman_tanah   = set_value('kedalaman_tanah');
    $lereng            = set_value('lereng');
    $ketebalan_gambut  = set_value('ketebalan_gambut');
  }else{
      $provinsi          = $lahans->provinsi;
      $kota              = $lahans->kota;
      $kecamatan         = $lahans->kecamatan;
      $longlat           = $lahans->longlat;
      $luas              = $lahans->luas;
      $temperatur        = $lahans->temperatur;
      $curah_hujan       = $lahans->curah_hujan;
      $tekstur           = $lahans->tekstur;
      $ph                = $lahans->ph;
      $drainase          = $lahans->drainase;
      $kedalaman_tanah   = $lahans->kedalaman_tanah;
      $lereng            = $lahans->lereng;
      $ketebalan_gambut  = $lahans->ketebalan_gambut;
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
  <div id="breadcrumb"> <a href="<?php echo base_url();?>index.php/Beranda" title="Menuju Timeline" class="tip-bottom"><i class="icon-home"></i> Timeline</a> <a href="<?php echo base_url();?>index.php/Beranda/manajemenlahan" class="tip-bottom">Manajemen Lahan</a> <a href="<?php echo base_url();?>index.php/Beranda/lahan" class="current">Ubah Informasi Lahan</a> </div>
  <h1>Ubah Informasi Lahan Anda.</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="widget-box">
      <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
        <h5>Informasi Lahan</h5>
      </div>
      <div class="widget-content">
        <div class="control-group">
            <?php echo form_open_multipart('Lahan/ubah_lahan/'.$id_lahan,['class'=>'form-horizontal']);?>
            <div class="control-group">
              <label class="control-label">Provinsi</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Provinsi"  name="provinsi" value="<?= $provinsi ?>" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Kota</label>
              <div class="controls">
                <input type="text"  class="span11" placeholder="Kota" name="kota" value="<?= $kota ?>" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Kecamatan</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Kecamatan" name="kecamatan" value="<?= $kecamatan ?>" required />
              </div>
            </div>
           <div class="control-group">
              <label class="control-label">Longitude Latitude</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Longitude Latitude"  name="longlat" value="<?= $longlat ?>" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Luas Lahan</label>
              <div class="controls">
                <input type="number"  class="span11" placeholder="Luas Lahan"  name="luas" value="<?= $luas ?>" required/> m<sup>2</sup>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Temperatur Rata-rata Lahan</label>
              <div class="controls">
                <input type="number" class="span11" placeholder="Temperatur" name="temperatur" value="<?= $temperatur ?>" required />&deg;C
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Curah Hujan Rata-rata Lahan</label>
              <div class="controls">
                <input type="number" class="span11" placeholder="Curah Hujan" name="curah_hujan" value="<?= $curah_hujan ?>" required /> mm 
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Tekstur Tanah</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Tekstur Tanah" name="tekstur" value="<?= $tekstur ?>" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">pH Lahan</label>
              <div class="controls">
                <input type="number" class="span11" placeholder="pH Lahan" name="ph" value="<?= $ph ?>" required />pH
              </div> 
            </div>
            <div class="control-group">
              <label class="control-label">Kondisi Drainase</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Kondisi Drainase" name="drainase" value="<?= $drainase ?>" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Tingkat Kedalaman Tanah</label>
              <div class="controls">
                <input type="number" class="span11" placeholder="Tingkat Kedalaman Tanah" name="kedalaman_tanah" value="<?= $kedalaman_tanah ?>" required /> Cm
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Kondisi Lereng Lahan</label>
              <div class="controls">
                <input type="number" class="span11" placeholder="Kondisi Lereng Lahan" name="lereng" value="<?= $lereng ?>" required /> &deg;
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Ketebalan Gambut</label>
              <div class="controls">
                <input type="number" class="span11" placeholder="Ketebalan Gambut" name="ketebalan_gambut" value="<?= $ketebalan_gambut ?>" required /> Cm
              </div>
            </div>

            <div class="form-actions">
                <input type="hidden" name="is_submitted" value="1">
                <button type="submit" class="btn btn-success">Perbaharui</button>
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
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/bootstrap-colorpicker.js"></script> 
<script src="js/bootstrap-datepicker.js"></script> 
<script src="js/jquery.toggle.buttons.js"></script> 
<script src="js/masked.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.form_common.js"></script> 
<script src="js/wysihtml5-0.3.0.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/bootstrap-wysihtml5.js"></script> 
<script>
	$('.textarea_editor').wysihtml5();
</script>
</body>
</html>
