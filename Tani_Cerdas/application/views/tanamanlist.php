 <!DOCTYPE html>
<html lang="en">

<?php 
  $this->load->view('layout/header');
  
?>

<?php
//   $id_lahan = $lahans->id_lahan;
?>

<!--sidebar-menu-->

<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-list"></i>Forms</a>
  <ul>
    <li><a href="<?php echo base_url();?>index.php/Beranda"><i class="icon icon-home"></i> <span>Timeline</span></a> </li>
    <li class="submenu active"> <a href="<?php echo base_url();?>index.php/Beranda/manajemenlahan"><i class="icon icon-inbox"></i> <span>Manajemen Lahan</span></a> </li>
  </ul>
</div>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo base_url();?>index.php/Beranda" title="Menuju Timeline" class="tip-bottom"><i class="icon-home"></i> Timeline</a> <a href="<?php echo base_url();?>index.php/Beranda/manajemenlahan" class="current">Manajemen Jadwal Tanam</a> <a class="tip-bottom">Tambah Jadwal Tanam</a> </div>
    <h1>Manajemen Tanaman.</h1>
  </div>
   
   <!-- <div class="container-fluid"> 
      <?=  anchor('Beranda/tambahjadwaltanam/'.$id_lahan,'Tambah Jadwal Tanam',['class'=>'btn btn btn-success']) ?> 
      <?=  anchor('Tanaman/listTanaman/'.$id_lahan,'Cari Tanaman',['class'=>'btn btn btn-default']) ?> 
  </div> -->



  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
  
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Daftar Tanaman</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>DAFTAR TANAMAN</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeX">
                  <td>

                  <?php $no=0; foreach($list_tanaman as $tanaman ): $no++;?>
                  
                  <div class="accordion" id="collapse-group">
                    <div class="accordion-group widget-box">
                      <div class="accordion-heading">
                        <div class="widget-title"> <a data-parent="#collapse-group" href="#<?php echo $tanaman->id;?>" data-toggle="collapse"> <span class="icon"><i class="icon-circle-arrow-right"></i></span>
                          <h5><?php echo $tanaman->tanaman;?></h5>
                          </a> </div>
                      </div>
                      <div class="collapse accordion-body" id="<?php echo $tanaman->id;?>">
                          <div class="widget-content"> 
                            <ul class="recent-posts">
                              <li>
                                <div class="user-thumb"> <img width="40" height="40" alt="User" src="<?php echo base_url();?>assets/img/demo/av1.jpg"> </div>
                                <div class="article-post">
                                  <!-- <div class="fr">
                                     <?=  anchor('Lahan/ubah_jadwaltanam/'.$jadwal->id_tanaman,'Ubah',['class'=>'btn btn-primary']) ?> 
                                     <?=  anchor('Lahan/hapus_jadwaltanam/'.$jadwal->id_tanaman,'Hapus',['class'=>'btn btn-danger','onclick'=>'return confirm(\'Anda yakin menghapus Informasi Lahan ? \')']) ?>
                                  </div> -->
                                
                                  <!-- Spek tanaman -->
                                  <div class="row-fluid">
                                   <div class="span4">
                                    <div class="widget-box">
                                      <div class="widget-title"> <span class="icon"> <i class="icon-map-marker"></i> </span>
                                        <h5>Detail</h5>
                                      </div>
                                      
                                      <div class="widget-content nopadding">
                                        <table class="table table-bordered">
                                          <tbody>
                                            <tr>
                                              <td>ID</td>
                                              <td><?= $tanaman->id ?></td>
                                            </tr>
                                            <tr>
                                              <td>Komoditas</td>
                                              <td></td>
                                            </tr>
                                            <tr>
                                              <td>Estimasi Biaya</td>
                                              <td><?php echo $tanaman->est_biaya;?></td>
                                            </tr>
                                            <tr>
                                              <td>Tingkat Kebutuhan Nasiona;</td>
                                              <td><?php echo $tanaman->kebutuhan_nasional;?></td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>

                                    <!-- Skema tanam -->
                                  <div class="row-fluid">
                                   <div class="span7">
                                    <div class="widget-box">
                                      <div class="widget-title"> <span class="icon"> <i class="icon-map-marker"></i> </span>
                                        <h5>Skema Tanam</h5>
                                      </div>
                                      
                                      <div class="widget-content nopadding">
                                        <table class="table table-bordered">
                                          <tbody>
                                            <tr>
                                              <th>No.</th><th>Subjek</th><th>Durasi</th>
                                            <!-- </tr> <?php print_r($skema_tanam[$tanaman->id]); ?> -->

                                            <?php $nos=0; foreach($skema_tanam[$tanaman->id] as $seq ): $nos++;?>
                                            <tr>
                                                <td><?=$nos?></td>
                                              <td><?= $seq->subjek ?></td><td><?= $seq->durasi ?></td>
                                            </tr>
                                            <?php endforeach; ?>

                                          </tbody>
                                        </table>
                                      </div>

                                    </div>
                                  </div>

                                </div>
                                </div>
                              </li>
                            </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>

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
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
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
