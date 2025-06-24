<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12 d-flex justify-content-between align-items-center">
          <h1 class="m-0 font-weight-bold">Manage Tabel Denda</h1>
          <a href="<?= BASEURL ?>/denda/create" class="btn btn-secondary">Tambah Denda</a>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Main row -->

      <?php Flasher::flash(); ?>

      <!-- /.row -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">DataTable Denda</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover table-responsive-md">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Aksi</th>
                        <th>Kode Denda</th>
                        <th>Denda</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ($data['denda'] as $den) { ?>
                        <tr>
                          <td><?php echo $i; ?></td>
                          <td>
                            <a href="<?= BASEURL ?>/denda/edit/<?php echo $den["ID_DENDA"]; ?>"
                              class="btn btn-warning btn-md mr-2 text-decoration-none">Update</a>
                            <a href="<?= BASEURL ?>/denda/delete/<?php echo $den["ID_DENDA"]; ?>"
                              onclick="return confirm('Anda Yakin Mau Hapus Data?')"
                              class="btn btn-danger btn-md text-decoration-none">Delete</a>
                          </td>
                          <td><?php echo $den["KODE_DENDA"]; ?></td>
                          <td><?php echo $den["DENDA"]; ?></td>
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