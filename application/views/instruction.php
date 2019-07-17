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
                    Instruksi
                </div>
                <div class="card-body">
                <form>
                <div class="form-group row ">
                        <label for="comment">Judul:</label>
                        <textarea class="form-control" rows="1" id="title"></textarea>
                  </div>   
                  <div class="form-group row ">
                        <label for="comment">Comment:</label>
                        <textarea class="form-control" rows="5" id="instruction"></textarea>
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
<script src="<?php echo base_url(); ?>asset/js/instruction.js"></script>
</body>
</html>