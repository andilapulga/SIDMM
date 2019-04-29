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
                <h3>PILIH DESA ANDA</h3>
            </div>
            <div class="card-body">
                <br><br>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10 ">
                        <div class="row">
                      
                        <?php foreach($nama_desa as $desa) { ?>
                        <div class="col-md-4 mb-2 ">
                                    
                                 <a href="<?php echo base_url()?>login" type="button" class="btn btn-success btn-lg btn-block"><?php echo ($desa->nama_desa)?>                                           </a>
                                 
                            </div>
                            <?php }?>
                            <div class="col-md-12 mb-0">
                            <a href="<?php echo base_url()?>tambahdesa" type="button" class="btn btn-primary btn-block"></h3>Tambah Desa</a></div>
                    
                            
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