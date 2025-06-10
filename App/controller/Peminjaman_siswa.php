<?php
class Peminjaman_siswa extends Controller
{
  public function index()
  {
    $data['peminjaman_siswa'] = $this->model('Peminjaman_siswa_model')->getAllPeminjamanSiswa();
    $this->view('template/header');
    $this->view('peminjaman_siswa', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }
}