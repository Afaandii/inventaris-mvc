<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12 d-flex justify-content-between align-items-center">
          <h1 class="m-0 font-weight-bold">Manage Tabel Hari</h1>
          <a href="<?= BASEURL ?>/hari/create" class="btn btn-secondary">Tambah Hari</a>
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
                  <h3 class="card-title">DataTable Hari</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Aksi</th>
                        <th>Kode Hari</th>
                        <th>Nama Hari</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ($data['hari'] as $har) { ?>
                        <tr>
                          <td><?php echo $i; ?></td>
                          <td>
                            <a class="btn btn-warning mr-2"
                              href="<?= BASEURL ?>/hari/edit/<?= $har["ID_HARI"]; ?>">Update</a>
                            <a class="btn btn-danger" href="<?= BASEURL ?>/hari/delete/<?= $har["ID_HARI"]; ?>"
                              onclick="return confirm('Apakah anda yakin menghapus data?')">Delete</a>
                          </td>
                          <td><?= $har["KODE_HARI"]; ?></td>
                          <td><?php echo $har["NAMA_HARI"]; ?></td>
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