<?php
class Pelajaran extends Controller
{
  public function index()
  {
    $data['pelajaran'] = $this->model('Pelajaran_model')->getAllPelajaran();
    $this->view('template/header');
    $this->view('pelajaran/pelajaran', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function create()
  {
    $data['kode'] = $this->model('Pelajaran_model')->generateKode();
    $this->view('template/header');
    $this->view('pelajaran/create', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function store()
  {
    if ($this->model('Pelajaran_model')->insertPelajaran($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
      header("Location: " . BASEURL . "/pelajaran");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Ditambahkan', 'danger');
      header("Location: " . BASEURL . "/pelajaran");
      die;
    }
  }
}
