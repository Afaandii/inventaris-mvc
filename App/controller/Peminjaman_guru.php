<?php
class Peminjaman_guru extends Controller
{
  public function index()
  {
    $data['peminjaman_guru'] = $this->model('Peminjaman_guru_model')->getAllPeminjamanGuru();
    $this->view('template/header');
    $this->view('peminjaman_guru/peminjaman_guru', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function create()
  {
    $data['kode'] = $this->model("Peminjaman_guru_model")->generateKode();
    $data['peminjam'] = $this->model("peminjaman_guru_model")->getDataPeminjam();
    $this->view('template/header');
    $this->view('peminjaman_guru/create', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function store()
  {
    if ($this->model("Peminjaman_guru_model")->insertPeminjamanGuru($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
      header("Location: " . BASEURL . "/peminjaman_guru");
      exit;
    } else {
      Flasher::setFlash('Gagal!', 'Ditambahkan', 'danger');
      header("Location: " . BASEURL . "/peminjaman_guru");
      exit;
    }
  }
}
