<?php
class Warna extends Controller
{
  public function index()
  {
    $data['warna'] = $this->model('Warna_model')->getAllWarna();
    $this->view('template/header');
    $this->view('warna/warna', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function create()
  {
    $data['kode'] = $this->model('Warna_model')->generateKode();
    $this->view('template/header');
    $this->view('warna/create', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }
  public function store()
  {
    if ($this->model('Warna_model')->insertWarna($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
      header("Location: " . BASEURL . "/warna");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Ditambahkan', 'danger');
      header("Location: " . BASEURL . "/warna");
      die;
    }
  }
}