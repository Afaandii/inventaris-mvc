<?php
class Pemesanan extends Controller
{
  public function index()
  {
    $data['pemesanan'] = $this->model('Pemesanan_model')->getAllPemesanan();
    $this->view('template/header');
    $this->view('pemesanan', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }
}