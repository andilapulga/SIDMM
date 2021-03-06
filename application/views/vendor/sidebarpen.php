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
          <span class="user-role">Pengawas</span>
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
            <a href="Dashboardpen">
              <i class="fas fa-tachometer-alt"></i>
              <span>Dashboard</span>
            </a>
          </li>

          <li>
            <a href="tambahdesa">
              <i class="fas fa-marker"></i>
              <span>Tambah Desa</span>
            </a>
          </li> 

          <li>
            <a href="<?php echo base_url(); ?>Inputper">
              <i class="fas fa-marker"></i>
              <span>Tambah Perangkat</span>
            </a>
          </li> 

          <li>
            <a href="<?php echo base_url(); ?>Opsidesa">
              <i class="far fa-eye"></i>
              <span>Lihat Laporan</span>
            </a>
          </li>

          <li>
            <a href="<?php echo base_url(); ?>Instruction">
              <i class="far fa-eye"></i>
              <span>Instruksi</span>
            </a>
          </li>

          <li>
            <a href="<?php echo base_url(); ?>login/logout">
              <i class="fas fa-sign-out-alt"></i>
              <span>Log Out</span>
            </a>
          </li> 

      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer">
      <a href="#">
        <i class="fab fa-whatsapp"></i>
      </a>
      <a href="#">
        <i class="fa fa-envelope"></i>
      </a>
     
    
    </div>
  </nav>