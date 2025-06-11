<?php
class Perbaikan extends Controller
{
  public function  index()
  {
    $data['perbaikan'] = $this->model('Perbaikan_model')->getAllPerbaikan();
    $this->view('template/header');
    $this->view('perbaikan/perbaikan', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }
}
