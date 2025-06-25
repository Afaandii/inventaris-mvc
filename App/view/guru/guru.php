<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12 d-flex justify-content-between align-items-center">
          <h1 class="m-0 font-weight-bold">Manage Tabel Guru</h1>
          <a class="btn btn-secondary" href="<?= BASEURL ?>/guru/create">Tambah Guru</a>
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
                  <h3 class="card-title">DataTable Guru</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover table-responsive-md">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Aksi</th>
                        <th>Kode Guru</th>
                        <th>NIK</th>
                        <th>Nama Guru</th>
                        <th>Alamat Guru</th>
                        <th>Tanggal Lahir Guru</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ($data['guru'] as $gur) { ?>
                        <tr>
                          <td><?php echo $i; ?></td>
                          <td>
                            <a class="btn btn-warning mr-2"
                              href="<?= BASEURL ?>/guru/edit/<?php echo $gur["ID_GURU"]; ?>">update</a>
                            <a class="btn btn-danger" href="<?= BASEURL ?>/guru/delete/<?php echo $gur["ID_GURU"]; ?> "
                              onclick="return confirm('Apakah Yakin Menghapus Data?')">Delete</a>
                          </td>
                          <td><?= $gur["KODE_GURU"]; ?></td>
                          <td><?php echo $gur["NIK"]; ?></td>
                          <td><?php echo $gur["NAMA_GURU"]; ?></td>
                          <td><?php echo $gur["ALAMAT_GURU"]; ?></td>
                          <td><?php echo $gur["TANGGALLAHIR_GURU"]; ?></td>
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