<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah Pemesanan</h1>
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
            <form action="<?= BASEURL ?>/pemesanan/store" method="post">
              <div class="card-body">
                <div class="form-group">
                  <label for="kode">Kode Pemesanan</label>
                  <input type="text" name="kode" id="kode" value="<?= $data['kode'] ?>" readonly> <br>
                  <label for="peminjam">Peminjam</label>
                  <select name="peminjam" id="peminjam">
                    <?php foreach ($data['peminjam'] as $peminjam): ?>
                      <option value="<?= $peminjam['ID_PEMINJAM'] ?>">
                        <?= $peminjam['ID_PEMINJAM'] ?> - <?= $peminjam['USERNAME_PEMINJAM'] ?>
                      </option>
                    <?php endforeach; ?>
                  </select>
                  <br>
                  <label for="tglPemesanan">Tanggal Pemesanan</label>
                  <input type="date" name="tgl_pemesanan" class="form-control" id="tglPemesanan"
                    placeholder="Masukan Tanggal Pemesanan">
                  <label for="status">Status Pemesanan</label>
                  <input type="text" name="sts_pemesanan" class="form-control" id="status"
                    placeholder="Masukan Status Pemesanan">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary">Tambah Pemesanan</button>
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