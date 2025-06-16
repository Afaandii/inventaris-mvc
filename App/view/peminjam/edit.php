<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Update Peminjam</h1>
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
            <form action="<?= BASEURL ?>/peminjam/update" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?php echo $data['peminjam']["ID_PEMINJAM"]; ?>">
              <input type="hidden" name="gambarLama" value="<?php echo $data['peminjam']["IMAGE_PEMINJAM"]; ?>">
              <div class="card-body">
                <div class="form-group">
                  <label for="kode">Kode Peminjam</label>
                  <input type="text" name="kode" id="kode" value="<?= $data['peminjam']['KODE_PEMINJAM'] ?>" readonly>
                  <br>
                  <label for="username">Username Peminjam</label>
                  <input type="text" name="username" class="form-control" id="username"
                    placeholder="Masukan Username Peminjam"
                    value="<?php echo $data['peminjam']["USERNAME_PEMINJAM"]; ?>">
                  <label for="pass">Password Peminjam</label>
                  <input type="password" name="password" class="form-control" id="password"
                    placeholder="Masukan Password Peminjam"
                    value="<?php echo $data['peminjam']["PASSWORD_PEMINJAM"]; ?>">
                  <label for="status">Status Peminjam</label>
                  <input type="text" name="status" class="form-control" id="status"
                    placeholder="Masukan Status Peminjam" value="<?php echo $data['peminjam']["STATUS_PEMINJAM"]; ?>">
                  <label for="keterangan">Keterangan Peminjam</label>
                  <input type="text" name="keterangan" class="form-control" id="keterangan"
                    placeholder="Masukan Keterangan Peminjam"
                    value="<?php echo $data['peminjam']["KETERANGAN_PERINGATAN"]; ?>">
                  <label for="img">Image Peminjam</label><br>
                  <img src="<?= BASEURL ?>/img/<?= $data['peminjam']["IMAGE_PEMINJAM"]; ?>" alt=" gambar" width="200"
                    height="150"><br>
                  <input type="file" name="gambar" class="form-control" id="img">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary">Edit Peminjam</button>
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