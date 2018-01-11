 <!DOCTYPE html>
<html lang="en">

<?php 
  $this->load->view('layout/header2');
  
?>

<?php
  // $id_lahan = $lahans->id_lahan;
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
    <h1>Manajemen Informasi Jadwal Tanam pada Lahan <?php echo $id_lahan ?>.</h1>
  </div>
   
   <div class="container-fluid"> 
      <!-- <?=  anchor('Beranda/tambahjadwaltanam/'.$id_lahan,'Tambah Jadwal Tanam',['class'=>'btn btn btn-success']) ?>  -->
      <?=  anchor('Tanaman/listTanaman/'.$id_lahan,'Cari Tanaman',['class'=>'btn btn btn-success']) ?> 
  </div>



  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
  
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Informasi Jadwal Tanam</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>DAFTAR INFORMASI JADWAL TANAM</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeX">
                  <td>

                    <table>
                      <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Varietas</th>
                        <th>Kegiatan</th>
                        <th>Durasi (Hari)</th>
                        <th>Progress (%)</th>
                        <th>Aksi</th>
                      </tr>
                  <?php $no=0; foreach($jadwal_tanam as $jadwal ): $no++;?>
                      <tr>
                        <td><?= $no ?></td>
                        <td><?= date("d-M-Y",strtotime($jadwal->tgl)) ?></td>
                        <td><?= $jadwal->tanaman->nama_tanaman ?></td>
                        <td><h5><?= $jadwal->kegiatan ?></h5><q><?= $jadwal->ket ?></q></td>
                        <td><?= $jadwal->durasi ?></td>
                        <td><?= $jadwal->progress ?></td>
                        <td>
                          <?=  anchor('Lahan/ubah_jadwaltanam/'.$jadwal->id,'Ubah',['class'=>'btn btn-primary']) ?> 
                          <?=  anchor('Lahan/hapus_jadwaltanam/'.$jadwal->id,'Hapus',['class'=>'btn btn-danger','onclick'=>'return confirm(\'Anda yakin menghapus item ini ? \')']) ?>
                        </td>
                      </tr>
                  <!-- <div class="accordion" id="collapse-group">
                    <div class="accordion-group widget-box">
                      <div class="accordion-heading">
                        <div class="widget-title"> <a data-parent="#collapse-group" href="#<?php echo $jadwal->id_tanaman;?>" data-toggle="collapse"> <span class="icon"><i class="icon-circle-arrow-right"></i></span>
                          <h5>JADWAL TANAM <?php echo $no;?></h5>
                          </a> </div>
                      </div>
                      <div class="collapse accordion-body" id="<?php echo $jadwal->id_tanaman;?>">
                          <div class="widget-content"> 
                            <ul class="recent-posts">
                              <li>
                                <div class="user-thumb"> <img width="40" height="40" alt="User" src="<?php echo base_url();?>assets/img/demo/av1.jpg"> </div>
                                <div class="article-post">
                                  <div class="fr">
                                     <?=  anchor('Lahan/ubah_jadwaltanam/'.$jadwal->id_tanaman,'Ubah',['class'=>'btn btn-primary']) ?> 
                                     <?=  anchor('Lahan/hapus_jadwaltanam/'.$jadwal->id_tanaman,'Hapus',['class'=>'btn btn-danger','onclick'=>'return confirm(\'Anda yakin menghapus Informasi Lahan ? \')']) ?>
                                  </div>
                                
                                  <div class="row-fluid">
                                   <div class="span4">
                                    <div class="widget-box">
                                      <div class="widget-title"> <span class="icon"> <i class="icon-map-marker"></i> </span>
                                        <h5>Jadwal Tanam</h5>
                                      </div>
                                      <div class="widget-content nopadding">
                                        <table class="table table-bordered">
                                          <tbody>
                                            <tr>
                                              <td>Jenis Tanaman</td>
                                              <td></td>
                                            </tr>
                                            <tr>
                                              <td>Kegiatan</td>
                                              <td><?php echo $jadwal->kegiatan;?></td>
                                            </tr>
                                            <tr>
                                              <td>Durasi</td>
                                              <td><?php echo $jadwal->durasi;?></td>
                                            </tr>
                                            <tr>
                                              <td>Progress</td>
                                              <td><?php echo $jadwal->progress;?></td>
                                            </tr>
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
                  </div> -->
                <?php endforeach; ?>
                    </table>

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
