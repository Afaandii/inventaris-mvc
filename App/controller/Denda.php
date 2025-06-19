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
      Flasher::setFlash('Denda', 'Behasil', 'Ditambahkan', 'success');
      header("Location: " . BASEURL . "/denda");
      exit;
    } else {
      Flasher::setFlash('Denda', 'Gagal!', 'ditambahkan', 'danger');
      header("Location: " . BASEURL . "/denda");
      exit;
    }
  }

  public function edit($id)
  {
    $data['edit'] = $this->model('Denda_model')->getDendaById($id);
    $this->view('template/header');
    $this->view('denda/edit', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function update()
  {
    if ($this->model('Denda_model')->updateDenda($_POST) > 0) {
      Flasher::setFlash('Denda', 'Berhasil', 'Di update', 'success');
      header("Location: " . BASEURL . '/denda');
      exit;
    } else {
      Flasher::setFlash('Denda', 'Gagal!', 'Di update', 'danger');
      header("Location: " . BASEURL . "/denda");
      exit;
    }
  }

  public function delete($id)
  {
    if ($this->model('Denda_model')->deleteDenda($id) > 0) {
      Flasher::setFlash('Denda', 'Berhasil', 'Di delete', 'success');
      header("Location: " . BASEURL . '/denda');
      exit;
    } else {
      Flasher::setFlash('Denda', 'Gagal!', 'Di delete', 'danger');
      header("Location: " . BASEURL . "/denda");
      exit;
    }
  }
}
