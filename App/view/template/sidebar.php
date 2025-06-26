    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="<?= BASEURL ?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">Inventaris Barang</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?= BASEURL ?>/img/foto me.jpg" class="img-circle img-fluid elevation-2" alt="User Image"
              style="height: 40px; width : 40px;">
          </div>
          <div class="info dropdown">
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
            <?php
            $baseFolder = 'inventaris_mvc/public/';
            $currentUrl = $_SERVER['REQUEST_URI'];
            $currentPath = parse_url($currentUrl, PHP_URL_PATH);
            $relativePath = str_replace($baseFolder, '', $currentPath);

            $isTransaksiActive =
              $relativePath === '/pemesanan' ||
              $relativePath === '/peminjam' ||
              $relativePath === '/peminjaman' ||
              $relativePath === '/perbaikan' ||
              $relativePath === '/peminjaman_siswa' ||
              $relativePath === '/peminjaman_guru';

            // Untuk menu Master
            $isMasterActive =
              strpos($currentUrl, '/denda') !== false ||
              strpos($currentUrl, '/hari') !== false ||
              strpos($currentUrl, '/pelajaran') !== false ||
              strpos($currentUrl, '/jurusan') !== false ||
              strpos($currentUrl, '/kelas') !== false ||
              strpos($currentUrl, '/kelas_siswa') !== false ||
              strpos($currentUrl, '/siswa') !== false ||
              strpos($currentUrl, '/jabatan') !== false ||
              strpos($currentUrl, '/guru') !== false ||
              strpos($currentUrl, '/jadwal') !== false ||
              strpos($currentUrl, '/jenis') !== false ||
              strpos($currentUrl, '/warna') !== false ||
              strpos($currentUrl, '/merk') !== false ||
              strpos($currentUrl, '/peralatan') !== false;
            ?>

            <li class="nav-item <?= $isTransaksiActive ? 'menu-open' : '' ?>">
              <a href="#" class="nav-link <?= $isTransaksiActive ? 'active' : '' ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Transaksi
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= BASEURL; ?>/pemesanan"
                    class="nav-link <?= $relativePath === '/pemesanan' ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pemesanan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= BASEURL; ?>/peminjam"
                    class="nav-link <?= $relativePath === '/peminjam' ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Peminjam</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= BASEURL; ?>/peminjaman"
                    class="nav-link <?= $relativePath === '/peminjaman' ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Peminjaman</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= BASEURL; ?>/perbaikan"
                    class="nav-link <?= $relativePath === '/perbaikan' ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Perbaikan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= BASEURL; ?>/peminjaman_siswa"
                    class="nav-link <?= $relativePath === '/peminjaman_siswa' ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Peminjaman Siswa</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= BASEURL; ?>/peminjaman_guru"
                    class="nav-link <?= $relativePath === '/peminjaman_guru' ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Peminjaman Guru</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item <?= $isMasterActive ? 'menu-open' : '' ?>">
              <a href="#" class="nav-link <?= $isMasterActive ? 'active' : '' ?>">
                <i class="nav-icon fas fa-database"></i>
                <p>
                  Master
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= BASEURL; ?>/denda"
                    class="nav-link <?= strpos($currentUrl, '/denda') !== false ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Denda</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= BASEURL; ?>/hari"
                    class="nav-link <?= strpos($currentUrl, '/hari') !== false ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Hari</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= BASEURL; ?>/pelajaran"
                    class="nav-link <?= strpos($currentUrl, '/pelajaran') !== false ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pelajaran</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= BASEURL; ?>/jurusan"
                    class="nav-link <?= strpos($currentUrl, '/jurusan') !== false ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Jurusan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= BASEURL; ?>/kelas"
                    class="nav-link <?= strpos($currentUrl, '/kelas') !== false ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kelas</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= BASEURL; ?>/kelas_siswa"
                    class="nav-link <?= strpos($currentUrl, '/kelas_siswa') !== false ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kelas Siswa</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= BASEURL; ?>/siswa"
                    class="nav-link <?= strpos($currentUrl, '/siswa') !== false ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Siswa</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= BASEURL; ?>/jabatan"
                    class="nav-link <?= strpos($currentUrl, '/jabatan') !== false ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Jabatan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= BASEURL; ?>/guru"
                    class="nav-link <?= strpos($currentUrl, '/guru') !== false ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Guru</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= BASEURL; ?>/jadwal"
                    class="nav-link <?= strpos($currentUrl, '/jadwal') !== false ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Jadwal</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= BASEURL; ?>/jenis"
                    class="nav-link <?= strpos($currentUrl, '/jenis') !== false ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Jenis</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= BASEURL; ?>/warna"
                    class="nav-link <?= strpos($currentUrl, '/warna') !== false ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Warna</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= BASEURL; ?>/merk"
                    class="nav-link <?= strpos($currentUrl, '/merk') !== false ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Merk</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= BASEURL; ?>/peralatan"
                    class="nav-link <?= strpos($currentUrl, '/peralatan') !== false ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Peralatan</p>
                  </a>
                </li>
              </ul>
            <li class="nav-item">
              <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Manajemen Akun
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
              </ul>
            </li>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>