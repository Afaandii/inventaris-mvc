<?php
class Guru extends Controller
{
  public function index()
  {
    $data['guru'] = $this->model('Guru_model')->getAllGuru();
    $this->view('template/header');
    $this->view('guru/guru', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function create()
  {
    $data['kode'] = $this->model('Guru_model')->generateKode();
    $data['peminjam'] = $this->model('Guru_model')->getDataPeminjam();
    $data['jabatan'] = $this->model('Guru_model')->getDataJabatan();
    $this->view('template/header');
    $this->view('guru/create', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function store()
  {
    if ($this->model('Guru_model')->tambahGuru($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Di tambahkan', 'success');
      header("Location: " . BASEURL . '/guru');
      exit;
    } else {
      Flasher::setFlash('Gagal!!!', 'Di tambahkan', 'danger');
      header("Location: " . BASEURL . "/guru");
      exit;
    }
  }
}
