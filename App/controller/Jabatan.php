<?php
class Jabatan extends Controller
{
  public function index()
  {
    $data['jabatan'] = $this->model('Jabatan_model')->getAllJabatan();
    $this->view('template/header');
    $this->view('jabatan', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }
}