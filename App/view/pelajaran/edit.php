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
            <form action="<?= BASEURL ?>/pelajaran/update" method="post">
              <input type="hidden" name="id" value="<?php echo $data['pelajaran']["ID_PELAJARAN"]; ?>">
              <div class="card-body">
                <div class="form-group">
                  <label for="kode">Kode Pelajaran</label>
                  <input type="text" name="kode" id="kode" value="<?= $data['pelajaran']['KODE_PELAJARAN'] ?>" readonly>
                  <br>
                  <label for="pelajaran">Pelajaran</label>
                  <input type="text" name="pelajaran" class="form-control" id="pelajaran"
                    placeholder="Masukan Pelajaran" value="<?php echo $data['pelajaran']["NAMA_PELAJARAN"]; ?>">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary">Edit Pelajaran</button>
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