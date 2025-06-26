<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12 d-flex justify-content-between align-items-center">
          <h1 class="m-0 font-weight-bold">Manage Tabel Peminjaman Siswa</h1>
          <a href="<?= BASEURL ?>/peminjaman_siswa/create" class="btn btn-secondary">Tambah Peminjaman Siswa</a>
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
                  <table id="example2" class="table table-bordered table-hover table-responsive-md">
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
                            <a class="btn btn-warning mr-2"
                              href="<?= BASEURL ?>/peminjaman_siswa/edit/<?= $pinSis["ID_PEMINJAMAN_SISWA"]; ?>">Update</a>
                            <a class="btn btn-danger"
                              href="<?= BASEURL ?>/peminjaman_siswa/delete/<?= $pinSis["ID_PEMINJAMAN_SISWA"]; ?>"
                              onclick="return confirm('Apakah anda yakin menghapus data?')">Delete</a>
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