<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Tabel Peralatan</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- /.row -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">DataTable Peralatan</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Aksi</th>
                        <th>Kode Peralatan</th>
                        <th>Nama Peralatan</th>
                        <th>Tanggal Pembelian</th>
                        <th>Status Peralatan</th>
                        <th>Jumlah Kerusakan</th>
                        <th>Status Ketersediaan</th>
                        <th>Aturan Service</th>
                        <th>Image Peralatan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ($data['peralatan'] as $alat) { ?>
                      <tr>
                        <td><?php echo $i; ?></td>
                        <td>
                          <a href="updatePeralatan.php?id=<?= $alat["ID_PERALATAN"]; ?>">Update</a>
                          -----
                          <a href="hapusPeralatan.php?id=<?= $alat["ID_PERALATAN"]; ?>">Delete</a>
                        </td>
                        <td><?= $alat["KODE_PERALATAN"]; ?></td>
                        <td><?php echo $alat["NAMA_PERALATAN"]; ?></td>
                        <td><?php echo $alat["TANGGALBELI_PERALATAN"]; ?></td>
                        <td><?php echo $alat["STATUS_PERALATAN"]; ?></td>
                        <td><?php echo $alat["JUMLAHKERUSAKAN_PERALATAN"]; ?></td>
                        <td><?php echo $alat["STATUSKETERSEDIAAN_PERALATAN"]; ?></td>
                        <td><?php echo $alat["ATURANSERVICE_PERALATAN"]; ?></td>
                        <td><img src="img/<?= $alat["IMAGE_PERALATAN"]; ?>" alt="gambar alat" width="65" height="55">
                        </td>
                      </tr>
                      <?php $i++; ?>
                      <?php }; ?>
                    </tbody>
                  </table>
                  <a href="<?= BASEURL ?>/peralatan/create">Tambah Peralatan</a>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
      </section>
    </div>
    <!--/. container-fluid -->
  </section>
  <!-- /.content -->
</div>