<?php
class Merk extends Controller
{
  public function index()
  {
    $data['merk'] = $this->model('Merk_model')->getAllMerk();
    $this->view('template/header');
    $this->view('merk/merk', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function create()
  {
    $data['kode'] = $this->model('Merk_model')->generateKode();
    $this->view('template/header');
    $this->view('merk/create', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function store()
  {
    if ($this->model('Merk_model')->insertMerk($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
      header("Location: " . BASEURL . "/merk");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Ditambahkan', 'danger');
      header("Location: " . BASEURL . "/merk");
      die;
    }
  }
}