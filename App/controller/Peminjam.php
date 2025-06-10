<?php
class Peminjam extends Controller
{
  public function index()
  {
    $data['peminjam'] = $this->model('Peminjam_model')->getAllPeminjam();
    $this->view('template/header');
    $this->view('peminjam', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }
}