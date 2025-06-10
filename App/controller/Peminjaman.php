<?php
class Peminjaman extends Controller
{
  public function index()
  {
    $data['peminjaman'] = $this->model('Peminjaman_model')->getAllPeminjaman();
    $this->view('template/header');
    $this->view('peminjaman', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }
}