<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="font-weight-bold">Form Edit Peralatan</h1>
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
            <form action="<?= BASEURL ?>/peralatan/update" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?php echo $data['alat']["ID_PERALATAN"]; ?>">
              <input type="hidden" name="gambarLama" value="<?php echo $data['alat']["IMAGE_PERALATAN"]; ?>">
              <div class="card-body">
                <div class="form-group">
                  <label for="kode">Kode Peralatan</label>
                  <input type="text" id="kode" name="kode" value="<?= $data['alat']["KODE_PERALATAN"]; ?>"
                    class="form-control mb-2">

                  <label for="jenis">Jenis</label>
                  <select class="form-select mb-2" name="jenis" id="jenis">
                    <?php foreach ($data['jenis'] as $jenis): ?>
                      <?php $pilih = ($jenis['ID_JENIS'] == $data['alat']['ID_JENIS']) ? 'selected' : ''; ?>
                      <option value="<?= $jenis['ID_JENIS'] ?>" <?= $pilih ?>>
                        <?= $jenis['ID_JENIS'] ?> - <?= $jenis['NAMA_JENIS'] ?>
                      </option>
                    <?php endforeach; ?>
                  </select>

                  <label for="merk">Merk</label>
                  <select class="form-select mb-2" name="merk" id="merk">
                    <?php foreach ($data['merk'] as $merk): ?>
                      <?php $pilih = ($merk['ID_MERK'] == $data['alat']['ID_MERK']) ? 'selected' : ''; ?>
                      <option value="<?= $merk['ID_MERK'] ?>" <?= $pilih ?>>
                        <?= $merk['ID_MERK'] ?> - <?= $merk['NAMA_MEREK'] ?>
                      </option>
                    <?php endforeach; ?>
                  </select>

                  <label for="merk">Merk</label>
                  <select class="form-select mb-2" name="warna" id="warna">
                    <?php foreach ($data['warna'] as $warna): ?>
                      <?php $pilih = ($warna['ID_WARNA'] == $data['alat']['ID_WARNA']) ? 'selected' : ''; ?>
                      <option value="<?= $warna['ID_WARNA'] ?>" <?= $pilih ?>>
                        <?= $warna['ID_WARNA'] ?> - <?= $warna['NAMA_WARNA'] ?>
                      </option>
                    <?php endforeach; ?>
                  </select>

                  <label for="namaAl">Nama Peralatan</label>
                  <input type="text" name="nama_alat" class="form-control mb-2" id="namaAl"
                    placeholder="Masukan Nama Peralatan" value="<?php echo $data['alat']["NAMA_PERALATAN"]; ?>">
                  <label for="tglBeli">Tanggal Beli Peralatan</label>
                  <input type="date" name="tgl_beli" class="form-control mb-2" id="tglBeli"
                    placeholder="Masukan Tanggal Beli Peralatan"
                    value="<?php echo $data['alat']["TANGGALBELI_PERALATAN"]; ?>">
                  <label for="statusPer">Status Peralatan</label>
                  <input type="text" name="sts_alat" class="form-control mb-2" id="statusPer"
                    placeholder="Masukan Status Peralatan" value="<?php echo $data['alat']["STATUS_PERALATAN"]; ?>">
                  <label for="jmlhRusak">Jumlah Kerusakan Peralatan</label>
                  <input type="number" name="jumlah_rusak" class="form-control mb-2" id="jmlhRusak"
                    placeholder="Masukan Jumlah Kerusakan"
                    value="<?php echo $data['alat']["JUMLAHKERUSAKAN_PERALATAN"]; ?>">
                  <label for="statusSedia">Status Ketersediaan Peralatan</label>
                  <input type="text" name="sedia_alat" class="form-control mb-2" id="statusSedia"
                    placeholder="Masukan Status Ketersediaan Peralatan"
                    value="<?php echo $data['alat']["STATUSKETERSEDIAAN_PERALATAN"]; ?>">
                  <label for="aturanSer">Aturan Service</label>
                  <input type="number" name="aturan_service" class="form-control mb-2" id="aturanSer"
                    placeholder="Masukan Aturan Service"
                    value="<?php echo $data['alat']["ATURANSERVICE_PERALATAN"]; ?>">
                  <label for="img">Gambar Peralatan</label><br>
                  <img src="<?= BASEURL ?>/img/<?= $data['alat']["IMAGE_PERALATAN"]; ?>" width="200" height="150"
                    alt="gambar"><br>
                  <input type="file" name="gambar" class="form-control" id="img">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                <a href="<?= BASEURL ?>/peralatan" class="btn btn-info float-md-right">Kembali</a>
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