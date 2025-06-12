<?php
class Jabatan extends Controller
{
  public function index()
  {
    $data['jabatan'] = $this->model('Jabatan_model')->getAllJabatan();
    $this->view('template/header');
    $this->view('jabatan/jabatan', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function create()
  {
    $data['kode'] = $this->model('Jabatan_model')->generateKode();
    $this->view('template/header');
    $this->view('jabatan/create', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function store()
  {
    if ($this->model('Jabatan_model')->insertJabatan($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Di tambahkan', 'success');
      header("Location: " . BASEURL . "/jabatan");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Di tambahkan', 'danger');
      header("Location: " . BASEURL . "/jabatan");
      die;
    }
  }
}
