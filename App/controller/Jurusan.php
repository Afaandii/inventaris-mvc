<?php
class Jurusan extends Controller
{
  public function index()
  {
    $data['jurusan'] = $this->model('Jurusan_model')->getAllJurusan();
    $this->view('template/header');
    $this->view('jurusan/jurusan', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }
}
