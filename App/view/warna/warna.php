<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12 d-flex justify-content-between align-items-center">
          <h1 class="m-0 font-weight-bold">Manage Tabel Warna</h1>
          <a href="<?= BASEURL ?>/warna/create" class="btn btn-secondary">Tambah Warna</a>
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
                  <h3 class="card-title">DataTable Warna</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover table-responsive-md">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Aksi</th>
                        <th>Kode Warna</th>
                        <th>Nama Warna</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ($data['warna'] as $war) { ?>
                      <tr>
                        <td><?php echo $i; ?></td>
                        <td>
                          <a class="btn btn-warning mr-2"
                            href="<?= BASEURL ?>/warna/edit/<?= $war["ID_WARNA"]; ?>">Update</a>
                          <a class="btn btn-danger" href="<?= BASEURL ?>/warna/delete/<?= $war["ID_WARNA"]; ?>"
                            onclick="return confirm('Apakah anda yakin menghapus data?')">Delete</a>
                        </td>
                        <td><?= $war["KODE_WARNA"]; ?></td>
                        <td><?php echo $war["NAMA_WARNA"]; ?></td>
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