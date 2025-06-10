<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Tabel Perbaikan</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- /.row -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">DataTable Perbaikan</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Aksi</th>
                        <th>Kode Perbaikan</th>
                        <th>Tanggal Perbaikan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ($data['perbaikan'] as $per) { ?>
                      <tr>
                        <td><?php echo $i; ?></td>
                        <td>
                          <a href="updatePerbaikan.php?id=<?= $per["ID_PERBAIKAN"]; ?>">Update</a> |
                          <a href="hapusPerbaikan.php?id=<?= $per["ID_PERBAIKAN"]; ?>">Delete</a>
                        </td>
                        <td><?= $per["KODE_PERBAIKAN"]; ?></td>
                        <td><?php echo $per["TANGGAL_PERBAIKAN"]; ?></td>
                      </tr>
                      <?php $i++; ?>
                      <?php }; ?>
                    </tbody>
                  </table>
                  <a href="createPerbaikan.php">Tambah Perbaikan</a>
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