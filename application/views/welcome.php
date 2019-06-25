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
    <br><br><br>
    <div class="row">
        <div class="col-md-3"> </div>

        <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-dark text-white text-center">
                <h3>SILAHKAN LOGIN</h3>
            </div>
            <div class="card-body">
                <br><br>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                
                                 <a href="<?php echo base_url()?>plogin" type="button" class="btn btn btn-danger btn-lg btn-block"><h3 class='fas fa-user-cog'></h3> pengawas</a>
                            </div>
                            <div class="col-md-4 mb-3">
                            <a href="<?php echo base_url()?>login"type="button" class="btn btn-primary btn-lg btn-block"><h3 class='fas fa-user-edit'></h3> perangkat</a>
                            </div>
                            <div class="col-md-4 mb-3">
                            <a href="<?php echo base_url()?>laporan" type="button" class="btn btn-success btn-lg btn-block"><h3 class='fas fa-users'></h3>masyarakat</a></div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>

                </div>
                <br><br>
            </div>
        </div>
        </div>

        <div class="col-md-3"></div>
    </div>
</body>
</html>