<?php
class Guru extends Controller
{
  public function index()
  {
    $data['guru'] = $this->model('Guru_model')->getAllGuru();
    $this->view('template/header');
    $this->view('guru', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }
}