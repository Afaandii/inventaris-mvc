<?php
class Warna extends Controller
{
  public function index()
  {
    if (!isset($_SESSION['user'])) {
      header("Location: " . BASEURL . "/auth");
      exit;
    }
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
      Flasher::setFlash('Berhasil', 'Ditambahkan', 'success', 'Warna');
      header("Location: " . BASEURL . "/warna");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Ditambahkan', 'danger', 'Warna');
      header("Location: " . BASEURL . "/warna");
      die;
    }
  }

  public function edit($id)
  {
    $data['warna'] = $this->model('Warna_model')->getWarnaById($id);
    $this->view('template/header');
    $this->view('warna/edit', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function update()
  {
    if ($this->model('Warna_model')->updateWarna($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Diupdate', 'success', 'Warna');
      header("Location: " . BASEURL . "/warna");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Diupdate', 'danger', 'Warna');
      header("Location: " . BASEURL . "/warna");
      die;
    }
  }

  public function delete($id)
  {
    if ($this->model('Warna_model')->deleteWarna($id) > 0) {
      Flasher::setFlash('Berhasil', 'Dihapus', 'success', 'Warna');
      header("Location: " . BASEURL . "/warna");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Dihapus', 'danger', 'Warna');
      header("Location: " . BASEURL . "/warna");
      die;
    }
  }
}
