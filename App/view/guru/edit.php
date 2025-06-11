<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah Guru</h1>
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
            <form action="<?= BASEURL ?>/guru/update" method="post">
              <input type="hidden" name="id" value="<?php echo $data['guru']["ID_GURU"]; ?>">
              <div class="card-body">
                <div class="form-group">
                  <label for="kode">Kode Guru</label>
                  <input type="text" name="kode" id="kode" readonly value="<?= $data['guru']['KODE_GURU'] ?>">
                  <br>
                  <label for="peminjam">Peminjam</label>
                  <select name="peminjam" id="peminjam">
                    <?php foreach ($data['peminjam'] as $peminjam): ?>
                      <?php $pilih = ($peminjam['ID_PEMINJAM'] == $data['guru']['ID_PEMINJAM']) ? 'selected' : ''; ?>
                      <option value="<?= $peminjam['ID_PEMINJAM'] ?>" <?= $pilih ?>>
                        <?= $peminjam['ID_PEMINJAM'] ?> - <?= $peminjam['USERNAME_PEMINJAM'] ?>
                      </option>
                    <?php endforeach; ?>
                  </select>
                  <br>
                  <label for="jabatan">Jabatan</label>
                  <select name="jabatan" id="jabatan">
                    <?php foreach ($data['jabatan'] as $jabatan): ?>
                      <?php $cekDulu = ($jabatan["ID_JABATAN"] == $data['guru']["ID_JABATAN"]) ? 'selected' : ''; ?>
                      <option value="<?= $jabatan['ID_JABATAN'] ?>" <?= $cekDulu ?>>
                        <?= $jabatan['ID_JABATAN'] ?> - <?= $jabatan['NAMA_JABATAN'] ?>
                      </option>

                    <?php endforeach; ?>
                  </select>
                  <label for="nik">Nik</label>
                  <input type="text" name="nik" class="form-control" id="nik" placeholder="Masukan Nik"
                    value="<?php echo $data['guru']["NIK"]; ?>">
                  <label for="nama">Nama guru</label>
                  <input type="text" name="nama_guru" class="form-control" id="nama" placeholder="Masukan Nama"
                    value="<?php echo $data['guru']["NAMA_GURU"]; ?>">
                  <label for="alamat">Alamat guru</label>
                  <input type="text" name="alamat_guru" class="form-control" id="alamat"
                    placeholder="Masukan Alamat guru" value="<?php echo $data['guru']["ALAMAT_GURU"]; ?>">
                  <label for="tgl lahir">Tanggal lahir guru</label>
                  <input type="date" name="tgllahir_guru" class="form-control" id="tgl lahir"
                    placeholder="Masukan Tanggal Lahir Guru" value="<?php echo $data['guru']["TANGGALLAHIR_GURU"]; ?>">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary">Edit Denda</button>
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