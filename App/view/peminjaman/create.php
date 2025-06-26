<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="font-weight-bold">Form Tambah Peminjaman</h1>
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
            <form action="<?= BASEURL ?>/peminjaman/store" method="post">
              <div class="card-body">
                <div class="form-group">
                  <label for="kode">Kode Peminjaman</label>
                  <input type="text" id="kode" value="<?= $data['kode']; ?>" name="kode" readonly
                    class="form-control mb-2">

                  <label for="peminjam">Peminjam</label>
                  <select class="form-select mb-2" name="peminjam" id="peminjam">
                    <option value="">Pilih Peminjam</option>
                    <?php foreach ($data['peminjam'] as $peminjam): ?>
                      <option value="<?= $peminjam['ID_PEMINJAM'] ?>">
                        <?= $peminjam['ID_PEMINJAM'] ?> - <?= $peminjam['USERNAME_PEMINJAM'] ?>
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

                  <label for="denda">Denda</label>
                  <select class="form-select mb-2" name="denda" id="denda">
                    <option value="">Pilih Denda</option>
                    <?php foreach ($data['denda'] as $denda): ?>
                      <option value="<?= $denda['ID_DENDA'] ?>">
                        <?= $denda['ID_DENDA'] ?> - <?= $denda['DENDA'] ?>
                      </option>
                    <?php endforeach; ?>
                  </select>

                  <label for="tglPeminjaman">Tanggal Peminjaman</label>
                  <input type="datetime-local" name="tgl_pemin" class="form-control mb-2" id="tglPeminjaman"
                    placeholder="Masukan Tanggal Peminjaman">
                  <label for="tglKembali">Tanggal Kembali</label>
                  <input type="date" name="tgl_kem" class="form-control mb-2" id="tglKembali"
                    placeholder="Masukan Tanggal Kembali">
                  <label for="tglPengembalian">Tanggal Pengembalian</label>
                  <input type="date" name="tgl_pengem" class="form-control" id="tglPengembalian"
                    placeholder="Masukan Tanggal Pengembalian">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                <a href="<?= BASEURL ?>/peminjaman" class="btn btn-info float-md-right">Kembali</a>
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