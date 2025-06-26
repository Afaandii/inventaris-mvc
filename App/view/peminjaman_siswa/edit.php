<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="font-weight-bold">Form Edit Kelas</h1>
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
            <form action="<?= BASEURL ?>/peminjaman_siswa/update" method="post">
              <input type="hidden" name="id" value="<?php echo $data['pin_sis']["ID_PEMINJAMAN_SISWA"]; ?>">
              <div class="card-body">
                <div class="form-group">
                  <label for="kode">Kode Peminjaman Siswa</label>
                  <input type="text" name="kode" id="kode" value="<?= $data['pin_sis']['KODE_PEMINJAMAN_SISWA'] ?>"
                    class="form-control mb-2">

                  <label for="peminjam">Peminjam</label>
                  <select class="form-select mb-2" name="peminjam" id="peminjam">
                    <?php foreach ($data['peminjam'] as $peminjam): ?>
                    <?php $pilih = ($peminjam['ID_PEMINJAM'] == $data['pin_sis']['ID_PEMINJAM']) ? 'selected' : ''; ?>
                    <option value="<?= $peminjam['ID_PEMINJAM'] ?>" <?= $pilih ?>>
                      <?= $peminjam['ID_PEMINJAM'] ?> - <?= $peminjam['USERNAME_PEMINJAM'] ?>
                    </option>
                    <?php endforeach; ?>
                  </select>

                  <label for="mapel">Mata Pelajaran</label>
                  <input type="text" name="mapel" class="form-control mb-2" id="mapel"
                    placeholder="Masukan Mata Pelajaran" value="<?php echo $data['pin_sis']["MATA_PELAJARAN"]; ?>">
                  <label for="gurPe">Guru Pengajar</label>
                  <input type="text" name="guru" class="form-control" id="gurPe" placeholder="Masukan Guru Pengajar"
                    value="<?php echo $data['pin_sis']["GURU_PENGAJAR"]; ?>">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                <a href="<?= BASEURL ?>/peminjaman_siswa" class="btn btn-info float-md-right">Kembali</a>
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