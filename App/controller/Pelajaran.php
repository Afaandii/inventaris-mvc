<?php
class Pelajaran extends Controller
{
  public function index()
  {
    $data['pelajaran'] = $this->model('Pelajaran_model')->getAllPelajaran();
    $this->view('template/header');
    $this->view('pelajaran/pelajaran', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function create()
  {
    $data['kode'] = $this->model('Pelajaran_model')->generateKode();
    $this->view('template/header');
    $this->view('pelajaran/create', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function store()
  {
    if ($this->model('Pelajaran_model')->insertPelajaran($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Ditambahkan', 'success', 'Pelajaran');
      header("Location: " . BASEURL . "/pelajaran");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Ditambahkan', 'danger', 'Pelajaran');
      header("Location: " . BASEURL . "/pelajaran");
      die;
    }
  }

  public function edit($id)
  {
    $data['pelajaran'] = $this->model('Pelajaran_model')->getPelajaranById($id);
    $this->view('template/header');
    $this->view('pelajaran/edit', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function update()
  {
    if ($this->model('Pelajaran_model')->updatePelajaran($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Diupdate', 'success', 'Pelajaran');
      header("Location: " . BASEURL . "/pelajaran");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Diupdate', 'danger', 'Pelajaran');
      header("Location: " . BASEURL . "/pelajaran");
      die;
    }
  }

  public function delete($id)
  {
    if ($this->model('Pelajaran_model')->deletePelajaran($id) > 0) {
      Flasher::setFlash('Berhasil', 'Dihapus', 'success', 'Pelajaran');
      header("Location: " . BASEURL . "/pelajaran");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Dihapus', 'danger', 'Pelajaran');
      header("Location: " . BASEURL . "/pelajaran");
      die;
    }
  }
}
