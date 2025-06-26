<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="font-weight-bold">Form Edit Pemesanan</h1>
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
            <form action="<?= BASEURL ?>/pemesanan/update" method="post">
              <input type="hidden" name="id" value="<?php echo $data['pemesanan']["ID_PEMESANAN"]; ?>">
              <div class="card-body">
                <div class="form-group">
                  <label for="kode">Kode Pemesanan</label>
                  <input type="text" name="kode" id="kode" value="<?= $data['pemesanan']['KODE_PEMESANAN'] ?>" readonly
                    class="form-control mb-2">

                  <label for="peminjam">Peminjam</label>
                  <select class="form-select mb-2" name="peminjam" id="peminjam">
                    <?php foreach ($data['peminjam'] as $peminjam): ?>
                      <?php $pilih = ($peminjam['ID_PEMINJAM'] == $data['pemesanan']['ID_PEMINJAM']) ? 'selected' : ''; ?>
                      <option value="<?= $peminjam['ID_PEMINJAM'] ?>" <?= $pilih ?>>
                        <?= $peminjam['ID_PEMINJAM'] ?> - <?= $peminjam['USERNAME_PEMINJAM'] ?>
                      </option>
                    <?php endforeach; ?>
                  </select>

                  <label for="tglPemesanan">Tanggal Pemesanan</label>
                  <input type="date" name="tgl_pemesanan" class="form-control mb-2" id="tglPemesanan"
                    placeholder="Masukan Tanggal Pemesanan"
                    value="<?php echo $data['pemesanan']["TANGGAL_PEMESANAN"]; ?>">
                  <label for="stsPemesanan">Status Pemesanan</label>
                  <input type="text" name="sts_pemesanan" class="form-control" id="stsPemesanan"
                    placeholder="Masukan Status Pemesanan"
                    value="<?php echo $data['pemesanan']["STATUS_PEMESANAN"]; ?>">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                <a href="<?= BASEURL ?>/pemesanan" class="btn btn-info float-md-right">Kembali</a>
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