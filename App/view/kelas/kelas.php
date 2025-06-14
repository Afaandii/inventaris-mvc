<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Tabel Kelas</h1>
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
                  <h3 class="card-title">DataTable Kelas</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Aksi</th>
                        <th>Kode Kelas</th>
                        <th>Nama Kelas</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ($data['kelas'] as $kel) { ?>
                      <tr>
                        <td><?php echo $i; ?></td>
                        <td>
                          <a href="<?= BASEURL ?>/kelas/edit/<?php echo $kel["ID_KELAS"]; ?>">Update</a> |
                          <a href="<?= BASEURL ?>/kelas/delete/<?php echo $kel["ID_KELAS"]; ?>"
                            onclick="return confirm('Apakah anda yakin menghapus data?')">Delete</a>
                        </td>
                        <td><?= $kel["KODE_KELAS"]; ?></td>
                        <td><?php echo $kel["NAMA_KELAS"]; ?></td>
                      </tr>
                      <?php $i++; ?>
                      <?php }; ?>
                    </tbody>
                  </table>
                  <a href="<?= BASEURL ?>/kelas/create">Tambah Kelas</a>
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