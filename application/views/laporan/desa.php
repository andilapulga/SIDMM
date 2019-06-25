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
<?php $this->load->view('vendor/sidebarpen');?>

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
        <div class="modal-body">
        <h6 class="text-center"><u>LAPORAN PERTANGGUNGJAWABAN</u></h6>
        <h6 class="text-center">Nomor : ...../....../TB/2019</h6>
        <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
       

        <p>Geuchik gampong baroh kuta batee Kecamatan Meurah Mulia Kabupaten Aceh Utara Provinsi Aceh Dengan ini menegaskan:

              <div class="row">
              <div class="col-sm-1"></div>
              <div class="col-sm-3">
          <br>ID Laporan 
           <br> Nama Kegiatan 
           <br> jenis kegiatan 
           <br>tahap kegiatan 
           <br>tanggal kegiatan
           <br>Biaya Bahan 
           <br>Biaya Operasional
           <br>Biaya Tak Terduga
           <br>Total Biaya
           <br>Sumber Dana
           <br>Keberhasilan
           <br>Penanggung Jawab
           </div>
              <div class="col-sm-1">
           <br>:
           <br>:
           <br>:
           <br>:
           <br>:
           <br>:
           <br>:
           <br>:
           <br>:
           <br>:
           <br>:
           <br>:
           </div>
              <div class="col-sm-0"></div>
         <br>123422
         <br>build houses for homeless people
         <br>fisik
         <br>2
         <br>12 march 2019
         <br>$ 20.000
         <br>$ 10.000
         <br>$ 5.00
         <br>$ 35.500
         <br> APBD
         <br>50 %
         <br>alec benjamin
           <div class="col-sm-1"></div>
           </div></div></div>
          </p>
          <div class="row">
              <div class="col-sm-1"></div>
              <div class="col-sm-3"><h6>Dokumentasi:</h6></div></div>
              <br>
              <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-3"><img  class="img-responsive" src= "<?php echo base_url(); ?>asset/images/a.jpeg" alt="Chania" width="190" height="130"></div>
        <div class="col-sm-3"><img  class="img-responsive" src= "<?php echo base_url(); ?>asset/images/a.jpeg" alt="Chania" width="190" height="130"></div>
        <div class="col-sm-3"><img  class="img-responsive" src= "<?php echo base_url(); ?>asset/images/a.jpeg" alt="Chania" width="190" height="130"></div>
        <div class="col-sm-1"></div>
        <br>
         
        </div>
        </div>
        <div class="row">
              <div class="col-sm-1"></div>
              <div class="col-sm-6">
              <h6>Deskripsi :</h6>
              </div>
            
              <div class="col-sm-4">
              <br><br><h6 class="text-center">GEUCHIK GAMPONG BAROH KUTA BATEE</H6>
              <br><br><h6 class="text-center"><u>Wahyudin S.pd</u></h6></div>
              <div class="col-sm-1"></div>
              </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
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
        <td><a href="" data-toggle="modal" data-target="#myModal"><?php echo $desa_baru ->nama_kegiatan?></a></td>
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

    
</body>
</html>