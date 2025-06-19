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
      Flasher::setFlash('Berhasil', 'Ditambahkan', 'success', 'Perbaikan');
      header("Location: " . BASEURL . "/perbaikan");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Ditambahkan', 'danger', 'Perbaikan');
      header("Location: " . BASEURL . "/perbaikan");
      die;
    }
  }

  public function edit($id)
  {
    $data['guru'] = $this->model('Perbaikan_model')->getDataGuru();
    $data['perbaikan'] = $this->model('Perbaikan_model')->getPerbaikanById($id);
    $this->view('template/header');
    $this->view('perbaikan/edit', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function update()
  {
    if ($this->model("Perbaikan_model")->updatePerbaikan($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Diupdate', 'success', 'Perbaikan');
      header("Location: " . BASEURL . "/perbaikan");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Diupdate', 'danger', 'Perbaikan');
      header("Location: " . BASEURL . "/perbaikan");
      die;
    }
  }

  public function delete($id)
  {
    if ($this->model("Perbaikan_model")->deletePerbaikan($id) > 0) {
      Flasher::setFlash('Berhasil', 'Dihapus', 'success', 'Perbaikan');
      header("Location: " . BASEURL . "/perbaikan");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Dihapus', 'danger', 'Perbaikan');
      header("Location: " . BASEURL . "/perbaikan");
      die;
    }
  }
}
