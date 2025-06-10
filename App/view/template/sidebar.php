    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="../public/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">Inventaris Barang</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../public/img/foto me.jpg" class="img-circle img-fluid elevation-2" alt="User Image"
              style="height: 40px; width : 40px;">
          </div>
          <div class="info">
            <a href="#" class="d-block">Ahmad Afandi</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-database"></i>
                <p>
                  Master
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= BASEURL; ?>/denda" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Denda</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= BASEURL; ?>/hari" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Hari</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= BASEURL; ?>/pelajaran" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pelajaran</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= BASEURL; ?>/jurusan" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Jurusan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= BASEURL; ?>/kelas" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kelas</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= BASEURL; ?>/kelas_siswa" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kelas Siswa</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= BASEURL; ?>/siswa" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Siswa</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= BASEURL; ?>/jabatan" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Jabatan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= BASEURL; ?>/guru" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Guru</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= BASEURL; ?>/jadwal" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Jadwal</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= BASEURL; ?>/jenis" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Jenis</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= BASEURL; ?>/warna" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Warna</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= BASEURL; ?>/merk" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Merk</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= BASEURL; ?>/peralatan" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Peralatan</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>