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
<?php $this->load->view('vendor/sidebar');?>

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
                <h3>PILIH INSTRUKSI</h3>
            </div>
            <div class="card-body">
                <br><br>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10 ">
                        <div class="row">
                        <div class="container">
           
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>Judul</th>
                                <th>Tanggal</th>
                                
                              </tr>
                            </thead>
                            <tbody>
                            <?php $nomor=1; foreach($show_instruction as $baru){?>
                              <tr>
                                <td> <?php echo $baru ->judul?></td>
                                <td><?php echo $baru ->tanggal?></td>
                                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $baru ->id_instruksi?>">
    Lihat
  </button></td>
    
        
      </tr>
      <!-- The Modal -->
  <div class="modal fade" id="myModal<?php echo $baru ->id_instruksi?>">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">INSTRUKSI</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
           <?php echo $baru->instruksi?>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
                                
                               
                              </tr>
                              <?php } ?>
                              
                            </tbody>
                          </table>
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