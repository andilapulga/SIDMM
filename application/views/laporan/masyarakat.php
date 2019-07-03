<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php $this->load->view('vendor/src');?>
    <title>welcome</title>
</head>
<body>



<!-- sidebar-wrapper  -->
<main class="page-content">
  <div class="container">
    <h3>Input Page</h3>
    <hr>
    
    <br><br><br>
    <div class="row">
        <div class="col-md-1"> </div>

        <div class="col-md-10">
        <div class="card">
            <div class="card-header bg-dark text-white text-center">
                <h3>PILIH LAPORAN</h3>
            </div>
            <div class="card-body">
                <br><br>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10 ">
                        <div class="row">


                        <table class="table table-striped">
    <thead>
    <div class="container">

  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header text-center">

        <div class="row">
  <div class="col-sm-2"><img  class="img-responsive" src= "<?php echo base_url(); ?>asset/images/logo_AU.png" alt="Chania" width="80" height="80"></div>
  <div class="col-sm-8"><h3>PEMERINTAHAN KABUPATEN ACEH UTARA KECAMATAN MEURAH MULIA</h3>
  <small >jl. exxon mobile KM.267/234 Telp...... Desa Mesjid</small>
  </div>

  <div class="col-sm-2"></div>
</div>
  
        </div>
        <div class="modal-body" style="padding:40px">
        <h6 class="text-center"><u>LAPORAN PERTANGGUNGJAWABAN</u></h6>
        <h6 class="text-center">Nomor : ...../....../TB/2019</h6>
        <div class="row">
        <div class="col-sm-12" style="padding-left:50px">
          <p>Geuchik gampong baroh kuta batee Kecamatan Meurah Mulia Kabupaten Aceh Utara Provinsi Aceh Dengan ini menegaskan:</p>
          </div>
       </div>
       <div class="row">
        <div class="col-4" style="padding-left:80px">
        <p>
          <span>Id Laporan</span><br>
          <span>Nama Kegiatan</span><br>
          <span>Jenis Kegiatan</span><br>
          <span>Tahap Kegiatan</span><br>
          <span>Tanggal Kegiatan</span><br>
          <span>Biaya Material</span><br>
          <span>Biaya Operasional</span><br>
          <span>Biaya Tak Terduga</span><br>
          <span>Total Biaya</span><br>
          <span>Sumber Dana</span><br>
          <span>keberhasilan</span><br>
          <span>penanggung Jawab</span><br>
        </p>
        </div>
        <div class="col-1">
          <p>
            :<br>
            :<br>
            :<br>
            :<br>
            :<br>
            :<br>
            :<br>
            :<br>
            :<br>
            :<br>
            :<br>
            :<br>
          </p>
        </div>
        <div class="col-7">
        <p>
          <span id="idlaporan"></span><br>
          <span id="namaKegiatan"></span><br>
          <span id="jenisKegiatan"></span><br>
          <span id="tahapKegiatan"></span><br>
          <span id="tgl"></span><br>
          <span id="material"></span><br>
          <span id="operasi"></span><br>
          <span id="ttdg"></span><br>
          <span id="total"></span><br>
          <span id="dana"></span><br>
          <span id="keberhasilan"></span><br>
          <span class="pj"></span><br>
        </p>
        </div>
       </div>
          <div class="row">
              <div class="col-sm-1"></div>
              <div class="col-sm-3"><h6>Dokumentasi:</h6></div></div>
              <br>
           
              <div class="row" style="padding-left:50px" id="dok"></div>  
        </div>
        <div class="row">
              <div class="col-sm-1"></div>
              <div class="col-sm-6" style="padding-left:50px">
              <h6>Deskripsi :</h6>
              </div>
            
              <div class="col-sm-4">
              <br><br><h6 class="text-center">STAFF GAMPONG BAROH KUTA BATEE</H6>
              <br><br><h6 class="text-center"><u><span class="pj"></span></u></h6></div>
              <div class="col-sm-1"></div>
              </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" id="print">Print</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

      <tr>
      <th>No</th>
        <th>Nama Kegiatan</th>
        <th>Tanggal Kegiatan</th>
        <th>Dana</th>
      </tr>
    </thead>
    <tbody>
    <?php $nomor=1; foreach($laporan as $desa_baru){?>
      <tr>
      <td><?php echo $nomor++?> </td>
        <td><a href="" data-toggle="modal" class="show_modal" data-target="#myModal" 
          data-nama="<?php echo $desa_baru ->nama_kegiatan?>"   
          data-jenis="<?php echo $desa_baru ->jenis_kegiatan?>"
          data-id="<?php echo $desa_baru ->id_lpaoran?>"
          data-tgl="<?php echo $desa_baru ->tanggal_kegiatan?>"
          data-tahap="<?php echo $desa_baru ->tahap_kegiatan?>"
          data-material="<?php echo $desa_baru ->biaya_bahan?>"
          data-operasional="<?php echo $desa_baru ->biaya_operasional?>"
          data-ttdg="<?php echo $desa_baru ->biaya_takterduga?>"
          data-total="<?php echo $desa_baru ->total_biaya?>"
          data-dana="<?php echo $desa_baru ->id_dana?>"
          data-keberhasilan="<?php echo $desa_baru ->keberhasilan?>"
          data-pj="<?php echo $desa_baru ->penanggung_jawab?>"
          data-dok="<?php echo $desa_baru ->uploaded_images?>"

          >
        
        <?php echo $desa_baru ->nama_kegiatan?></a></td>
        <td><?php echo $desa_baru ->tanggal_kegiatan?></td>
        <td><?php echo $desa_baru ->id_dana?></td>
       
        <td></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  
                      
                       


                            
                        </div>
                    </div>
                    <div class="col-md-1"></div>

                </div>
                <br><br>
            </div>
        </div>
        </div>

        <div class="col-md-1"></div>
    </div>

    <script src="<?php echo base_url(); ?>asset/js/show_modal.js"></script> 
    <script src="<?php echo base_url(); ?>asset/js/printThis.js"></script> 
</body>
</html>