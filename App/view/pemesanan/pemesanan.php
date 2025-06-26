<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12 d-flex justify-content-between align-items-center">
          <h1 class="m-0 font-weight-bold">Manage Tabel Pemesanan</h1>
          <a href="<?= BASEURL ?>/pemesanan/create" class="btn btn-secondary">Tambah Pemesanan</a>
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
                  <h3 class="card-title">DataTable Pemesanan</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Aksi</th>
                        <th>Kode Pemesanan</th>
                        <th>Username Peminjam</th>
                        <th>Status Pemesanan</th>
                        <th>Tanggal Pemesanan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ($data['pemesanan'] as $pesan) { ?>
                        <tr>
                          <td><?php echo $i; ?></td>
                          <td>
                            <a class="btn btn-warning mr-2"
                              href="<?= BASEURL ?>/pemesanan/edit/<?php echo $pesan["ID_PEMESANAN"]; ?>">Update</a>
                            <a class="btn btn-danger"
                              href="<?= BASEURL ?>/pemesanan/delete/<?php echo $pesan["ID_PEMESANAN"]; ?>"
                              onclick="return confirm('Apakah anda yakin menghapus data?')">Delete</a>
                          </td>
                          <td><?= $pesan["KODE_PEMESANAN"]; ?></td>
                          <td><?= $pesan['USERNAME_PEMINJAM']; ?></td>
                          <td><?php echo $pesan["STATUS_PEMESANAN"]; ?></td>
                          <td><?php echo $pesan["TANGGAL_PEMESANAN"]; ?></td>
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