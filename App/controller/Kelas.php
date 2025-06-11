<?php
class Kelas extends Controller
{
  public function index()
  {
    $data['kelas'] = $this->model('Kelas_model')->getAllKelas();
    $this->view('template/header');
    $this->view('kelas/kelas', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }
}
