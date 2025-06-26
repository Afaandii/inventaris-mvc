<?php
class Peminjaman_guru extends Controller
{
  public function index()
  {
    if (!isset($_SESSION['user'])) {
      header("Location: " . BASEURL . "/auth");
      exit;
    }
    $data['peminjaman_guru'] = $this->model('Peminjaman_guru_model')->getAllPeminjamanGuru();
    $this->view('template/header');
    $this->view('peminjaman_guru/peminjaman_guru', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function create()
  {
    $data['kode'] = $this->model("Peminjaman_guru_model")->generateKode();
    $data['peminjam'] = $this->model("peminjaman_guru_model")->getDataPeminjam();
    $this->view('template/header');
    $this->view('peminjaman_guru/create', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function store()
  {
    if ($this->model("Peminjaman_guru_model")->insertPeminjamanGuru($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Ditambahkan', 'success', 'Peminjaman Guru');
      header("Location: " . BASEURL . "/peminjaman_guru");
      exit;
    } else {
      Flasher::setFlash('Gagal!', 'Ditambahkan', 'danger', 'Peminjaman Guru');
      header("Location: " . BASEURL . "/peminjaman_guru");
      exit;
    }
  }

  public function edit($id)
  {
    $data['pin_gur'] = $this->model("Peminjaman_guru_model")->getPeminjamanGuruById($id);
    $data['peminjam'] = $this->model("Peminjaman_guru_model")->getDataPeminjam();
    $this->view('template/header');
    $this->view('template/sidebar');
    $this->view('peminjaman_guru/edit', $data);
    $this->view('template/footer');
  }

  public function update()
  {
    if ($this->model("Peminjaman_guru_model")->updatePeminjamanGuru($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Diupdate', 'success', 'Peminjaman Guru');
      header("Location: " . BASEURL . "/peminjaman_guru");
      exit;
    } else {
      Flasher::setFlash('Gagal!', 'Diupdate', 'danger', 'Peminjaman Guru');
      header("Location: " . BASEURL . "/peminjaman_guru");
      exit;
    }
  }

  public function delete($id)
  {
    if ($this->model("Peminjaman_guru_model")->deletePeminjamanGuru($id) > 0) {
      Flasher::setFlash('Berhasil', 'Dihapus', 'success', 'Peminjaman Guru');
      header("Location: " . BASEURL . "/peminjaman_guru");
      exit;
    } else {
      Flasher::setFlash('Gagal!', 'Dihapus', 'danger', 'Peminjaman Guru');
      header("Location: " . BASEURL . "/peminjaman_guru");
      exit;
    }
  }
}
