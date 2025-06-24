<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="font-weight-bold">Form Edit Siswa</h1>
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
            <form action="<?= BASEURL ?>/siswa/update" method="post">
              <input type="hidden" name="id" id="id" value="<?= $data['siswa']['ID_SISWA'] ?>">
              <div class="card-body">
                <div class="form-group">
                  <label for="kode">Kode Siswa</label>
                  <input type="text" id="kode" name="kode" value="<?= $data['siswa']['KODE_SISWA'] ?>"
                    class="form-control mb-2" readonly>
                  <label for="peminjam">Peminjam</label>
                  <select class="form-select mb-2" name="peminjam" id="peminjam">
                    <?php foreach ($data['peminjam'] as $peminjam): ?>
                      <?php $pilih = ($peminjam['ID_PEMINJAM'] == $data['siswa']['ID_PEMINJAM']) ? 'selected' : ''; ?>
                      <option value="<?= $peminjam['ID_PEMINJAM'] ?>" <?= $pilih ?>>
                        <?= $peminjam['ID_PEMINJAM'] ?> - <?= $peminjam['USERNAME_PEMINJAM'] ?>
                      </option>
                    <?php endforeach; ?>
                  </select>
                  <label for="kelsis">Kelas Siswa</label>
                  <select class="form-select mb-2" name="kelsis" id="kelsis">
                    <?php foreach ($data['kelsis'] as $kelsis): ?>
                      <?php $pilih = ($kelsis['ID_KELASSISWA'] == $data['siswa']['ID_KELASSISWA']) ? 'selected' : ''; ?>
                      <option value="<?= $kelsis['ID_KELASSISWA'] ?>" <?= $pilih ?>>
                        <?= $kelsis['ID_KELASSISWA'] ?> - <?= $kelsis['NAMA_KELASSISWA'] ?>
                      </option>
                    <?php endforeach; ?>
                  </select>
                  <label for="nis">Nis Siswa</label>
                  <input type="number" name="nis" class="form-control mb-2" id="nis" placeholder="Masukan Nis Siswa"
                    value="<?= $data['siswa']['NIS'] ?>">
                  <label for="namSis">Nama Siswa</label>
                  <input type="text" name="nama" class="form-control mb-2" id="namSis" placeholder="Masukan Nama Siswa"
                    value="<?= $data['siswa']['NAMA_SISWA'] ?>">
                  <label for="alSis">Alamat Siswa</label>
                  <input type="text" name="alamat" class="form-control mb-2" id="alSis"
                    placeholder="Masukan Alamat Siswa" value="<?= $data['siswa']['ALAMAT_SISWA'] ?>">
                  <label for="angSis">Angkatan Siswa</label>
                  <input type="number" name="angkatan" class="form-control mb-2" id="angSis"
                    placeholder="Masukan Angkatan Siswa" value="<?= $data['siswa']['ANGKATAN_SISWA'] ?>">
                  <label for="ketSis">Keterangan Siswa</label>
                  <input type="text" name="keterangan" class="form-control" id="ketSis"
                    placeholder="Masukan Ketereangan Siswa" value="<?= $data['siswa']['KETERANGAN_SISWA'] ?>">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                <a href="<?= BASEURL ?>/siswa" class="btn btn-info float-md-right">Kembali</a>
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