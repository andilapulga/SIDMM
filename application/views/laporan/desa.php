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
        <td><a href=''><?php echo $desa_baru ->nama_kegiatan?></a></td>
        <td><?php echo $desa_baru ->tanggal_kegiatan?></td>
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