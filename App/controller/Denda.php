<?php
class Denda extends Controller
{
  public function index()
  {
    $data['denda'] = $this->model("Denda_model")->getAllDenda();
    $this->view('template/header');
    $this->view('denda/denda', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function create()
  {
    $data['kodeDenda'] = $this->model('Denda_model')->generateKode();
    $this->view('template/header');
    $this->view('denda/create', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function store()
  {
    if ($this->model('Denda_model')->insertDenda($_POST) > 0) {
      Flasher::setFlash('Behasil', 'Ditambahkan', 'success');
      header("Location: " . BASEURL . "/denda");
      exit;
    } else {
      Flasher::setFlash('gagal!', 'ditambahkan', 'danger');
      header("Location: " . BASEURL . "/denda");
      exit;
    }
  }
}
