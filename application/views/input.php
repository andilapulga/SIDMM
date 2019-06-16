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
    <script src="<?php echo base_url(); ?>asset/js/input.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/jquery.imageuploader.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>asset/css/styles.imageuploader.css" rel="stylesheet" type="text/css" />
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
                      <label for="staticEmail" class="col-sm-3 col-form-label"><strong>Nama Kegiatan</strong></label>
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
                      <label for="inputPassword" class="col-sm-3 col-form-label"><strong>Tahap Kegiatan</strong></label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" id="tahap_kegiatan" placeholder="">
                      </div> 
                  </div>
                  <div class="form-group row">
                      <label for="inputPassword" class="col-sm-3 col-form-label"><strong>Tanggal Kegiatan</strong></label>
                      <div class="col-sm-9">
                      <input id="datepicker" class="form-control" />
                      </div> 
                  </div>

                  <div class="form-group row">
                      <label for="inputPassword" class="col-sm-3 col-form-label"><strong>Biaya Bahan</strong></label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" id="biaya_bahan" placeholder="">
                      </div> 
                  </div>

                  <div class="form-group row">
                      <label for="inputPassword" class="col-sm-3 col-form-label"><strong>Biaya Operasional</strong></label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" id="biaya_operasional" placeholder="">
                      </div> 
                  </div>

                  <div class="form-group row">
                      <label for="inputPassword" class="col-sm-3 col-form-label"><strong>Biaya Tak Terduga</strong></label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" id="biaya_takterduga" placeholder="">
                      </div> 
                  </div>
                  
                  <div class="form-group row">
                      <label for="inputNama" class="col-sm-3 col-form-label"><strong>ID Dana</strong></label>
                      <div class="col-sm-9">
                      <select class="form-control" id="id_dana">
                      <option value="">Pilih Dana . . . . </option>                    
                    <?php
                     foreach ($ambildana as $key) {
                    ?>
                    <option value="<?php echo $key->id_dana?>"><?php echo $key->id_dana ?></option>

                    <?php
                    }
                     ?>
                     </select>
                      </div>
                      </div>

                      <div class="form-group row">
                      <label for="inputPassword" class="col-sm-3 col-form-label"><strong>Keberhasilan</strong></label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" id="keberhasilan" placeholder="">
                      </div> 
                  </div>

                  <div class="form-group row">
                      <label for="inputPassword" class="col-sm-3 col-form-label"><strong>Dokumentasi 1</strong></label>
                      <div class="col-sm-9">
                      
                      <input type="file" id="gambar1">
                      </div> 
                  </div>

                  <div class="form-group row">
                      <label for="inputPassword" class="col-sm-3 col-form-label"><strong>Dokumentasi 2</strong></label>
                      <div class="col-sm-9">
                      <input type="file" id="gambar2">
                      </div> 
                  </div>

                  <div class="form-group row">
                      <label for="inputPassword" class="col-sm-3 col-form-label"><strong>Dokumentasi 3</strong></label>
                      <div class="col-sm-9">
                      <input type="file" id="gambar3">
                      </div> 
                  </div>
                  <div class="form-group row">
                  <label for="inputPassword" class="col-sm-3 col-form-label"></label>
                      <div class="col-sm-9">
                      <button  class="btn btn-dark btn-block" id="submit" >Submit</button>
                      </div> 
                    
          
                  </div>
      
              </form>
    
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