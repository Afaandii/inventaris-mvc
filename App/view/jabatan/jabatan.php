<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Tabel Jabatan</h1>
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
                  <h3 class="card-title">DataTable Jabatan</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Aksi</th>
                        <th>Kode Jabatan</th>
                        <th>Nama Jabatan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ($data['jabatan'] as $jabs) { ?>
                        <tr>
                          <td><?php echo $i; ?></td>
                          <td>
                            <a href="<?= BASEURL ?>/jabatan/edit/<?= $jabs["ID_JABATAN"]; ?>">Update</a> |
                            <a href="<?= BASEURL ?>/jabatan/delete/<?= $jabs["ID_JABATAN"]; ?>"
                              onclick="return confirm('Apakah anda yakin menghapus data?')">Delete</a>
                          </td>
                          <td><?= $jabs["KODE_JABATAN"]; ?></td>
                          <td><?php echo $jabs["NAMA_JABATAN"]; ?></td>
                        </tr>
                        <?php $i++; ?>
                      <?php }; ?>
                    </tbody>
                  </table>
                  <a href="<?= BASEURL ?>/jabatan/create">Tambah Jabatan</a>
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