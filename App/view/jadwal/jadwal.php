<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12 d-flex justify-content-between align-items-center">
          <h1 class="m-0 font-weight-bold">Manage Tabel Jadwal</h1>
          <a class="btn btn-secondary" href="<?= BASEURL ?>/jadwal/create">Tambah Jadwal</a>
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
                  <h3 class="card-title">DataTable Jadwal</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover table-responsive-md">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Aksi</th>
                        <th>Kode Jadwal</th>
                        <th>Ruang Kelas Siswa</th>
                        <th>Pelajaran</th>
                        <th>Guru</th>
                        <th>Hari</th>
                        <th>Jam Masuk</th>
                        <th>Jam Keluar</th>
                        <th>Semester</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ($data['jadwal'] as $jad) { ?>
                        <tr>
                          <td><?php echo $i; ?></td>
                          <td width="20%">
                            <a class="btn btn-warning mr-2"
                              href="<?= BASEURL ?>/jadwal/edit/<?php echo $jad["ID_JADWAL"]; ?>">Update</a>
                            <a class="btn btn-danger" href="<?= BASEURL ?>/jadwal/delete/<?php echo $jad["ID_JADWAL"]; ?>"
                              onclick="return confirm('Apakah anda yakin menghapus jadwal?')">Delete</a>
                          </td>
                          <td><?= $jad["KODE_JADWAL"]; ?></td>
                          <td><?= $jad["NAMA_KELASSISWA"]; ?></td>
                          <td><?= $jad["NAMA_PELAJARAN"]; ?></td>
                          <td><?= $jad["NAMA_GURU"]; ?></td>
                          <td><?= $jad["NAMA_HARI"]; ?></td>
                          <td><?php echo $jad["JAM_MASUK"]; ?></td>
                          <td><?php echo $jad["JAM_KELUAR"]; ?></td>
                          <td><?php echo $jad["SEMESTER"]; ?></td>
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