<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12 d-flex justify-content-between align-items-center">
          <h1 class="m-0 font-weight-bold">Manage Tabel Pelajaran</h1>
          <a class="btn btn-secondary" href="<?= BASEURL ?>/pelajaran/create">Tambah Pelajaran</a>
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
                  <h3 class="card-title">DataTable Pelajaran</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Aksi</th>
                        <th>Kode Pelajaran</th>
                        <th>Mata Pelajaran</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ($data['pelajaran'] as $mapel) { ?>
                        <tr>
                          <td><?php echo $i; ?></td>
                          <td>
                            <a class="btn btn-warning mr-2"
                              href="<?= BASEURL ?>/pelajaran/edit/<?= $mapel["ID_PELAJARAN"]; ?>">Update</a>
                            <a class="btn btn-danger"
                              href="<?= BASEURL ?>/pelajaran/delete/<?php echo $mapel["ID_PELAJARAN"]; ?>"
                              onclick="return confirm('Apakah yakin menghapus data?')">Delete</a>
                          </td>
                          <td><?= $mapel["KODE_PELAJARAN"]; ?></td>
                          <td><?php echo $mapel["NAMA_PELAJARAN"]; ?></td>
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