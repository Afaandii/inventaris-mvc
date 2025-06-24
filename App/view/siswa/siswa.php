<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12 d-flex justify-content-between align-items-center">
          <h1 class="m-0 font-weight-bold">Manage Tabel Siswa</h1>
          <a href="<?= BASEURL ?>/siswa/create" class="btn btn-secondary">Tambah Siswa</a>
        </div>
      </div>
    </div>
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
                  <h3 class="card-title">DataTable Siswa</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover table-responsive">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Aksi</th>
                        <th>Kode Siswa</th>
                        <th>Nisn</th>
                        <th>Nama Siswa</th>
                        <th>Alamat Siswa</th>
                        <th>Angkatan Siswa</th>
                        <th>Keterangan Siswa</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ($data['siswa'] as $sis) { ?>
                        <tr>
                          <td><?php echo $i; ?></td>
                          <td>
                            <a href="<?= BASEURL ?>/siswa/edit/<?= $sis["ID_SISWA"]; ?>">Update</a> |
                            <a href="<?= BASEURL ?>/siswa/delete/<?= $sis["ID_SISWA"]; ?>"
                              onclick="return confirm('Apakah yakin ingin menghapus data?')">Delete</a>
                          </td>
                          <td><?= $sis["KODE_SISWA"]; ?></td>
                          <td><?php echo $sis["NIS"]; ?></td>
                          <td><?php echo $sis["NAMA_SISWA"]; ?></td>
                          <td><?php echo $sis["ALAMAT_SISWA"]; ?></td>
                          <td><?php echo $sis["ANGKATAN_SISWA"]; ?></td>
                          <td><?php echo $sis["KETERANGAN_SISWA"]; ?></td>
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