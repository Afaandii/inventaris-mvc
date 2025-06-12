<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah Denda</h1>
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
            <form action="<?= BASEURL ?>/jabatan/update" method="post">
              <input type="hidden" name="id" value="<?php echo $data['jabatan']["ID_JABATAN"]; ?>">
              <div class="card-body">
                <div class="form-group">
                  <label for="kode">Kode Jabatan</label>
                  <input type="text" name="kode" id="kode" value="<?= $data['jabatan']['KODE_JABATAN'] ?>" readonly>
                  <br>
                  <label for="jabatan">Nama Jabatan</label>
                  <input type="text" name="jabatan" class="form-control" id="jabatan" placeholder="Masukan Nama Jabatan"
                    value="<?php echo $data['jabatan']["NAMA_JABATAN"]; ?>">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary">Edit Hari</button>
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