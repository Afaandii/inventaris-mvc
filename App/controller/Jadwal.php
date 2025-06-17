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

  public function edit($id)
  {
    $data['jadwal'] = $this->model("Jadwal_model")->getJadwalById($id);
    $data['kelsis'] = $this->model("Jadwal_model")->getDataKelsis($id);
    $data['mapel'] = $this->model("Jadwal_model")->getDataPelajaran($id);
    $data['guru'] = $this->model("Jadwal_model")->getDataGuru($id);
    $data['hari'] = $this->model("Jadwal_model")->getDataHari($id);
    $this->view('template/header');
    $this->view('template/sidebar');
    $this->view('jadwal/edit', $data);
    $this->view('template/footer');
  }

  public function update()
  {
    if ($this->model('Jadwal_model')->updateJadwal($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Diupdate', 'success');
      header("Location: " . BASEURL . "/jadwal");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Diupdate', 'danger');
      header("Location: " . BASEURL . "/jadwal");
      die;
    }
  }
}
