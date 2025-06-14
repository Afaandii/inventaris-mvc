<?php
class Pemesanan extends Controller
{
  public function index()
  {
    $data['pemesanan'] = $this->model('Pemesanan_model')->getAllPemesanan();
    $this->view('template/header');
    $this->view('pemesanan/pemesanan', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function create()
  {
    $data['kode'] = $this->model('Pemesanan_model')->generateKode();
    $data['peminjam'] = $this->model('Pemesanan_model')->getDataPeminjam();
    $this->view('template/header');
    $this->view('pemesanan/create', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function store()
  {
    if ($this->model("Pemesanan_model")->insertPemesanan($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
      header("Location: " . BASEURL . "/pemesanan");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Ditambahkan', 'danger');
      header("Location: " . BASEURL . "/pemesanan");
      die;
    }
  }

  public function edit($id)
  {
    $data['pemesanan'] = $this->model('Pemesanan_model')->getPemesananById($id);
    $data['peminjam'] = $this->model('Pemesanan_model')->getDataPeminjam();
    $this->view('template/header');
    $this->view('pemesanan/edit', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function update()
  {
    if ($this->model("Pemesanan_model")->updatePemesanan($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Diupdate', 'success');
      header("Location: " . BASEURL . "/pemesanan");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Diupdate', 'danger');
      header("Location: " . BASEURL . "/pemesanan");
      die;
    }
  }

  public function delete($id)
  {
    if ($this->model('Pemesanan_model')->deletePemesanan($id) > 0) {
      Flasher::setFlash('Berhasil', 'Dihapus', 'success');
      header("Location: " . BASEURL . "/pemesanan");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Dihapus', 'danger');
      header("Location: " . BASEURL . "/pemesanan");
      die;
    }
  }
}
