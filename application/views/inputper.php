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
                    Laporan
                </div>
                <div class="card-body">
                <form>
                  <div class="form-group row ">
                      <label for="inputUsername" class="col-sm-3 col-form-label"><strong>Username</strong></label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" id="username" placeholder="">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="inputPassword" class="col-sm-3 col-form-label"><strong>Password</strong></label>
                      <div class="col-sm-9">
                      <input type="password" class="form-control" id="password" placeholder="">
                      </div>
                      </div>

                      <div class="form-group row">
                      <label for="inputNama" class="col-sm-3 col-form-label"><strong>Nama</strong></label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" id="nama" placeholder="">
                      </div>
                      </div>


                      <div class="form-group row">
                      <label for="inputId_desa" class="col-sm-3 col-form-label"><strong>Level</strong></label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" id="level" placeholder="">
                      </select>
                    
                      </div>
                      </div>

                      <div class="form-group row">
                      <label for="inputNama" class="col-sm-3 col-form-label"><strong>ID Desa</strong></label>
                      <div class="col-sm-9">
                      <select class="form-control" id="sel1">
                      <option value="">Pilih Desa . . . . </option>                     <?php
                     foreach ($ambildesa as $key) {
                    ?>
                    <option value="<?php echo $key->id_desa?>"><?php echo $key->nama_desa ?></option>

                    <?php
                    }
                     ?>
                     </select>
                      </div>
                      </div>

                      <div class="form-group row">
                      <label for="inputNoHp" class="col-sm-3 col-form-label"><strong>Nomor Hp</strong></label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" id="no_hp" placeholder="">
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
<script src="<?php echo base_url(); ?>asset/js/inputper.js"></script>
</body>
</html>