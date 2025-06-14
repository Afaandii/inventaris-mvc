<?php
class Pemesanan extends Controller
{
  public function index()
  {
    $data['pemesanan'] = $this->model('Pemesanan_model')->getAllPemesanan();
    $this->view('template/header');
    $this->view('pemesanan/pemesanan', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function create()
  {
    $data['kode'] = $this->model('Pemesanan_model')->generateKode();
    $data['peminjam'] = $this->model('Pemesanan_model')->getDataPeminjam();
    $this->view('template/header');
    $this->view('pemesanan/create', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function store()
  {
    if ($this->model("Pemesanan_model")->insertPemesanan($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
      header("Location: " . BASEURL . "/pemesanan");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Ditambahkan', 'danger');
      header("Location: " . BASEURL . "/pemesanan");
      die;
    }
  }
}
