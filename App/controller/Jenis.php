<?php
class Jenis extends Controller
{
  public function index()
  {
    if (!isset($_SESSION['user'])) {
      header("Location: " . BASEURL . "/auth");
      exit;
    }
    $data['jenis'] = $this->model('Jenis_model')->getAllJenis();
    $this->view('template/header');
    $this->view('jenis/jenis', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function create()
  {
    $data['kode'] = $this->model('Jenis_model')->generateKode();
    $this->view('template/header');
    $this->view('jenis/create', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function store()
  {
    if ($this->model('Jenis_model')->insertJenis($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Ditambahkan', 'success', 'Jenis');
      header("Location: " . BASEURL . "/jenis");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Ditambahkan', 'danger', 'Jenis');
      header("Location: " . BASEURL . "/jenis");
      die;
    }
  }

  public function edit($id)
  {
    $data['jenis'] = $this->model('Jenis_model')->getJenisById($id);
    $this->view('template/header');
    $this->view('jenis/edit', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function update()
  {
    if ($this->model('Jenis_model')->updateJenis($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Ditambahkan', 'success', 'Jenis');
      header("Location: " . BASEURL . "/jenis");
      exit;
    } else {
      Flasher::setFlash('Gagal!', 'Ditambahkan', 'danger', 'Jenis');
      header("Location: " . BASEURL . "/jenis");
      exit;
    }
  }

  public function delete($id)
  {
    if ($this->model('Jenis_model')->deleteJenis($id) > 0) {
      Flasher::setFlash('Berhasil', 'Dihapus', 'success', 'Jenis');
      header("Location: " . BASEURL . "/jenis");
      exit;
    } else {
      Flasher::setFlash('Gagal!', 'Dihapus', 'danger', 'Jenis');
      header("Location: " . BASEURL . "/jenis");
      exit;
    }
  }
}
