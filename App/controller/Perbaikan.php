<?php
class Perbaikan extends Controller
{
  public function  index()
  {
    $data['perbaikan'] = $this->model('Perbaikan_model')->getAllPerbaikan();
    $this->view('template/header');
    $this->view('perbaikan/perbaikan', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function create()
  {
    $data['guru'] = $this->model('Perbaikan_model')->getDataGuru();
    $data['kode'] = $this->model('Perbaikan_model')->generateKode();
    $this->view('template/header');
    $this->view('perbaikan/create', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function store()
  {
    if ($this->model('Perbaikan_model')->insertPerbaikan($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
      header("Location: " . BASEURL . "/perbaikan");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Ditambahkan', 'danger');
      header("Location: " . BASEURL . "/perbaikan");
      die;
    }
  }
}
