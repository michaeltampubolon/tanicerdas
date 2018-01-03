 <!DOCTYPE html>
<html lang="en">

<?php $this->load->view('layout/header2');?>

<!--sidebar-menu-->

<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-list"></i>Forms</a>
  <ul>
    <li><a href="<?php echo base_url();?>index.php/Beranda"><i class="icon icon-home"></i> <span>Timeline</span></a> </li>
    
    <li><a href="<?php echo base_url();?>index.php/Beranda/detail/<?php echo $this->session->userdata('id_user')?>">
    <i class="icon icon-home"></i> <span>Profil</span></a> </li>

    <li> <a href="<?php echo base_url();?>index.php/Beranda/manajemenlahan"><i class="icon icon-inbox"></i> <span>Manajemen Lahan</span></a> </li>

    <li class="active"> <a href="<?php echo base_url();?>index.php/Beranda/komunitas/<?php echo $this->session->userdata('id_user')?>"><i class="icon icon-inbox"></i> <span>Komunitas</span></a> </li>
  </ul>
</div>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo base_url();?>index.php/Beranda" title="Menuju Timeline" class="tip-bottom"><i class="icon-home"></i> Komunitas</a> <a href="<?php echo base_url();?>index.php/Beranda/manajemenlahan" class="current">Daftar Komunitas</a>  </div>
    <h1>Daftar Komunitas.</h1>
  </div>

  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
  
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Informasi Lahan</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>DAFTAR INFORMASI LAHAN</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeX">
                  <td> 
                      <div class="widget-box collapsible">    
                          <div class="widget-title"> <a href="" data-toggle="collapse"> <span class="icon"></span>
                            <h5>Maaf Komunitas yang anda cari tidak ditemukan</h5>
                            </a> 
                          </div>
                      </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Design by <a href="https://tanicerdas.com">Tani Cerdas</a> </div>
</div>
<!--end-Footer-part-->
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/jquery.ui.custom.js"></script> 
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/jquery.uniform.js"></script> 
<script src="<?php echo base_url();?>assets/js/select2.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/matrix.js"></script> 
<script src="<?php echo base_url();?>assets/js/matrix.tables.js"></script>
</body>
</html>
