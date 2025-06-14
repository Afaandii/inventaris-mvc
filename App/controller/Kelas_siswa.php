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
      Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
      header("Location: " . BASEURL . "/kelas_siswa");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Ditambahkan', 'danger');
      header("Location: " . BASEURL . "/kelas_siswa");
      die;
    }
  }
}