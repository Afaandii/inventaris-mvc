<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Peminjaman Siswa</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <?php Flasher::flash() ?>
      <!-- /.row -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">DataTable Peminjaman Siswa</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Aksi</th>
                        <th>Kode Peminjaman Siswa</th>
                        <th>Peminjam</th>
                        <th>Mata Pelajaran</th>
                        <th>Guru Pengajar</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ($data['peminjaman_siswa'] as $pinSis) { ?>
                      <tr>
                        <td><?php echo $i; ?></td>
                        <td>
                          <a
                            href="<?= BASEURL ?>/peminjaman_siswa/edit/<?= $pinSis["ID_PEMINJAMAN_SISWA"]; ?>">Update</a>
                          |
                          <a href="hapusPeminjamanSiswa.php?id=<?= $pinSis["ID_PEMINJAMAN_SISWA"]; ?>">Delete</a>
                        </td>
                        <td><?= $pinSis["KODE_PEMINJAMAN_SISWA"]; ?></td>
                        <td><?= $pinSis["USERNAME_PEMINJAM"]; ?></td>
                        <td><?php echo $pinSis["MATA_PELAJARAN"]; ?></td>
                        <td><?php echo $pinSis["GURU_PENGAJAR"]; ?></td>
                      </tr>
                      <?php $i++; ?>
                      <?php }; ?>
                    </tbody>
                  </table>
                  <a href="<?= BASEURL ?>/peminjaman_siswa/create">Tambah Peminjaman Siswa</a>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
      </section>
    </div>
    <!--/. container-fluid -->
  </section>
  <!-- /.content -->
</div>