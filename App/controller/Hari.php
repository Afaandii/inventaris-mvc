<?php
class Hari extends Controller
{
  public function index()
  {
    $data['hari'] = $this->model('Hari_model')->getAllHari();
    $this->view('template/header');
    $this->view('hari', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }
}