<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#">sid meurah mulia</a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="<?php echo base_url(); ?>asset/images/logo_AU.png">
       
        </div>
        <div class="user-info">
          <span class="user-name">
            <strong>
            <?php 
            echo $_SESSION['nama'];
            ?>
          
            </strong>
          </span>
          <span class="user-role">Perangkat</span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>online</span>
          </span>
        </div>
      </div>
      <!-- sidebar-header  -->
    
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>
          <li>
            <a href="dashboard">
              <i class="fas fa-tachometer-alt"></i>
              <span>Dashboard</span>
            </a>
          </li>

          <li>
            <a href="<?php echo base_url(); ?>input">
              <i class="fas fa-marker"></i>
              <span>Buat Laporan</span>
            </a>
          </li> 

          <li>
            <a href="#">
              <i class="far fa-eye"></i>
              <span>Lihat Laporan</span>
            </a>
          </li>  

          <li>
            <a href="login/Logout">
              <i class="fas fa-sign-out-alt"></i>
              <span>Log Out</span>
            </a>
          </li>   

      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer">
      <a href="https://web.whatsapp.com/">
        <i class="fab fa-whatsapp"></i>
      </a>
      <a href="https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&flowEntry=ServiceLogin">
        <i class="fa fa-envelope"></i>
      </a>
     
    
    </div>
  </nav>