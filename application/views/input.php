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
<?php $this->load->view('vendor/sidebar');?>


<!-- sidebar-wrapper  -->
<main class="page-content">
  <div class="container">
    <h3>Input Page</h3>
    <hr>
  
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Laporan
                </div>
                <div class="card-body">
                <form>
                <div class="form-group row ">
                      <label for="staticEmail" class="col-sm-3 col-form-label"><strong>Username</strong></label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" id="username" placeholder="">
                      </div>
                  </div>
                  <div class="form-group row ">
                      <label for="staticEmail" class="col-sm-3 col-form-label"><strong>Nama kegiatan</strong></label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" id="nama_kegiatan" placeholder="">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="inputPassword" class="col-sm-3 col-form-label"><strong>jenis kegiatan</strong></label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" id="jenis_kegiatan" placeholder="">
                      </div> 
                  </div>
                  <div class="form-group row">
                      <label for="inputPassword" class="col-sm-3 col-form-label"><strong>jenis anggaran</strong></label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" id="jenis_anggaran" placeholder="">
                      </div> 
                  </div>
                  <div class="form-group row">
                      <label for="inputPassword" class="col-sm-3 col-form-label">Tahap kegiatan</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" id="tahap_kegiatan" placeholder="">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="inputPassword" class="col-sm-3 col-form-label">Tanggal kegiatan</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" id="tanggal_kegiatan" placeholder="">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="inputPassword" class="col-sm-3 col-form-label">Biaya bahan/Alat</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" id="biaya_bahan" placeholder="">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="inputPassword" class="col-sm-3 col-form-label">Biaya Operasi</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" name="biaya_operasional" placeholder="">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="inputPassword" class="col-sm-3 col-form-label">Biaya tak terduga</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" id="biaya_takterduga" placeholder="">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="inputPassword" class="col-sm-3 col-form-label">Total Biaya</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" id="total_biaya" placeholder="">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="inputPassword" class="col-sm-3 col-form-label">Presesntase Kesuksesan</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" id="presentase_kesuksesan" placeholder="">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="inputPassword" class="col-sm-3 col-form-label">Penanggung jawab</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" id="penanggung_jawab" placeholder="">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="inputPassword" class="col-sm-3 col-form-label">Nomor Hp</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" id="no_hp" placeholder="">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="inputPassword" class="col-sm-3 col-form-label">dokumentasi</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" id="dokumentasi" placeholder="">
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


</div>
</main>
<!-- page-content" -->
</div>
<!-- page-wrapper -->
</body>
</html>