<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah Jadwal</h1>
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
            <form action="<?= BASEURL ?>/jadwal/update" method="post">
              <input type="hidden" name="id" value="<?php echo $data['jadwal']["ID_JADWAL"]; ?>">
              <div class="card-body">
                <div class="form-group">
                  <label for="kode">Kode Jadwal</label>
                  <input type="text" id="kode" name="kode" value="<?= $data['jadwal']['KODE_JADWAL']; ?>" readonly>
                  <br>
                  <label for="kelsis">Kelas Siswa</label>
                  <select name="kelsis" id="kelsis">
                    <?php foreach ($data['kelsis'] as $kelsis): ?>
                    <?php $pilih = ($kelsis['ID_KELASSISWA'] == $data['jadwal']['ID_KELASSISWA']) ? 'selected' : ''; ?>
                    <option value="<?= $kelsis['ID_KELASSISWA'] ?>" <?= $pilih ?>>
                      <?= $kelsis['ID_KELASSISWA'] ?> - <?= $kelsis['NAMA_KELASSISWA'] ?>
                    </option>
                    <?php endforeach; ?>
                  </select>
                  <br>
                  <label for="mapel">Pelajaran</label>
                  <select name="mapel" id="mapel">
                    <?php foreach ($data['mapel'] as $mapel): ?>
                    <?php $pilih = ($mapel['ID_PELAJARAN'] == $data['jadwal']['ID_PELAJARAN']) ? 'selected' : ''; ?>
                    <option value="<?= $mapel['ID_PELAJARAN'] ?>" <?= $pilih ?>>
                      <?= $mapel['ID_PELAJARAN'] ?> - <?= $mapel['NAMA_PELAJARAN'] ?>
                    </option>
                    <?php endforeach; ?>
                  </select>
                  <br>
                  <label for="guru">Guru</label>
                  <select name="guru" id="guru">
                    <?php foreach ($data['guru'] as $guru): ?>
                    <?php $pilih = ($guru['ID_GURU'] == $data['jadwal']['ID_GURU']) ? 'selected' : ''; ?>
                    <option value="<?= $guru['ID_GURU'] ?>" <?= $pilih ?>>
                      <?= $guru['ID_GURU'] ?> - <?= $guru['NAMA_GURU'] ?>
                    </option>
                    <?php endforeach; ?>
                  </select>
                  <br>
                  <label for="hari">Hari</label>
                  <select name="hari" id="hari">
                    <?php foreach ($data['hari'] as $hari): ?>
                    <?php $pilih = ($hari['ID_HARI'] == $data['jadwal']['ID_HARI']) ? 'selected' : ''; ?>
                    <option value="<?= $hari['ID_HARI'] ?>" <?= $pilih ?>>
                      <?= $hari['ID_HARI'] ?> - <?= $hari['NAMA_HARI'] ?>
                    </option>
                    <?php endforeach; ?>
                  </select>
                  <br>
                  <label for="jamsuk">Jam Masuk</label>
                  <input type="time" name="jamsuk" class="form-control" id="jamsuk" placeholder="Masukan Jam Masuk"
                    value="<?= $data['jadwal']['JAM_MASUK'] ?>">
                  <label for="jamkel">Jam Keluar</label>
                  <input type="time" name="jamkel" class="form-control" id="jakel" placeholder="Masukan Jam Keluar"
                    value="<?= $data['jadwal']['JAM_KELUAR'] ?>">
                  <label for="semester">Semester</label>
                  <input type="text" name="semester" class="form-control" id="semester" placeholder="Masukan Semester"
                    value="<?= $data['jadwal']['SEMESTER'] ?>">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary">Tambah Jadwal</button>
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