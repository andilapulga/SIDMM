<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php $this->load->view('vendor/src');?>
    <title>login</title>
</head>
<body>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"><div class="card-header bg-dark text-white text-center">
                <h3>SILAHKAN LOGIN</h3>
            </div>
            <div class="card-body">
                <br><br>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                    <div class="container">
                                
                    <form action="<?php echo base_url('login/aksi_login'); ?>" method="post">	
                                    <div class="form-group">
                                    <label for="email">Username:</label>
                                    <input type="text" class="form-control" id="email" placeholder="Enter email" name="username">
                                    </div>
                                    <div class="form-group">
                                    <label for="pwd">Password:</label>
                                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                                    </div>
                                    <div class="form-group form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="remember"> Remember me
                                    </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Masuk</button>
                                </form>
                                </div>

                    </div>
                    <div class="col-md-1"></div>

                </div>
                <br><br>
            </div>
            </div>
            </div>
        <div class="col-md-4"></div>
    </div>
</body>
</html>