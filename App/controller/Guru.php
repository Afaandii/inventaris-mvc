<?php
class Guru extends Controller
{
  public function index()
  {
    $data['guru'] = $this->model('Guru_model')->getAllGuru();
    $this->view('template/header');
    $this->view('guru/guru', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function create()
  {
    $data['kode'] = $this->model('Guru_model')->generateKode();
    $data['peminjam'] = $this->model('Guru_model')->getDataPeminjam();
    $data['jabatan'] = $this->model('Guru_model')->getDataJabatan();
    $this->view('template/header');
    $this->view('guru/create', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function store()
  {
    if ($this->model('Guru_model')->tambahGuru($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Di tambahkan', 'success', 'Guru');
      header("Location: " . BASEURL . '/guru');
      exit;
    } else {
      Flasher::setFlash('Gagal!', 'Di tambahkan', 'danger', 'Guru');
      header("Location: " . BASEURL . "/guru");
      exit;
    }
  }

  public function edit($id)
  {
    $data['guru'] = $this->model('Guru_model')->getGuruById($id);
    $data['peminjam'] = $this->model('Guru_model')->getDataPeminjam();
    $data['jabatan'] = $this->model('Guru_model')->getDataJabatan();
    $this->view('template/header');
    $this->view('guru/edit', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function update()
  {
    if ($this->model('Guru_model')->updateGuru($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Di update', 'success', 'Guru');
      header("Location: " . BASEURL . '/guru');
      exit;
    } else {
      Flasher::setFlash('Gagal!', 'Di update', 'danger', 'Guru');
      header("Location: " . BASEURL . "/guru");
      exit;
    }
  }

  public function delete($id)
  {
    if ($this->model('Guru_model')->deleteGuru($id) > 0) {
      Flasher::setFlash('Berhasil', 'Di delete', 'success', 'Guru');
      header("Location: " . BASEURL . '/guru');
      exit;
    } else {
      Flasher::setFlash('Gagal!', 'Di delete', 'danger', 'Guru');
      header("Location: " . BASEURL . "/guru");
      exit;
    }
  }
}
