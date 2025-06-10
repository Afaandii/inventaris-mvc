<?php
class Pelajaran extends Controller
{
  public function index()
  {
    $data['pelajaran'] = $this->model('Pelajaran_model')->getAllPelajaran();
    $this->view('template/header');
    $this->view('pelajaran', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }
}