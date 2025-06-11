<?php
class Peralatan extends Controller
{
  public function index()
  {
    $data['peralatan'] = $this->model('Peralatan_model')->getAllPeralatan();
    $this->view('template/header');
    $this->view('peralatan/peralatan', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }
}
