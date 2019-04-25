<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    $this->load->view('vendor/src');
    ?>
    <title>Document</title>
</head>
<body>
<?php $this->load->view('vendor/sidebarpen');?>


<!-- sidebar-wrapper  -->
<main class="page-content">
  <div class="container">
    <h3>Input Page</h3>
    <hr>
  
    
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Tambah Desa
                </div>
                <div class="card-body">
                <form>
                
                  <div class="form-group row">
                      <label for="inputNama" class="col-sm-3 col-form-label"><strong>Nama Desa</strong></label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" id="nama_desa" placeholder="">
                      </div>
                      </div>
                    
                  
                  
              </form>
              <div class="form-group row">
                      <button class="btn btn-dark col-sm-3" id="submit" >submit</button>
                    <div id="pesan"></div>
                  </div>
                </div>
            </div>

            
        </div>
       
              </div>
        </div>
    </div>


</div>
</main>
<!-- page-content" -->
</div>
<!-- page-wrapper -->
</body>
</html>