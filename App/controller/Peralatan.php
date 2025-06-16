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

  public function create()
  {
    $data['jenis'] = $this->model("Peralatan_model")->getDataJenis();
    $data['merk'] = $this->model("Peralatan_model")->getDataMerk();
    $data['warna'] = $this->model("Peralatan_model")->getDataWarna();
    $data['kode'] = $this->model("Peralatan_model")->generateKode();
    $this->view('template/header');
    $this->view('template/sidebar');
    $this->view('peralatan/create', $data);
    $this->view('template/footer');
  }
}