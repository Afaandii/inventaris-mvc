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
      Flasher::setFlash('Hari', 'Behasil', 'Di tambahkan', 'success');
      header("Location:" . BASEURL . "/hari");
      exit;
    } else {
      Flasher::setFlash('Hari', 'Gagal!', 'Di tambahkan', 'danger');
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
      Flasher::setFlash('Hari', 'Berhasil', 'Di Update', 'success');
      header("Location: " . BASEURL . "/hari");
      die;
    } else {
      Flasher::setFlash('Hari', 'Gagal!', 'Di Update', 'danger');
      header("Location: " . BASEURL . "/hari");
      die;
    }
  }

  public function delete($id)
  {
    if ($this->model('Hari_model')->deleteHari($id) > 0) {
      Flasher::setFlash('Hari', 'Berhasil', 'Di Hapus', 'success');
      header("Location: " . BASEURL . "/hari");
      die;
    } else {
      Flasher::setFlash('Hari', 'Gagal!', 'Di Hapus', 'danger');
      header("Location: " . BASEURL . "/hari");
      die;
    }
  }
}
