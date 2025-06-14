<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Tabel Jenis</h1>
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
                  <table id="example2" class="table table-bordered table-hover">
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
                          <a href="<?= BASEURL ?>/jenis/edit/<?= $jen["ID_JENIS"]; ?>">Update</a> |
                          <a href="hapusJenis.php?id=<?php echo $jen["ID_JENIS"]; ?>">Delete</a>
                        </td>
                        <td><?= $jen["KODE_JENIS"]; ?></td>
                        <td><?php echo $jen["NAMA_JENIS"]; ?></td>
                      </tr>
                      <?php $i++; ?>
                      <?php }; ?>
                    </tbody>
                  </table>
                  <a href="<?= BASEURL ?>/jenis/create">Tambah Jenis</a>
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