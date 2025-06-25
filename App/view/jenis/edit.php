<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="font-weight-bold">Form Edit Jenis</h1>
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
            <form action="<?= BASEURL ?>/jenis/update" method="post">
              <input type="hidden" name="id" value="<?php echo $data['jenis']["ID_JENIS"]; ?>">
              <div class="card-body">
                <div class="form-group">
                  <label for="kode">Kode Jenis</label>
                  <input type="text" name="kode" id="kode" value="<?= $data['jenis']["KODE_JENIS"]; ?>" readonly
                    class="form-control mb-2">

                  <label for="hari">Jenis</label>
                  <input type="text" name="jenis" class="form-control" id="jenis" placeholder="Masukan Jenis Barang"
                    value="<?php echo $data['jenis']["NAMA_JENIS"]; ?>">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                <a href="<?= BASEURL ?>/jenis" class="btn btn-info float-md-right">Kembali</a>
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