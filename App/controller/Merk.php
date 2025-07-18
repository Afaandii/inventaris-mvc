<?php
class Merk extends Controller
{
  public function index()
  {
    if (!isset($_SESSION['user'])) {
      header("Location: " . BASEURL . "/auth");
      exit;
    }
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
      Flasher::setFlash('Berhasil', 'Ditambahkan', 'success', 'Merk');
      header("Location: " . BASEURL . "/merk");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Ditambahkan', 'danger', 'Merk');
      header("Location: " . BASEURL . "/merk");
      die;
    }
  }

  public function edit($id)
  {
    $data['merk'] = $this->model('Merk_model')->getMerkById($id);
    $this->view('template/header');
    $this->view('template/sidebar');
    $this->view('merk/edit', $data);
    $this->view('template/footer');
  }

  public function update()
  {
    if ($this->model('Merk_model')->updateMerk($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Diupdate', 'success', 'Merk');
      header("Location: " . BASEURL . "/merk");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Diupdate', 'danger', 'Merk');
      header("Location: " . BASEURL . "/merk");
      die;
    }
  }

  public function delete($id)
  {
    if ($this->model('Merk_model')->deleteMerk($id) > 0) {
      Flasher::setFlash('Berhasil', 'Dihapus', 'success', 'Merk');
      header("Location: " . BASEURL . "/merk");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Dihapus', 'danger', 'Merk');
      header("Location: " . BASEURL . "/merk");
      die;
    }
  }
}
