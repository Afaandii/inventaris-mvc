<?php
class Warna extends Controller
{
  public function index()
  {
    $data['warna'] = $this->model('Warna_model')->getAllWarna();
    $this->view('template/header');
    $this->view('warna/warna', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }
}
