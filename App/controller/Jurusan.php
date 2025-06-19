<?php
class Jurusan extends Controller
{
  public function index()
  {
    $data['jurusan'] = $this->model('Jurusan_model')->getAllJurusan();
    $this->view('template/header');
    $this->view('jurusan/jurusan', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function create()
  {
    $data['kode'] = $this->model('Jurusan_model')->generateKode();
    $this->view('template/header');
    $this->view('jurusan/create', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function store()
  {
    if ($this->model('Jurusan_model')->insertJurusan($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Ditambahkan', 'success', 'Jurusan');
      header("Location: " . BASEURL . "/jurusan");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Ditambahkan', 'danger', 'Jurusan');
      header("Location: " . BASEURL . "/jurusan");
      die;
    }
  }

  public function edit($id)
  {
    $data['jurusan'] = $this->model('Jurusan_model')->getJurusanById($id);
    $this->view('template/header');
    $this->view('jurusan/edit', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function update()
  {
    if ($this->model('Jurusan_model')->updateJurusan($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Diupdate', 'success', 'Jurusan');
      header("Location: " . BASEURL . "/jurusan");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Diupdate', 'danger', 'Jurusan');
      header("Location: " . BASEURL . "/jurusan");
      die;
    }
  }

  public function delete($id)
  {
    if ($this->model('Jurusan_model')->deleteJurusan($id) > 0) {
      Flasher::setFlash('Berhasil', 'Didelete', 'success', 'Jurusan');
      header("Location: " . BASEURL . "/jurusan");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Didelete', 'danger', 'Jurusan');
      header("Location: " . BASEURL . "/jurusan");
      die;
    }
  }
}
