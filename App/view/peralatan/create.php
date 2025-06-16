<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah Peralatan</h1>
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
            <form action="<?= BASEURL ?>/peralatan/store" method="post" enctype="multipart/form-data">
              <div class=" card-body">
                <div class="form-group">
                  <label for="kode">Kode Peralatan</label>
                  <input type="text" name="kode" id="kode" value="<?= $data['kode']; ?>" readonly>
                  <br>
                  <label for="jenis">Jenis</label>
                  <select name="jenis" id="jenis">
                    <?php foreach ($data['jenis'] as $jenis): ?>
                    <option value="<?= $jenis['ID_JENIS'] ?>">
                      <?= $jenis['ID_JENIS'] ?> - <?= $jenis['NAMA_JENIS'] ?>
                    </option>
                    <?php endforeach; ?>
                  </select>
                  <br>
                  <label for="merk">Merk</label>
                  <select name="merk" id="merk">
                    <?php foreach ($data['merk'] as $merk): ?>
                    <option value="<?= $merk['ID_MERK'] ?>">
                      <?= $merk['ID_MERK'] ?> - <?= $merk['NAMA_MEREK'] ?>
                    </option>
                    <?php endforeach; ?>
                  </select>
                  <br>
                  <label for="warna">Warna</label>
                  <select name="warna" id="warna">
                    <?php foreach ($data['warna'] as $warna): ?>
                    <option value="<?= $warna['ID_WARNA'] ?>">
                      <?= $warna['ID_WARNA'] ?> - <?= $warna['NAMA_WARNA'] ?>
                    </option>
                    <?php endforeach; ?>
                  </select>
                  <br>
                  <label for="namAl">Nama Peralatan</label>
                  <input type="text" name="nama_alat" class="form-control" id="namAl"
                    placeholder="Masukan Nama Peralatan">
                  <label for="tglBeli">Tanggal Beli Peralatan</label>
                  <input type="date" name="tgl_beli" class="form-control" id="tglBeli"
                    placeholder="Masukan Tanggal Beli Peralatan">
                  <label for="status">Status Peralatan</label>
                  <input type="text" name="sts_alat" class="form-control" id="status"
                    placeholder="Masukan Status Peralatan">
                  <label for="jmlhRusak">Jumlah Kerusakan Peralatan</label>
                  <input type="number" name="jumlah_rusak" class="form-control" id="jmlhRusak"
                    placeholder="Masukan Jumlah Kerusakan Peralatan">
                  <label for="sediaAl">Status Ketersediaan Peralatan</label>
                  <input type="text" name="sedia_alat" class="form-control" id="sediaAl"
                    placeholder="Masukan Status Ketersediaan Peralatan">
                  <label for="aturan">Aturan Service Peralatan</label>
                  <input type="number" name="aturan_service" class="form-control" id="aturan"
                    placeholder="Masukan Aturan Service Peralatan">
                  <label for="image">Image Peralatan</label>
                  <input type="file" name="gambar" class="form-control" id="image"
                    placeholder="Masukan Image Peralatan">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary">Tambah Peralatan</button>
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