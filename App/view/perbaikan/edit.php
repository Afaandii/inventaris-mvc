<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Update Perbaikan</h1>
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
            <form action="<?= BASEURL ?>/perbaikan/update" method="post">
              <input type="hidden" name="id" value="<?php echo $data['perbaikan']["ID_PERBAIKAN"]; ?>">
              <div class="card-body">
                <div class="form-group">
                  <label for="kode">Kode Perbaikan</label>
                  <input type="text" name="kode" id="kode" value="<?= $data['perbaikan']['KODE_PERBAIKAN'] ?>" readonly>
                  <br>
                  <label for="guru">Guru</label>
                  <select name="guru" id="guru">
                    <?php foreach ($data['guru'] as $guru): ?>
                    <?php $pilih = ($guru['ID_GURU'] == $data['perbaikan']['ID_GURU']) ? 'selected' : ''; ?>
                    <option value="<?= $guru['ID_GURU'] ?>" <?= $pilih ?>>
                      <?= $guru['ID_GURU'] ?> - <?= $guru['NAMA_GURU'] ?>
                    </option>
                    <?php endforeach; ?>
                  </select>
                  <br>
                  <label for="perbaikan">Tanggal Perbaikan</label>
                  <input type="date" name="tgl_perbaikan" class="form-control" id="perbaikan"
                    placeholder="Masukan Perbaikan" value="<?php echo $data['perbaikan']["TANGGAL_PERBAIKAN"]; ?>">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary">Edit Perbaikan</button>
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