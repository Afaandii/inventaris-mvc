<?php
class Siswa extends Controller
{
  public function index()
  {
    $data['siswa'] = $this->model('Siswa_model')->getAllSiswa();
    $this->view('template/header');
    $this->view('siswa/siswa', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function create()
  {
    $data['kode'] = $this->model('Siswa_model')->generateKode();
    $data['peminjam'] = $this->model('Siswa_model')->getDataPeminjam();
    $data['kelsis'] = $this->model('Siswa_model')->getDataKelsis();
    $this->view('template/header');
    $this->view('template/sidebar');
    $this->view('siswa/create', $data);
    $this->view('template/footer');
  }

  public function store()
  {
    if ($this->model("Siswa_model")->insertSiswa($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
      header("Location: " . BASEURL . "/siswa");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Ditambahkan', 'danger');
      header("Location: " . BASEURL . "/siswa");
      die;
    }
  }

  public function edit($id)
  {
    $data['siswa'] = $this->model('Siswa_model')->getSiswaById($id);
    $data['peminjam'] = $this->model('Siswa_model')->getDataPeminjam($id);
    $data['kelsis'] = $this->model('Siswa_model')->getDataKelsis($id);
    $this->view('template/header');
    $this->view('template/sidebar');
    $this->view('siswa/edit', $data);
    $this->view('template/footer');
  }

  public function update()
  {
    if ($this->model('Siswa_model')->updateSiswa($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Diupdate', 'success');
      header("Location: " . BASEURL . "/siswa");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Diupdate', 'danger');
      header("Location: " . BASEURL . "/siswa");
      die;
    }
  }
}
