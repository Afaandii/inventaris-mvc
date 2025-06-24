<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="font-weight-bold">Form Edit Kelas Siswa</h1>
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
            <form action="<?= BASEURL ?>/kelas_siswa/update" method="post">
              <input type="hidden" name="id" value="<?php echo $data['kelas_sis']["ID_KELASSISWA"]; ?>">
              <div class="card-body">
                <div class="form-group">
                  <label for="kode">Kode Kelas Siswa</label>
                  <input type="text" name="kode" id="kode" value="<?= $data['kelas_sis']['KODE_KELASSISWA'] ?>"
                    class="form-control mb-2" readonly>

                  <label for="jurusan">Jurusan</label>
                  <select class="form-select mb-2" name="jurusan" id="jurusan">
                    <option value="">Pilih Jurusan</option>
                    <?php foreach ($data['jurusan'] as $jurusan): ?>
                      <?php $pilih = ($jurusan['ID_JURUSAN'] == $data['kelas_sis']['ID_JURUSAN']) ? 'selected' : ''; ?>
                      <option value="<?= $jurusan['ID_JURUSAN'] ?>" <?= $pilih ?>>
                        <?= $jurusan['ID_JURUSAN'] ?> - <?= $jurusan['NAMA_JURUSAN'] ?>
                      </option>
                    <?php endforeach; ?>
                  </select>

                  <label for="kelas">Kelas</label>
                  <select class="form-select mb-2" name="kelas" id="kelas">
                    <option value="">Pilih Kelas</option>
                    <?php foreach ($data['kelas'] as $kelas): ?>
                      <?php $pilih = ($kelas['ID_KELAS'] == $data['kelas_sis']['ID_KELAS']) ? 'selected' : ''; ?>
                      <option value="<?= $kelas['ID_KELAS'] ?>" <?= $pilih ?>>
                        <?= $kelas['ID_KELAS'] ?> - <?= $kelas['NAMA_KELAS'] ?>
                      </option>
                    <?php endforeach; ?>
                  </select>

                  <label for="kelsis">Kelas Siswa</label>
                  <input type="text" name="kelasSiswa" class="form-control" id="kelsis"
                    placeholder="Masukan kelas siswa" value="<?php echo $data['kelas_sis']["NAMA_KELASSISWA"]; ?>">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                <a href="<?= BASEURL ?>/kelas_siswa" class="btn btn-info float-md-right">Kembali</a>
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