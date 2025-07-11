<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12 d-flex justify-content-between align-items-center">
          <h1 class="m-0 font-weight-bold">Manage Tabel Peminjaman</h1>
          <a href="<?= BASEURL ?>/peminjaman/create" class="btn btn-secondary">Tambah Peminjaman</a>
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
                  <table id="example2" class="table table-bordered table-hover table-responsive-md">
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
                          <td width="20%">
                            <a class="btn btn-warning"
                              href="<?= BASEURL ?>/peminjaman/edit/<?= $pinjaman["ID_PEMINJAMAN"]; ?>">Update</a>
                            <a class="btn btn-danger"
                              href="<?= BASEURL ?>/peminjaman/delete/<?= $pinjaman["ID_PEMINJAMAN"]; ?>"
                              onclick="return confirm('Apakah anda yakin ingin menghapus data?')">Delete</a>
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