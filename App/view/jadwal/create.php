<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="font-weight-bold">Form Tambah Jadwal</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <!-- /.card-header -->
            <!-- form start -->
            <form action="<?= BASEURL ?>/jadwal/store" method="post">
              <div class="card-body">
                <div class="form-group">
                  <label for="kode">Kode Jadwal</label>
                  <input class="form-control mb-2" type="text" id="kode" name="kode" value="<?= $data['kode']; ?>"
                    readonly>

                  <label for="kelsis">Kelas Siswa</label>
                  <select class="form-select mb-2" name="kelsis" id="kelsis">
                    <option value="">Pilih Kelas Siswa</option>
                    <?php foreach ($data['kelsis'] as $kelsis): ?>
                    <option value="<?= $kelsis['ID_KELASSISWA'] ?>">
                      <?= $kelsis['ID_KELASSISWA'] ?> - <?= $kelsis['NAMA_KELASSISWA'] ?>
                    </option>
                    <?php endforeach; ?>
                  </select>

                  <label for="mapel">Pelajaran</label>
                  <select class="form-select mb-2" name="mapel" id="mapel">
                    <option value="">Pilih Pelajaran</option>
                    <?php foreach ($data['mapel'] as $mapel): ?>
                    <option value="<?= $mapel['ID_PELAJARAN'] ?>">
                      <?= $mapel['ID_PELAJARAN'] ?> - <?= $mapel['NAMA_PELAJARAN'] ?>
                    </option>
                    <?php endforeach; ?>
                  </select>

                  <label for="guru">Guru</label>
                  <select class="form-select mb-2" name="guru" id="guru">
                    <option value="">Pilih Guru</option>
                    <?php foreach ($data['guru'] as $guru): ?>
                    <option value="<?= $guru['ID_GURU'] ?>">
                      <?= $guru['ID_GURU'] ?> - <?= $guru['NAMA_GURU'] ?>
                    </option>
                    <?php endforeach; ?>
                  </select>

                  <label for="hari">Hari</label>
                  <select class="form-select mb-2" name="hari" id="hari">
                    <option value="">Pilih Hari</option>
                    <?php foreach ($data['hari'] as $hari): ?>
                    <option value="<?= $hari['ID_HARI'] ?>">
                      <?= $hari['ID_HARI'] ?> - <?= $hari['NAMA_HARI'] ?>
                    </option>
                    <?php endforeach; ?>
                  </select>

                  <label for="jamsuk">Jam Masuk</label>
                  <input type="time" name="jamsuk" class="form-control mb-2" id="jamsuk"
                    placeholder="Masukan Jam Masuk">
                  <label for="jamkel">Jam Keluar</label>
                  <input type="time" name="jamkel" class="form-control mb-2" id="jakel"
                    placeholder="Masukan Jam Keluar">
                  <label for="semester">Semester</label>
                  <input type="text" name="semester" class="form-control" id="semester" placeholder="Masukan Semester">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                <a href="<?= BASEURL ?>/jadwal" class="btn btn-info float-md-right">Kembali</a>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>