<?php
class Peminjaman_guru extends Controller
{
  public function index()
  {
    $data['peminjaman_guru'] = $this->model('Peminjaman_guru_model')->getAllPeminjamanGuru();
    $this->view('template/header');
    $this->view('peminjaman_guru/peminjaman_guru', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }
}
