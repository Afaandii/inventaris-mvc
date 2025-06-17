<?php
class Peminjaman extends Controller
{
  public function index()
  {
    $data['peminjaman'] = $this->model('Peminjaman_model')->getAllPeminjaman();
    $this->view('template/header');
    $this->view('peminjaman/peminjaman', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function create()
  {
    $data['kode'] = $this->model('Peminjaman_model')->generateKode();
    $data['peminjam'] = $this->model('Peminjaman_model')->getDataPeminjam();
    $data['guru'] = $this->model('Peminjaman_model')->getDataGuru();
    $data['denda'] = $this->model('Peminjaman_model')->getDataDenda();
    $this->view('template/header');
    $this->view('template/sidebar');
    $this->view('Peminjaman/create', $data);
    $this->view('template/footer');
  }

  public function store()
  {
    if ($this->model('Peminjaman_model')->insertPeminjaman($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
      header("Location: " . BASEURL . "/peminjaman");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Ditambahkan', 'danger');
      header("Location: " . BASEURL . "/peminjaman");
      die;
    }
  }
}
