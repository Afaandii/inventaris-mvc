<?php
class Hari extends Controller
{
  public function index()
  {
    if (!isset($_SESSION['user'])) {
      header("Location: " . BASEURL . "/auth");
      exit;
    }
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
      Flasher::setFlash('Behasil', 'Di tambahkan', 'success', 'Hari');
      header("Location:" . BASEURL . "/hari");
      exit;
    } else {
      Flasher::setFlash('Gagal!', 'Di tambahkan', 'danger', 'Hari');
      header("Location:" . BASEURL . "/hari");
      exit;
    }
  }

  public function edit($id)
  {
    $data['hari'] = $this->model('Hari_model')->getHariById($id);
    $this->view('template/header');
    $this->view('hari/edit', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function update()
  {
    if ($this->model('Hari_model')->updateHari($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Di Update', 'success', 'Hari');
      header("Location: " . BASEURL . "/hari");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Di Update', 'danger', 'Hari');
      header("Location: " . BASEURL . "/hari");
      die;
    }
  }

  public function delete($id)
  {
    if ($this->model('Hari_model')->deleteHari($id) > 0) {
      Flasher::setFlash('Berhasil', 'Di Hapus', 'success', 'Hari');
      header("Location: " . BASEURL . "/hari");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Di Hapus', 'danger', 'Hari');
      header("Location: " . BASEURL . "/hari");
      die;
    }
  }
}
