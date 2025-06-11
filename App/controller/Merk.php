<?php
class Merk extends Controller
{
  public function index()
  {
    $data['merk'] = $this->model('Merk_model')->getAllMerk();
    $this->view('template/header');
    $this->view('merk/merk', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }
}
