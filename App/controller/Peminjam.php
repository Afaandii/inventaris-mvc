<?php
class Peminjam extends Controller
{
  public function index()
  {
    $data['peminjam'] = $this->model('Peminjam_model')->getAllPeminjam();
    $this->view('template/header');
    $this->view('peminjam/peminjam', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function create()
  {
    $data['kode'] = $this->model("Peminjam_model")->generateKode();
    $this->view('template/header');
    $this->view('template/sidebar');
    $this->view('peminjam/create', $data);
    $this->view('template/footer');
  }

  public function store()
  {
    if ($this->model("Peminjam_model")->insertPeminjam($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
      header("Location: " . BASEURL . "/peminjam");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Ditambahkan', 'danger');
      header("Location: " . BASEURL . "/peminjam");
      die;
    }
  }
}
