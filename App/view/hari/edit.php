<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Hari</h1>
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
            <form action="<?= BASEURL ?>/hari/update" method="post">
              <input type="hidden" name="id" value="<?php echo $data['hari']["ID_HARI"]; ?>">
              <div class="card-body">
                <div class="form-group">
                  <label for="kode">Kode Hari</label>
                  <input type="text" name="kodeHar" id="kode" value="<?= $data['hari']['KODE_HARI'] ?>" readonly> <br>
                  <label for="hari">Hari</label>
                  <input type="text" name="hari" class="form-control" id="hari" placeholder="Masukan Hari"
                    value="<?php echo $data['hari']["NAMA_HARI"]; ?>">
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