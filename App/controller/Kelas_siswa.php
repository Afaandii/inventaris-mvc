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
}
