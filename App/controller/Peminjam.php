<?php
class Peminjam extends Controller
{
  public function index()
  {
    $data['peminjam'] = $this->model('Peminjam_model')->getAllPeminjam();
    $this->view('template/header');
    $this->view('peminjam/peminjam', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function create()
  {
    $data['kode'] = $this->model("Peminjam_model")->generateKode();
    $this->view('template/header');
    $this->view('template/sidebar');
    $this->view('peminjam/create', $data);
    $this->view('template/footer');
  }

  public function store()
  {
    if ($this->model("Peminjam_model")->insertPeminjam($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Ditambahkan', 'success', 'Peminjam');
      header("Location: " . BASEURL . "/peminjam");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Ditambahkan', 'danger', 'Peminjam');
      header("Location: " . BASEURL . "/peminjam");
      die;
    }
  }

  public function edit($id)
  {
    $data['peminjam'] = $this->model('Peminjam_model')->getPeminjamById($id);
    $this->view('template/header');
    $this->view('template/sidebar');
    $this->view('peminjam/edit', $data);
    $this->view('template/footer');
  }

  public function update()
  {
    if ($this->model('Peminjam_model')->updatePeminjam($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Diupdate', 'success', 'Peminjam');
      header("Location: " . BASEURL . "/peminjam");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Diupdate', 'danger', 'Peminjam');
      header("Location: " . BASEURL . "/peminjam");
      die;
    }
  }

  public function delete($id)
  {
    if ($this->model('Peminjam_model')->deletePeminjam($id) > 0) {
      Flasher::setFlash('Berhasil', 'Dihapus', 'success', 'Peminjam');
      header("Location: " . BASEURL . "/peminjam");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Dihapus', 'danger', 'Peminjam');
      header("Location: " . BASEURL . "/peminjam");
      die;
    }
  }
}
