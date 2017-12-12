<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('layout/header');?>
<!--sidebar-menu-->
<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-list"></i>Forms</a>
  <ul>
    <li><a href="<?php echo base_url();?>index.php/Beranda"><i class="icon icon-home"></i> <span>Timeline</span></a> </li>
    
    <li class="submenu active"> <a href="<?php echo base_url();?>index.php/Beranda/lahan"><i class="icon icon-inbox"></i> <span>Manajemen Lahan</span></a> </li>

    <li><a href="charts.html"><i class="icon icon-signal"></i> <span>Charts &amp; graphs</span></a> </li>
    <li><a href="widgets.html"><i class="icon icon-inbox"></i> <span>Widgets</span></a> </li>
    <li><a href="tables.html"><i class="icon icon-th"></i> <span>Tables</span></a></li>
    <li><a href="grid.html"><i class="icon icon-fullscreen"></i> <span>Full width</span></a></li>
    
    <li><a href="buttons.html"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li>
    <li><a href="interface.html"><i class="icon icon-pencil"></i> <span>Eelements</span></a></li>
    <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Addons</span> <span class="label label-important">5</span></a>
      <ul>
        <li><a href="index2.html">Dashboard2</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="calendar.html">Calendar</a></li>
        <li><a href="invoice.html">Invoice</a></li>
        <li><a href="chat.html">Chat option</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>Error</span> <span class="label label-important">4</span></a>
      <ul>
        <li><a href="error403.html">Error 403</a></li>
        <li><a href="error404.html">Error 404</a></li>
        <li><a href="error405.html">Error 405</a></li>
        <li><a href="error500.html">Error 500</a></li>
      </ul>
    </li>
    <li class="content"> <span>Monthly Bandwidth Transfer</span>
      <div class="progress progress-mini progress-danger active progress-striped">
        <div style="width: 77%;" class="bar"></div>
      </div>
      <span class="percent">77%</span>
      <div class="stat">21419.94 / 14000 MB</div>
    </li>
    <li class="content"> <span>Disk Space Usage</span>
      <div class="progress progress-mini active progress-striped">
        <div style="width: 87%;" class="bar"></div>
      </div>
      <span class="percent">87%</span>
      <div class="stat">604.44 / 4000 MB</div>
    </li>
  </ul>
</div>

<!--close-left-menu-stats-sidebar-->

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="<?php echo base_url();?>index.php/Beranda" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Timeline</a> <a href="#" class="tip-bottom">Manajemen Lahan</a> <a href="#" class="current">Tambah Lahan</a> </div>
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
            <div class="control-group">
              <label class="control-label">ID Lahan</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="ID Lahan" name="id_lahan" value="<?php echo set_value('id_lahan', '') ?>" required />
              </div>
            </div>
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
                <input type="number"  class="span11" placeholder="Luas Lahan"  name="luas" value="<?php echo set_value('luas', '') ?>" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Temperatur Rata-rata Lahan</label>
              <div class="controls">
                <input type="number" class="span11" placeholder="Kecamatan" name="temperatur" value="<?php echo set_value('temperatur', '') ?>" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Curah Hujan Rata-rata Lahan</label>
              <div class="controls">
                <input type="number" class="span11" placeholder="Curah Hujan" name="curah_hujan" value="<?php echo set_value('curah_hujan', '') ?>" required />
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
                <input type="number" class="span11" placeholder="pH Lahan" nname="ph" value="<?php echo set_value('ph', '') ?>" required />
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
                <input type="number" class="span11" placeholder="Tingkat Kedalaman Tanah" name="kedalaman_tanah" value="<?php echo set_value('kedalaman_tanah', '') ?>" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Kondisi Lereng Lahan</label>
              <div class="controls">
                <input type="number" class="span11" placeholder="Kondisi Lereng Lahan" name="lereng" value="<?php echo set_value('lereng', '') ?>" required />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Ketebalan Gambut</label>
              <div class="controls">
                <input type="number" class="span11" placeholder="Kondisi Drainase" name="ketebalan_gambut" value="<?php echo set_value('ketebalan_gambut', '') ?>" required />
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
