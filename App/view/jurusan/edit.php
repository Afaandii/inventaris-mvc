<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Update Jenis</h1>
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
            <form action="<?= BASEURL ?>/jurusan/update" method="post">
              <input type="hidden" name="id" value="<?php echo $data['jurusan']["ID_JURUSAN"]; ?>">
              <div class="card-body">
                <div class="form-group">
                  <label for="kode">Kode Jurusan</label>
                  <input type="text" name="kode" id="kode" value="<?= $data['jurusan']['KODE_JURUSAN'] ?>" readonly>
                  <br>
                  <label for="jurusan">Jurusan</label>
                  <input type="text" name="jurusan" class="form-control" id="jurusan" placeholder="Masukan Jurusan"
                    value="<?php echo $data['jurusan']["NAMA_JURUSAN"]; ?>">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary">Edit Jurusan</button>
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