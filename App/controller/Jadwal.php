<?php
class Jadwal extends Controller
{
  public function index()
  {
    $data['jadwal'] = $this->model('Jadwal_model')->getAllJadwal();
    $this->view('template/header');
    $this->view('jadwal/jadwal', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }
}
