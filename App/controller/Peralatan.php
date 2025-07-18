<?php
class Peralatan extends Controller
{
  public function index()
  {
    if (!isset($_SESSION['user'])) {
      header("Location: " . BASEURL . "/auth");
      exit;
    }
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

  public function store()
  {
    if ($this->model("Peralatan_model")->insertPeralatan($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Ditambahkan', 'success', 'Peralatan');
      header("Location: " . BASEURL . "/peralatan");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Ditambahkan', 'danger', 'Peralatan');
      header("Location: " . BASEURL . "/peralatan");
      die;
    }
  }

  public function edit($id)
  {
    $data['alat'] = $this->model("Peralatan_model")->getPeralatanById($id);
    $data['jenis'] = $this->model("Peralatan_model")->getDataJenis();
    $data['merk'] = $this->model("Peralatan_model")->getDataMerk();
    $data['warna'] = $this->model("Peralatan_model")->getDataWarna();
    $this->view('template/header');
    $this->view('template/sidebar');
    $this->view('peralatan/edit', $data);
    $this->view('template/footer');
  }

  public function update()
  {
    if ($this->model("Peralatan_model")->updatePeralatan($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Diupdate', 'success', 'Peralatan');
      header("Location: " . BASEURL . "/peralatan");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Diupdate', 'danger', 'Peralatan');
      header("Location: " . BASEURL . "/peralatan");
      die;
    }
  }

  public function delete($id)
  {
    if ($this->model("Peralatan_model")->deletePeralatan($id) > 0) {
      Flasher::setFlash('Berhasil', 'Dihapus', 'success', 'Peralatan');
      header("Location: " . BASEURL . "/peralatan");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Dihapus', 'danger', 'Peralatan');
      header("Location: " . BASEURL . "/peralatan");
      die;
    }
  }
}
