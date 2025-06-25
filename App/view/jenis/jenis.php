<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12 d-flex justify-content-between align-items-center">
          <h1 class="m-0 font-weight-bold">Manage Tabel Jenis</h1>
          <a href="<?= BASEURL ?>/jenis/create" class="btn btn-secondary">Tambah Jenis</a>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <section class="content">
        <div class="container-fluid">
          <?php Flasher::flash() ?>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">DataTable Jenis</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover table-responsive-md">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Aksi</th>
                        <th>Kode Jenis</th>
                        <th>Nama Jenis</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ($data['jenis'] as $jen) { ?>
                        <tr>
                          <td><?php echo $i; ?></td>
                          <td>
                            <a class="btn btn-warning mr-2"
                              href="<?= BASEURL ?>/jenis/edit/<?= $jen["ID_JENIS"]; ?>">Update</a>
                            <a href="<?= BASEURL ?>/jenis/delete/<?php echo $jen["ID_JENIS"]; ?>" class="btn btn-danger"
                              onclick="return confirm('Apakah anda yakin menghapus data?')">Delete</a>
                          </td>
                          <td><?= $jen["KODE_JENIS"]; ?></td>
                          <td><?php echo $jen["NAMA_JENIS"]; ?></td>
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