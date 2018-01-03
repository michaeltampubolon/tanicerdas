 <!DOCTYPE html>
<html lang="en">

<?php $this->load->view('layout/header2');?>

<!--sidebar-menu-->

<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-list"></i>Forms</a>
  <ul>
    <li><a href="<?php echo base_url();?>index.php/Beranda"><i class="icon icon-home"></i> <span>Timeline</span></a> </li>
    <li class="submenu active"> <a href="<?php echo base_url();?>index.php/Beranda/manajemenlahan"><i class="icon icon-inbox"></i> <span>Manajemen Lahan</span></a> </li>
  </ul>
</div>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo base_url();?>index.php/Beranda" title="Menuju Timeline" class="tip-bottom"><i class="icon-home"></i> Timeline</a> <a href="<?php echo base_url();?>index.php/Beranda/manajemenlahan" class="current">Manajemen Lahan</a> <a class="tip-bottom">Tambah Lahan</a> </div>
    <h1>Tambahkan Informasi Lahan Anda.</h1>
  </div>
   
   <div class="container-fluid">
      <a href="<?php echo base_url();?>index.php/Beranda/lahan"> <button class="btn btn-success">Buka Lahan Baru</button></a>
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

                  <?php $no=0; foreach($jadwal_tanam as $jadwal ): $no++;?>
                  <div class="accordion" id="collapse-group">
                    <div class="accordion-group widget-box">
                      <div class="accordion-heading">
                        <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGTwo" data-toggle="collapse"> <span class="icon"><i class="icon-circle-arrow-right"></i></span>
                          <h5>LAHAN <?php echo $no." - ID LAHAN : ".$jadwal->id_lahan;?></h5>
                          </a> </div>
                      </div>
                      <div class="collapse accordion-body" id="collapseGTwo">
                          <div class="widget-content"> 
                            <ul class="recent-posts">
                              <li>
                                <div class="user-thumb"> <img width="40" height="40" alt="User" src="<?php echo base_url();?>assets/img/demo/av1.jpg"> </div>
                                <div class="article-post">
                                  <div class="fr">
                                     <?=  anchor('Lahan/ubah_lahan/'.$jadwal->id_lahan,'Ubah',['class'=>'btn btn-primary']) ?> 
                                     <?=  anchor('Lahan/hapus_lahan/'.$jadwal->id_lahan,'Hapus',['class'=>'btn btn-danger','onclick'=>'return confirm(\'Anda yakin menghapus Informasi Lahan ? \')']) ?>
                                  </div>
                                
                                  <div class="row-fluid">
                                  <div class="span4">
                                    <div class="widget-box">
                                      <div class="widget-title"> <span class="icon"> <i class="icon-map-marker"></i> </span>
                                        <h5>Lokasi</h5>
                                      </div>
                                      <div class="widget-content nopadding">
                                        <table class="table table-bordered">
                                          <tbody>
                                            <tr>
                                              <td>Provinsi</td>
                                              <td><?php echo $lahans->provinsi;?></td>
                                            </tr>
                                            <tr>
                                              <td>Kota</td>
                                              <td><?php echo $lahans->kota;?></td>
                                            </tr>
                                            <tr>
                                              <td>Kecamatan</td>
                                              <td><?php echo $lahans->kecamatan;?></td>
                                            </tr>
                                            <tr>
                                              <td>Longitude Latitude</td>
                                              <td><?php echo $lahans->longlat;?></td>
                                            </tr>
                                            <tr>
                                              <td>Luas</td>
                                              <td><?php echo $lahans->luas;?> m<sup>2</sup></td> 
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="span4">
                                    <div class="widget-box">
                                      <div class="widget-title"> <span class="icon"> <i class="icon-reorder"></i> </span>
                                        <h5>Karakteristik Lahan</h5>
                                      </div>
                                      <div class="widget-content nopadding">
                                        <table class="table table-bordered">
                                          <tbody>
                                            <tr>
                                              <td>Temperatur</td>
                                              <td><?php echo $lahans->temperatur;?> &deg;C</td>
                                            </tr>
                                            <tr>
                                              <td>Curah Hujan</td>
                                              <td><?php echo $lahans->curah_hujan;?> mm</td>
                                            </tr>
                                            <tr>
                                              <td>Tekstur Tanah</td>
                                              <td><?php echo $lahans->tekstur;?></td>
                                            </tr>
                                            <tr>
                                              <td>pH Tanah</td>
                                              <td><?php echo $lahans->ph;?> pH</td>
                                            </tr>
                                            <tr>
                                              <td>Kondisi Drainase</td>
                                              <td><?php echo $lahans->drainase;?></td>
                                            </tr>
                                            <tr>
                                              <td>Kedalaman Tanah</td>
                                              <td><?php echo $lahans->kedalaman_tanah;?> Cm</td>
                                            </tr>
                                            <tr>
                                              <td>Kemiringan Lereng</td>
                                              <td><?php echo $lahans->lereng;?> &deg;</td>
                                            </tr>
                                            <tr>
                                              <td>Ketebalan Gambut</td>
                                              <td><?php echo $lahans->ketebalan_gambut;?> Cm</td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                </div>
                                 <?=  anchor('Lahan/ubah_lahan/'.$lahans->id_lahan,'Jadwal Tanam',['class'=>'btn btn-success']) ?> 
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
