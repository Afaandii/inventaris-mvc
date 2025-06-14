<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Update Kelas</h1>
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
            <form action="<?= BASEURL ?>/kelas/update" method="post">
              <input type="hidden" name="id" value="<?php echo $data['kelas']["ID_KELAS"]; ?>">
              <div class="card-body">
                <div class="form-group">
                  <label for="kode">Kode Kelas</label>
                  <input type="text" name="kode" id="kode" value="<?= $data['kelas']['KODE_KELAS'] ?>" readonly> <br>
                  <label for="kelas">Kelas</label>
                  <input type="text" name="kelas" class="form-control" id="kelas" placeholder="Masukan kelas"
                    value="<?php echo $data['kelas']["NAMA_KELAS"]; ?>">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary">Edit Kelas</button>
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