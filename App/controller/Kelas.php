<?php
class Kelas extends Controller
{
  public function index()
  {
    if (!isset($_SESSION['user'])) {
      header("Location: " . BASEURL . "/auth");
      exit;
    }
    $data['kelas'] = $this->model('Kelas_model')->getAllKelas();
    $this->view('template/header');
    $this->view('kelas/kelas', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function create()
  {
    $data['kode'] = $this->model('Kelas_model')->generateKode();
    $this->view('template/header');
    $this->view('kelas/create', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function store()
  {
    if ($this->model('Kelas_model')->insertKelas($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Ditambahkan', 'success', 'Kelas');
      header("Location: " . BASEURL . "/kelas");
      exit;
    } else {
      Flasher::setFlash('Gagal!', 'Ditambahkan', 'danger', 'Kelas');
      header("Location: " . BASEURL . "/kelas");
      exit;
    }
  }

  public function edit($id)
  {
    $data['kelas'] = $this->model('Kelas_model')->getKelasById($id);
    $this->view('template/header');
    $this->view('kelas/edit', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function update()
  {
    if ($this->model('Kelas_model')->updateKelas($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Diupdate', 'success', 'Kelas');
      header("Location: " . BASEURL . "/kelas");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Diupdate', 'danger', 'Kelas');
      header("Location: " . BASEURL . "/kelas");
      die;
    }
  }

  public function delete($id)
  {
    if ($this->model('Kelas_model')->deleteKelas($id) > 0) {
      Flasher::setFlash('Berhasil', 'Dihapus', 'success', 'Kelas');
      header("Location: " . BASEURL . "/kelas");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Dihapus', 'danger', 'Kelas');
      header("Location: " . BASEURL . "/kelas");
      die;
    }
  }
}
