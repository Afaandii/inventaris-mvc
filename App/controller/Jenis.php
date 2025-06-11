<?php
class Jenis extends Controller
{
  public function index()
  {
    $data['jenis'] = $this->model('Jenis_model')->getAllJenis();
    $this->view('template/header');
    $this->view('jenis/jenis', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }
}
