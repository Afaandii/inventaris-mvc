<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah Peminjam</h1>
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
            <form action="<?= BASEURL ?>/peminjam/store" method="post" enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group">
                  <label for="kode">Kode Peminjam</label>
                  <input type="text" id="kode" value="<?= $data['kode']; ?>" name="kode">
                  <br>
                  <label for="username">Username Peminjam</label>
                  <input type="text" name="username" class="form-control" id="username"
                    placeholder="Masukan Username Peminjam">
                  <label for="password">Password Peminjam</label>
                  <input type="password" name="password" class="form-control" id="password"
                    placeholder="Masukan Password Peminjam">
                  <label for="status">Status Peminjam</label>
                  <input type="text" name="status" class="form-control" id="status"
                    placeholder="Masukan Status Peminjam">
                  <label for="keterangan">keterangan Peringatan Peminjam</label>
                  <input type="text" name="keterangan" class="form-control" id="keterangan"
                    placeholder="Masukan Keterangan Peminjam">
                  <label for="image">Image Peminjam</label>
                  <input type="file" name="gambar" class="form-control" id="image"
                    placeholder="Masukan Gambar Peminjam">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary">Tambah Peminjam</button>
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