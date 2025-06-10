<?php
class Siswa extends Controller
{
  public function index()
  {
    $data['siswa'] = $this->model('Siswa_model')->getAllSiswa();
    $this->view('template/header');
    $this->view('siswa', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }
}