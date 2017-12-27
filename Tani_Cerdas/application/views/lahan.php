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
  <div id="breadcrumb"> <a href="<?php echo base_url();?>index.php/Beranda" title="Menuju Timeline" class="tip-bottom"><i class="icon-home"></i> Timeline</a> <a href="<?php echo base_url();?>index.php/Beranda/manajemenlahan" class="tip-bottom">Manajemen Lahan</a> <a href="<?php echo base_url();?>index.php/Beranda/lahan" class="current">Tambah Lahan</a> </div>
  <h1>Tambahkan Informasi Lahan Anda.</h1>
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
          <form  method="post" action="<?php echo site_url('Lahan/tambah_lahan') ?>"  method="get" class="form-horizontal">
            <?php
              function ryRandom(){
               $ryRandom = rand(1111,9999);
               return $ryRandom;
              } 
            echo '<input type="hidden" name="id_lahan" value="IDL-'.ryRandom().'"/>';
            ?>
           
            <div class="control-group">
              <label class="control-label">Provinsi</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Provinsi"  name="provinsi" value="<?php echo set_value('provinsi', '') ?>" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Kota</label>
              <div class="controls">
                <input type="text"  class="span11" placeholder="Kota" name="kota" value="<?php echo set_value('kota', '') ?>" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Kecamatan</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Kecamatan" name="kecamatan" value="<?php echo set_value('kecamatan', '') ?>" required />
              </div>
            </div>
           <div class="control-group">
              <label class="control-label">Longitude Latitude</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Longitude Latitude"  name="longlat" value="<?php echo set_value('longlat', '') ?>" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Luas Lahan</label>
              <div class="controls">
                <input type="number"  class="span11" placeholder="Luas Lahan"  name="luas" value="<?php echo set_value('luas', '') ?>" required/> m<sup>2</sup>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Temperatur Rata-rata Lahan</label>
              <div class="controls">
                <input type="number" class="span11" placeholder="Temperatur" name="temperatur" value="<?php echo set_value('temperatur', '') ?>" required />&deg;C
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Curah Hujan Rata-rata Lahan</label>
              <div class="controls">
                <input type="number" class="span11" placeholder="Curah Hujan" name="curah_hujan" value="<?php echo set_value('curah_hujan', '') ?>" required /> mm
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Tekstur Tanah</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Tekstur Tanah" name="tekstur" value="<?php echo set_value('tekstur', '') ?>" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">pH Lahan</label>
              <div class="controls">
                <input type="number" class="span11" placeholder="pH Lahan" name="ph" value="<?php echo set_value('ph', '') ?>" required /> pH
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Kondisi Drainase</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Kondisi Drainase" name="drainase" value="<?php echo set_value('drainase', '') ?>" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Tingkat Kedalaman Tanah</label>
              <div class="controls">
                <input type="number" class="span11" placeholder="Tingkat Kedalaman Tanah" name="kedalaman_tanah" value="<?php echo set_value('kedalaman_tanah', '') ?>" required /> Cm
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Kemiringan Lereng Lahan</label>
              <div class="controls">
                <input type="number" class="span11" placeholder="Kemiringan Lereng Lahan" name="lereng" value="<?php echo set_value('lereng', '') ?>" required />&deg;
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Ketebalan Gambut</label>
              <div class="controls">
                <input type="number" class="span11" placeholder="Ketebalan Gambut" name="ketebalan_gambut" value="<?php echo set_value('ketebalan_gambut', '') ?>" required /> Cm
              </div>
            </div>

            <input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id_user'); ?>" hidden>

            <div class="form-actions">
              <button type="submit" class="btn btn-success">Simpan</button>
              <button type="reset" class="btn btn-success">Reset</button>
            </div>
          </form>
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
