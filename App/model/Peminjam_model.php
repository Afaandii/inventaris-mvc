<?php
class Peminjam_model
{
  protected $table = "peminjam";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllPeminjam()
  {
    $this->db->query("SELECT * FROM " . $this->table);
    return $this->db->resultSet();
  }

  public function generateKode()
  {
    $this->db->query("SELECT max(KODE_PEMINJAM) as kodeTerbesar FROM peminjam");
    $data = $this->db->single();

    $kodeDenda = $data ? $data["kodeTerbesar"] : null;

    $urutan = (int) substr($kodeDenda, 4, 4) ?: 5;

    $urutan++;

    $huruf = "PMJM";

    $kodeDenda = $huruf . sprintf("%03s", $urutan);
    return $kodeDenda;
  }

  protected function upload()
  {
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if ($error === 4) {
      echo "<script>
            alert('pilih gambar dulu');
          </script>";
      return false;
    };

    // cek apakah yang diupload adalah gambar
    $eksGambarValid = ['jpg', 'jpeg', 'png', 'svg', 'webp'];
    $eksGambar = explode(".", $namaFile);
    $eksGambar = strtolower(end($eksGambar));

    //cek apakah yang diupload gambar sesuai apa tidak
    if (!in_array($eksGambar, $eksGambarValid)) {
      echo "<script>
            alert('anda upload bukan gambar!');
        </script>";
      return false;
    };

    // cek jika ukuran file gambar terlalu besar
    if ($ukuranFile > 2000000) {
      echo "<script>
            alert('ukuran gambar anda terlalu besar!');
          </script>";
      return false;
    };

    // cek lolos pengecekan gambar diupload
    //generate nama gambar baru yang unik untuk menghindari kesamaan data gambar
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $eksGambar;
    move_uploaded_file($tmpName, "img/" . $namaFileBaru);

    //jika ada error ketika sudah diupload itu karena tidak ada folder pada project ini jadi fungsi move tidak tau dipindah kemana makanya error.
    return $namaFileBaru;
  }

  public function insertPeminjam($request)
  {
    $gambar = $this->upload();
    if (!$gambar) {
      return false;
    }

    $this->db->query("INSERT INTO peminjam VALUES('', :kode, :username, :password, :status, :keterangan, :gambar)");
    $this->db->bind('kode', $request['kode']);
    $this->db->bind('username', $request['username']);
    $this->db->bind('password', $request['password']);
    $this->db->bind('status', $request['status']);
    $this->db->bind('keterangan', $request['keterangan']);
    $this->db->bind('gambar', $gambar);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function getPeminjamById($id)
  {
    $this->db->query("SELECT * FROM peminjam WHERE ID_PEMINJAM = :id");
    $this->db->bind('id', $id);

    return $this->db->single();
  }

  public function updatePeminjam($request)
  {
    $gambarLama = $request['gambarLama'];

    if ($_FILES['gambar']['error'] === 4) {
      $gambar = $gambarLama;
    } else {
      $gambar = $this->upload();
    }

    $this->db->query("UPDATE peminjam SET KODE_PEMINJAM = :kode, USERNAME_PEMINJAM = :username, PASSWORD_PEMINJAM = :password, STATUS_PEMINJAM = :status, KETERANGAN_PERINGATAN = :keterangan, IMAGE_PEMINJAM = :gambar WHERE ID_PEMINJAM = :id");
    $this->db->bind('id', $request['id']);
    $this->db->bind('kode', $request['kode']);
    $this->db->bind('username', $request['username']);
    $this->db->bind('password', $request['password']);
    $this->db->bind('status', $request['status']);
    $this->db->bind('keterangan', $request['keterangan']);
    $this->db->bind('gambar', $gambar);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function deletePeminjam($id)
  {
    $this->db->query("DELETE FROM peminjam WHERE ID_PEMINJAM = :id");
    $this->db->bind('id', $id);

    $this->db->execute();
    return $this->db->rowCount();
  }
}
