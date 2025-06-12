<?php
class Hari extends Controller
{
  public function index()
  {
    $data['hari'] = $this->model('Hari_model')->getAllHari();
    $this->view('template/header');
    $this->view('hari/hari', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function create()
  {
    $data['kode'] = $this->model('Hari_model')->generateKode();
    $this->view('template/header');
    $this->view('hari/create', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function store()
  {
    if ($this->model('Hari_model')->insertHari($_POST) > 0) {
      Flasher::setFlash('Behasil', 'Di tambahkan', 'success');
      header("Location:" . BASEURL . "/hari");
      exit;
    } else {
      Flasher::setFlash('Gagal!', 'Di tambahkan', 'danger');
      header("Location:" . BASEURL . "/hari");
      exit;
    }
  }
}
