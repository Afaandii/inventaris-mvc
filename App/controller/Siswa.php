<?php
class Siswa extends Controller
{
  public function index()
  {
    $data['siswa'] = $this->model('Siswa_model')->getAllSiswa();
    $this->view('template/header');
    $this->view('siswa/siswa', $data);
    $this->view('template/sidebar');
    $this->view('template/footer');
  }

  public function create()
  {
    $data['kode'] = $this->model('Siswa_model')->generateKode();
    $data['peminjam'] = $this->model('Siswa_model')->getDataPeminjam();
    $data['kelsis'] = $this->model('Siswa_model')->getDataKelsis();
    $this->view('template/header');
    $this->view('template/sidebar');
    $this->view('siswa/create', $data);
    $this->view('template/footer');
  }

  public function store()
  {
    if ($this->model("Siswa_model")->insertSiswa($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Ditambahkan', 'success', 'Siswa');
      header("Location: " . BASEURL . "/siswa");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Ditambahkan', 'danger', 'Siswa');
      header("Location: " . BASEURL . "/siswa");
      die;
    }
  }

  public function edit($id)
  {
    $data['siswa'] = $this->model('Siswa_model')->getSiswaById($id);
    $data['peminjam'] = $this->model('Siswa_model')->getDataPeminjam($id);
    $data['kelsis'] = $this->model('Siswa_model')->getDataKelsis($id);
    $this->view('template/header');
    $this->view('template/sidebar');
    $this->view('siswa/edit', $data);
    $this->view('template/footer');
  }

  public function update()
  {
    if ($this->model('Siswa_model')->updateSiswa($_POST) > 0) {
      Flasher::setFlash('Berhasil', 'Diupdate', 'success', 'Siswa');
      header("Location: " . BASEURL . "/siswa");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Diupdate', 'danger', 'Siswa');
      header("Location: " . BASEURL . "/siswa");
      die;
    }
  }

  public function delete($id)
  {
    if ($this->model("Siswa_model")->deleteSiswa($id) > 0) {
      Flasher::setFlash('Berhasil', 'Dihapus', 'success', 'Siswa');
      header("Location: " . BASEURL . "/siswa");
      die;
    } else {
      Flasher::setFlash('Gagal!', 'Dihapus', 'danger', 'Siswa');
      header("Location: " . BASEURL . "/siswa");
      die;
    }
  }

  public function getKelasSiswaByPeminjam()
  {
    $idPeminjam = $_POST['id_peminjam'] ?? null;

    if (!$idPeminjam) {
      echo "<option value=''>ID tidak valid</option>";
      return;
    }

    $siswa = $this->model('Siswa_model')->getKelasSiswaByPeminjam($idPeminjam);

    if ($siswa) {
      echo "<option value='{$siswa['ID_KELASSISWA']} - {$siswa['NAMA_KELASSISWA']}'>
          {$siswa['ID_KELASSISWA']} - {$siswa['NAMA_KELASSISWA']}
          </option>";
    } else {
      echo "<option value=''>Kelas siswa tidak ditemukan</option>";
    }
  }
}
