<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="font-weight-bold">Form Edit Merk</h1>
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
            <form action="<?= BASEURL ?>/merk/update" method="post">
              <input type="hidden" name="id" value="<?php echo $data['merk']["ID_MERK"]; ?>">
              <div class="card-body">
                <div class="form-group">
                  <label for="kode">Kode Merk</label>
                  <input type="text" name="kode" value="<?= $data['merk']["KODE_MERK"]; ?>" readonly id="kode"
                    class="form-control mb-2">
                  <label for="merk">Merek</label>
                  <input type="text" name="merk" class="form-control" id="merkCre" placeholder="Masukan Merek"
                    value="<?php echo $data['merk']["NAMA_MEREK"]; ?>">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                <a href="<?= BASEURL ?>/merk" class="btn btn-info float-md-right">Kembali</a>
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