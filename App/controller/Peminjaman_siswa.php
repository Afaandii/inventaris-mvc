<?php
class Peminjaman_siswa extends Controller
{
  public function index()
  {
    $data['peminjaman_siswa'] = $this->model('Peminjaman_siswa_model')->getAllPeminjamanSiswa();
    $this->view('template/header');
    $this->view('peminjaman_siswa/peminjaman_siswa', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function create()
  {
    $data['kode'] = $this->model("Peminjaman_siswa_model")->generateKode();
    $data['peminjam'] = $this->model("Peminjaman_siswa_model")->getDataPeminjam();
    $this->view('template/header');
    $this->view('template/sidebar');
    $this->view('peminjaman_siswa/create', $data);
    $this->view('template/footer');
  }

  public function store()
  {
    if ($this->model("Peminjaman_siswa_model")->insertPeminjamanSiswa($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
      header("Location: " . BASEURL . "/peminjaman_siswa");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Ditambahkan', 'danger');
      header("Location: " . BASEURL . "/peminjaman_siswa");
      die;
    }
  }
}
