<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url('assets/template/') ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('assets/template/') ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $this->session->userdata('name') ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
							 with font-awesome or any other icon font library -->
					<?php 
						$directoryURI = $_SERVER['REQUEST_URI'];
						$path = parse_url($directoryURI, PHP_URL_PATH);
						$components = explode('/', $path);
						$second_part = $components[2];
					?>
					<!-- <?php if($second_part=="dashboard"){echo "nav-link active";}else{echo "nav-link"; } ?> -->
					<li class="nav-header">MENU UTAMA</li>
		  		<li class="nav-item">
            <a href="<?php echo base_url('dashboard') ?>" class="<?php if($this->uri->segment(2)=="dashboard"){echo "nav-link active";}else{echo "nav-link"; } ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Perizinan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('perizinan') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Perizinan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('perizinan/add_perizinan') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Data</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Pentakziran
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Takziran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/icons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Takziran Aktif</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/timeline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Riwayat Takziran</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Ronda
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Advanced Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editors</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="<?php if($second_part=="auth"){echo "nav-item has-treeview menu-open";}else{echo "nav-item has-treeview"; } ?>">
            <a href="<?php echo base_url('auth') ?>" class="<?php if($second_part=="auth"){echo "nav-link active";}else{echo "nav-link"; } ?>">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Santri
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('auth') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Santri</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('auth/create_user') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Data</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">SISTEM</li>
          <li class="nav-item">
            <a href="<?php echo base_url() ?>auth/logout" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">LOGOUT</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
