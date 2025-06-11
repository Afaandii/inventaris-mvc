<?php
class Denda extends Controller
{
  public function index()
  {
    $data['denda'] = $this->model("Denda_model")->getAllDenda();
    $this->view('template/header');
    $this->view('denda/denda', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }
}
