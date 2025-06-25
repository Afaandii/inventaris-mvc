<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="font-weight-bold">Form Tambah Guru</h1>
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
            <form action="<?= BASEURL ?>/guru/store" method="post">
              <div class="card-body">
                <div class="form-group">
                  <label for="kode">Kode Guru</label>
                  <input type="text" name="kode" id="kode" readonly class="form-control mb-2"
                    value="<?= $data['kode'] ?>">

                  <label for="peminjam">Peminjam</label>
                  <select class="form-select mb-2" name="peminjam" id="peminjam">
                    <option value="">Pilih Peminjam</option>
                    <?php foreach ($data['peminjam'] as $peminjam): ?>
                    <option value="<?= $peminjam['ID_PEMINJAM'] ?>"><?= $peminjam['ID_PEMINJAM'] ?> -
                      <?= $peminjam['USERNAME_PEMINJAM'] ?></option>
                    <?php endforeach; ?>
                  </select>

                  <label for="jabatan">Jabatan</label>
                  <select class="form-select mb-2" name="jabatan" id="jabatan">
                    <option value="">Pilih Jabatan</option>
                    <?php
                    foreach ($data['jabatan'] as $data) {
                      echo "<option value='{$data['ID_JABATAN']} - {$data['NAMA_JABATAN']}'>
                            {$data['ID_JABATAN']} - {$data['NAMA_JABATAN']}
                            </option>";
                    };
                    ?>
                  </select>

                  <label for="nik">Nik</label>
                  <input type="text" name="nik" class="form-control mb-2" id="nik" placeholder="Masukan Nik">
                  <label for="guru">Nama guru</label>
                  <input type="text" name="guru" class="form-control mb-2" id="guru" placeholder="Masukan nama guru">
                  <label for="alGuru">Alamat Guru</label>
                  <input type="text" name="alGuru" class="form-control mb-2" id="alGuru"
                    placeholder="Masukan alamat guru">
                  <label for="tglGuru">Tanggal Lahir Guru</label>
                  <input type="date" name="tglGuru" class="form-control" id="tglguru"
                    placeholder="Masukan tanggal lahir guru">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                <a href="<?= BASEURL ?>/guru" class="btn btn-info float-md-right">Kembali</a>
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