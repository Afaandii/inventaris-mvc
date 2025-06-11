<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Tabel Peminjaman Guru</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- /.row -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">DataTable Peminjaman Guru</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Aksi</th>
                        <th>Kode Peminjaman Guru</th>
                        <th>Peminjam</th>
                        <th>Keterangan Peminjaman</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ($data['peminjaman_guru'] as $pinGuru) { ?>
                      <tr>
                        <td><?php echo $i; ?></td>
                        <td>
                          <a href="updatePeminjamanGuru.php?id=<?= $pinGuru["ID_PEMINJAMAN_GURU"]; ?>">Update</a> |
                          <a href="hapusPeminjamanGuru.php?id=<?= $pinGuru["ID_PEMINJAMAN_GURU"]; ?>">Delete</a>
                        </td>
                        <td><?= $pinGuru["KODE_PEMINJAMAN_GURU"]; ?></td>
                        <td><?= $pinGuru["USERNAME_PEMINJAM"]; ?></td>
                        <td><?php echo $pinGuru["KETERANGAN_PEMINJAMAN"]; ?></td>
                      </tr>
                      <?php $i++; ?>
                      <?php }; ?>
                    </tbody>
                  </table>
                  <a href="createPeminjamanGuru.php">Tambah Peminjaman Guru</a>
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