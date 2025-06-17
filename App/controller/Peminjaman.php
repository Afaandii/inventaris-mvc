<?php
class Peminjaman extends Controller
{
  public function index()
  {
    $data['peminjaman'] = $this->model('Peminjaman_model')->getAllPeminjaman();
    $this->view('template/header');
    $this->view('peminjaman/peminjaman', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function create()
  {
    $data['kode'] = $this->model('Peminjaman_model')->generateKode();
    $data['peminjam'] = $this->model('Peminjaman_model')->getDataPeminjam();
    $data['guru'] = $this->model('Peminjaman_model')->getDataGuru();
    $data['denda'] = $this->model('Peminjaman_model')->getDataDenda();
    $this->view('template/header');
    $this->view('template/sidebar');
    $this->view('Peminjaman/create', $data);
    $this->view('template/footer');
  }

  public function store()
  {
    if ($this->model('Peminjaman_model')->insertPeminjaman($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
      header("Location: " . BASEURL . "/peminjaman");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Ditambahkan', 'danger');
      header("Location: " . BASEURL . "/peminjaman");
      die;
    }
  }

  public function edit($id)
  {
    $data['peminjaman'] = $this->model('Peminjaman_model')->getPeminjamanById($id);
    $data['peminjam'] = $this->model('Peminjaman_model')->getDataPeminjam();
    $data['guru'] = $this->model('Peminjaman_model')->getDataGuru();
    $data['denda'] = $this->model('Peminjaman_model')->getDataDenda();
    $this->view('template/header');
    $this->view('template/sidebar');
    $this->view('peminjaman/edit', $data);
    $this->view('template/footer');
  }

  public function update()
  {
    if ($this->model('Peminjaman_model')->updatePeminjaman($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Diupdate', 'success');
      header("Location: " . BASEURL . "/peminjaman");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Diupdate', 'danger');
      header("Location: " . BASEURL . "/peminjaman");
      die;
    }
  }

  public function delete($id)
  {
    if ($this->model('Peminjaman_model')->deletePeminjaman($id) > 0) {
      Flasher::setFlash('Berhasil', 'Dihapus', 'success');
      header("Location: " . BASEURL . "/peminjaman");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Dihapus', 'danger');
      header("Location: " . BASEURL . "/peminjaman");
      die;
    }
  }
}
