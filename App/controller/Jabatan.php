<?php
class Jabatan extends Controller
{
  public function index()
  {
    $data['jabatan'] = $this->model('Jabatan_model')->getAllJabatan();
    $this->view('template/header');
    $this->view('jabatan/jabatan', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function create()
  {
    $data['kode'] = $this->model('Jabatan_model')->generateKode();
    $this->view('template/header');
    $this->view('jabatan/create', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function store()
  {
    if ($this->model('Jabatan_model')->insertJabatan($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Di tambahkan', 'success', 'Jabatan');
      header("Location: " . BASEURL . "/jabatan");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Di tambahkan', 'danger', 'Jabatan');
      header("Location: " . BASEURL . "/jabatan");
      die;
    }
  }

  public function edit($id)
  {
    $data['jabatan'] = $this->model('Jabatan_model')->getJabatanById($id);
    $this->view('template/header');
    $this->view('jabatan/edit', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function update()
  {
    if ($this->model('Jabatan_model')->updateJabatan($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Di update', 'success', 'Jabatan');
      header("Location: " . BASEURL . "/jabatan");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Di update', 'danger', 'Jabatan');
      header("Location: " . BASEURL . "/jabatan");
      die;
    }
  }

  public function delete($id)
  {
    if ($this->model('Jabatan_model')->deleteJabatan($id) > 0) {
      Flasher::setFlash('Berhasil', 'Di hapus', 'success', 'Jabatan');
      header("Location: " . BASEURL . "/jabatan");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Di hapus', 'danger', 'Jabatan');
      header("Location: " . BASEURL . "/jabatan");
      die;
    }
  }
}
