<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Tabel Jurusan</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <?php Flasher::flash(); ?>
      <!-- /.row -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">DataTable Jurusan</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Aksi</th>
                        <th>Kode Jurusan</th>
                        <th>Nama Jurusan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ($data['jurusan'] as $jur) { ?>
                        <tr>
                          <td><?php echo $i; ?></td>
                          <td>
                            <a href="<?= BASEURL ?>/jurusan/edit/<?php echo $jur["ID_JURUSAN"]; ?>">Update</a> |
                            <a href="<?= BASEURL ?>/jurusan/delete/<?php echo $jur["ID_JURUSAN"]; ?>"
                              onclick="return confirm('Apakah anda yakin menghapus data?')">Delete</a>
                          </td>
                          <td><?= $jur["KODE_JURUSAN"]; ?></td>
                          <td><?php echo $jur["NAMA_JURUSAN"]; ?></td>
                        </tr>
                        <?php $i++; ?>
                      <?php }; ?>
                    </tbody>
                  </table>
                  <a href="<?= BASEURL ?>/jurusan/create">Tambah Jurusan</a>
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