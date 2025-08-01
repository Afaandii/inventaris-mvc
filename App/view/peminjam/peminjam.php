<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12 d-flex justify-content-between align-items-center">
          <h1 class="m-0 font-weight-bold">Manage Tabel Peminjam</h1>
          <a href="<?= BASEURL ?>/peminjam/create" class="btn btn-secondary">Tambah Peminjam</a>
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
                  <h3 class="card-title">DataTable Peminjam</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover table-responsive-md">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Aksi</th>
                        <th>Kode Peminjam</th>
                        <th>Username Peminjam</th>
                        <th>Password Peminjam</th>
                        <th>Status Peminjam</th>
                        <th>Keterangan Peringatan</th>
                        <th>Image Peminjam</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ($data['peminjam'] as $pinjam) { ?>
                        <tr>
                          <td><?php echo $i; ?></td>
                          <td width="20%">
                            <a class="btn btn-warning mr-2"
                              href="<?= BASEURL ?>/peminjam/edit/<?php echo $pinjam["ID_PEMINJAM"]; ?>">Update</a>
                            <a href="<?= BASEURL ?>/peminjam/delete/<?php echo $pinjam["ID_PEMINJAM"]; ?>"
                              class="btn btn-danger"
                              onclick="return confirm('Apakah anda yakin ingin menghapus data?')">Delete</a>
                          </td>
                          <td><?= $pinjam["KODE_PEMINJAM"]; ?></td>
                          <td><?php echo $pinjam["USERNAME_PEMINJAM"]; ?></td>
                          <td><?php echo $pinjam["PASSWORD_PEMINJAM"]; ?></td>
                          <td><?php echo $pinjam["STATUS_PEMINJAM"]; ?></td>
                          <td><?php echo $pinjam["KETERANGAN_PERINGATAN"]; ?></td>
                          <td><img src="img/<?= $pinjam["IMAGE_PEMINJAM"]; ?>" width="50" height="50"
                              alt="gambar peminjam"></td>
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