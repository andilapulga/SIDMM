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
    <!-- <script src="<?php echo base_url(); ?>asset/js/input.js"></script> -->
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
                              <?php echo form_open_multipart($action);?>
                    <form action="<?php echo base_url('Input/update') ; ?>" method="post">
                  <div class="form-group row ">
                      <label for="staticEmail" class="col-sm-3 col-form-label"><strong>Nama Kegiatan</strong></label>
                      <div class="col-sm-9">
                      <?php echo form_input($nama_kegiatan, $edit_laporan->nama_kegiatan);?>
                      </div>
                  </div>
                  <div class="form-group row ">
                      <label for="staticEmail" class="col-sm-3 col-form-label"><strong>Jenis Kegiatan</strong></label>
                      <div class="col-sm-9">
                      <?php echo form_input($jenis_kegiatan, $edit_laporan->jenis_kegiatan);?>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="inputPassword" class="col-sm-3 col-form-label"><strong>Tahap Kegiatan</strong></label>
                      <div class="col-sm-9">
                      <?php echo form_input($tahap_kegiatan, $edit_laporan->tahap_kegiatan);?>
                      </div> 
                  </div>
                  

                  <div class="form-group row">
                      <label for="inputPassword" class="col-sm-3 col-form-label"><strong>Biaya Material</strong></label>
                      <div class="col-sm-9">
                      <?php echo form_input($biaya_bahan, $edit_laporan->biaya_bahan);?>
                      </div> 
                  </div>

                  <div class="form-group row">
                      <label for="inputPassword" class="col-sm-3 col-form-label"><strong>Biaya Operasional</strong></label>
                      <div class="col-sm-9">
                      <?php echo form_input($biaya_operasional, $edit_laporan->biaya_operasional);?>
                      </div> 
                  </div>

                  <div class="form-group row">
                      <label for="inputPassword" class="col-sm-3 col-form-label"><strong>Biaya Tak Terduga</strong></label>
                      <div class="col-sm-9">
                      <?php echo form_input($biaya_takterduga, $edit_laporan->biaya_takterduga);?>
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
                    <option value="<?php echo form_input ($key->id_dana);?>"><?php echo $key->id_dana ?></option>

                    <?php
                    }
                     ?>
                     </select>
                      </div>
                      </div>

                      <div class="form-group row">
                      <label for="inputPassword" class="col-sm-3 col-form-label"><strong>Keberhasilan</strong></label>
                      <div class="col-sm-9">
                      <?php echo form_input($keberhasilan, $edit_laporan->keberhasilan);?>
                      </div> 
                      <?php echo form_input($id_lpaoran, $edit_laporan->id_lpaoran);?>
                  </div>

                  <div class="form-group row">
                    <input type="file" name="files" class="col-sm-3 col-form-label" id="files" multiple />
                      <div class="col-sm-9">
                      <input type="text" class="form-control" id="uploaded_images" placeholder="">
                      </div> 
                  </div>

                  <div class="form-group row" id="tampil_gambar">
                  </div>

                  <div class="form-group row">
                  <label for="inputPassword" class="col-sm-3 col-form-label"></label>
                      <div class="col-sm-9">
                      <button  class="btn btn-dark btn-block" ><?php echo $button_submit?></button>
                      </div> 
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