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

  public function create()
  {
    $data['kelsis'] = $this->model("Jadwal_model")->getDataKelsis();
    $data['mapel'] = $this->model("Jadwal_model")->getDataPelajaran();
    $data['guru'] = $this->model("Jadwal_model")->getDataGuru();
    $data['hari'] = $this->model("Jadwal_model")->getDataHari();
    $data['kode'] = $this->model("Jadwal_model")->generateKode();
    $this->view('template/header');
    $this->view('template/sidebar');
    $this->view('jadwal/create', $data);
    $this->view('template/footer');
  }

  public function store()
  {
    if ($this->model("Jadwal_model")->insertJadwal($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
      header("Location: " . BASEURL . "/jadwal");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Ditambahkan', 'danger');
      header("Location: " . BASEURL . "/jadwal");
      die;
    }
  }
}
