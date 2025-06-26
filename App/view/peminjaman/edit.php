<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="font-weight-bold">Form Edit Peminjaman</h1>
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
            <form action="<?= BASEURL ?>/peminjaman/update" method="post">
              <input type="hidden" name="id" value="<?= $data['peminjaman']['ID_PEMINJAMAN'] ?>">
              <div class="card-body">
                <div class="form-group">
                  <label for="kode">Kode Peminjaman</label>
                  <input type="text" id="kode" value="<?= $data['peminjaman']['KODE_PEMINJAMAN']; ?>" name="kode"
                    readonly class="form-control mb-2">

                  <label for="peminjam">Peminjam</label>
                  <select class="form-select mb-2" name="peminjam" id="peminjam">
                    <?php foreach ($data['peminjam'] as $peminjam): ?>
                      <?php $pilih = ($peminjam['ID_PEMINJAM'] == $data['peminjaman']['ID_PEMINJAM']) ? 'selected' : ''; ?>
                      <option value="<?= $peminjam['ID_PEMINJAM'] ?>" <?= $pilih ?>>
                        <?= $peminjam['ID_PEMINJAM'] ?> - <?= $peminjam['USERNAME_PEMINJAM'] ?>
                      </option>
                    <?php endforeach; ?>
                  </select>

                  <label for="guru">Guru</label>
                  <select class="form-select mb-2" name="guru" id="guru">
                    <?php foreach ($data['guru'] as $guru): ?>
                      <?php $pilih = ($guru['ID_GURU'] == $data['peminjaman']['ID_GURU']) ? 'selected' : ''; ?>
                      <option value="<?= $guru['ID_GURU'] ?>" <?= $pilih ?>>
                        <?= $guru['ID_GURU'] ?> - <?= $guru['NAMA_GURU'] ?>
                      </option>
                    <?php endforeach; ?>
                  </select>

                  <label for="denda">Denda</label>
                  <select class="form-select mb-2" name="denda" id="denda">
                    <?php foreach ($data['denda'] as $denda): ?>
                      <?php $pilih = ($denda['ID_DENDA'] == $data['peminjaman']['ID_DENDA']) ? 'selected' : ''; ?>
                      <option value="<?= $denda['ID_DENDA'] ?>" <?= $pilih ?>>
                        <?= $denda['ID_DENDA'] ?> - <?= $denda['DENDA'] ?>
                      </option>
                    <?php endforeach; ?>
                  </select>

                  <label for="tglPeminjaman">Tanggal Peminjaman</label>
                  <input type="datetime-local" name="tgl_pemin" class="form-control mb-2" id="tglPeminjaman"
                    placeholder="Masukan Tanggal Peminjaman" value="<?= $data['peminjaman']['TANGGAL_PEMINJAMAN'] ?>">
                  <label for="tglKembali">Tanggal Kembali</label>
                  <input type="date" name="tgl_kem" class="form-control mb-2" id="tglKembali"
                    placeholder="Masukan Tanggal Kembali" value="<?= $data['peminjaman']['TANGGAL_KEMBALI'] ?>">
                  <label for="tglPengembalian">Tanggal Pengembalian</label>
                  <input type="date" name="tgl_pengem" class="form-control" id="tglPengembalian"
                    placeholder="Masukan Tanggal Pengembalian"
                    value="<?= $data['peminjaman']['TANGGAL_PENGEMBALIAN'] ?>">
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