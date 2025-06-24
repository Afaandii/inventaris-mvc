<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12 d-flex justify-content-between align-content-center">
          <h1 class="m-0 font-weight-bold">Manage Tabel Kelas Siswa</h1>
          <a href="<?= BASEURL ?>/kelas_siswa/create" class="btn btn-secondary">Tambah Kelas Siswa</a>
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
                  <h3 class="card-title">DataTable Kelas Siswa</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Aksi</th>
                        <th>Kode Kelas Siswa</th>
                        <th>Ruang Kelas Siswa</th>
                        <th>Nama Jurusan</th>
                        <th>Nama Kelas</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ($data['kelas_siswa'] as $kelSis) { ?>
                        <tr>
                          <td><?php echo $i; ?></td>
                          <td>
                            <a class="btn btn-warning mr-2"
                              href="<?= BASEURL ?>/kelas_siswa/edit/<?php echo $kelSis["ID_KELASSISWA"]; ?>">Update</a>
                            <a href="<?= BASEURL ?>/kelas_siswa/delete/<?= $kelSis["ID_KELASSISWA"]; ?>"
                              class="btn btn-danger" onclick="return confirm('Apakah yakin menghapus data?')">Delete</a>
                          </td>
                          <td><?= $kelSis["KODE_KELASSISWA"]; ?></td>
                          <td><?= $kelSis["NAMA_KELASSISWA"]; ?></td>
                          <td><?php echo $kelSis["NAMA_JURUSAN"]; ?></td>
                          <td><?php echo $kelSis["NAMA_KELAS"]; ?></td>
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