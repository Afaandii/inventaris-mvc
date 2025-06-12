<?php
class Jurusan extends Controller
{
  public function index()
  {
    $data['jurusan'] = $this->model('Jurusan_model')->getAllJurusan();
    $this->view('template/header');
    $this->view('jurusan/jurusan', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function create()
  {
    $data['kode'] = $this->model('Jurusan_model')->generateKode();
    $this->view('template/header');
    $this->view('jurusan/create', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function store()
  {
    if ($this->model('Jurusan_model')->insertJurusan($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
      header("Location: " . BASEURL . "/jurusan");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Ditambahkan', 'danger');
      header("Location: " . BASEURL . "/jurusan");
      die;
    }
  }
}
