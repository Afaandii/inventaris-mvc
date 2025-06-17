<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Tabel Peminjaman</h1>
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
                  <h3 class="card-title">DataTable Peminjaman</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Aksi</th>
                        <th>Kode Peminjaman</th>
                        <th>Peminjam</th>
                        <th>Guru</th>
                        <th>Denda</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Kembali</th>
                        <th>Tanggal Pengembalian</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ($data['peminjaman'] as $pinjaman) { ?>
                        <tr>
                          <td><?php echo $i; ?></td>
                          <td>
                            <a href="updatePeminjaman.php?id=<?= $pinjaman["ID_PEMINJAMAN"]; ?>">Update</a> |
                            <a href="hapusPeminjaman.php?id=<?= $pinjaman["ID_PEMINJAMAN"]; ?>">Delete</a>
                          </td>
                          <td><?= $pinjaman["KODE_PEMINJAMAN"]; ?></td>
                          <td><?= $pinjaman['USERNAME_PEMINJAM']; ?></td>
                          <td><?= $pinjaman['NAMA_GURU']; ?></td>
                          <td><?= $pinjaman['DENDA']; ?></td>
                          <td><?php echo $pinjaman["TANGGAL_PEMINJAMAN"]; ?></td>
                          <td><?php echo $pinjaman["TANGGAL_KEMBALI"]; ?></td>
                          <td><?php echo $pinjaman["TANGGAL_PENGEMBALIAN"]; ?></td>
                        </tr>
                        <?php $i++; ?>
                      <?php }; ?>
                    </tbody>
                  </table>
                  <a href="<?= BASEURL ?>/peminjaman/create">Tambah Peminjaman</a>
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