<?php
class Kelas_siswa extends Controller
{
  public function index()
  {
    $data['kelas_siswa'] = $this->model('Kelas_siswa_model')->getAllKelasSiswa();
    $this->view('template/header');
    $this->view('kelas_siswa/kelas_siswa', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function create()
  {
    $data['kode'] = $this->model('Kelas_siswa_model')->generateKode();
    $data['jurusan'] = $this->model('Kelas_siswa_model')->getDataJurusan();
    $data['kelas'] = $this->model('Kelas_siswa_model')->getDataKelas();
    $this->view('template/header');
    $this->view('kelas_siswa/create', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function store()
  {
    if ($this->model('Kelas_siswa_model')->insertKelasSiswa($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Ditambahkan', 'success', 'Kelas Siswa');
      header("Location: " . BASEURL . "/kelas_siswa");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Ditambahkan', 'danger', 'Kelas Siswa');
      header("Location: " . BASEURL . "/kelas_siswa");
      die;
    }
  }

  public function edit($id)
  {
    $data['jurusan'] = $this->model('Kelas_siswa_model')->getDataJurusan();
    $data['kelas'] = $this->model('Kelas_siswa_model')->getDataKelas();
    $data['kelas_sis'] = $this->model('Kelas_siswa_model')->getKelasSiswaById($id);
    $this->view('template/header');
    $this->view('kelas_siswa/edit', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function update()
  {
    if ($this->model('Kelas_siswa_model')->updateKelasSiswa($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Diupdate', 'success', 'Kelas Siswa');
      header('Location: ' . BASEURL . "/kelas_siswa");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Diupdate', 'danger', 'Kelas Siswa');
      header('Location: ' . BASEURL . "/kelas_siswa");
      die;
    }
  }

  public function delete($id)
  {
    if ($this->model('Kelas_siswa_model')->deleteKelasSiswa($id) > 0) {
      Flasher::setFlash('Berhasil', 'Dihapus', 'success', 'Kelas Siswa');
      header("Location: " . BASEURL . "/kelas_siswa");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Dihapus', 'danger', 'Kelas Siswa');
      header("Location: " . BASEURL . "/kelas_siswa");
      die;
    }
  }
}
