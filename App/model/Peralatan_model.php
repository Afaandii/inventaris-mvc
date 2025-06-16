<?php
class Peralatan_model
{
  protected $table = 'peralatan';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllPeralatan()
  {
    $this->db->query('SELECT *, jenis.KODE_JENIS, merk.KODE_MERK, warna.KODE_WARNA FROM ' .     $this->table . '
    INNER JOIN jenis ON jenis.ID_JENIS = peralatan.ID_JENIS
    INNER JOIN merk ON merk.ID_MERK = peralatan.ID_MERK
    INNER JOIN warna ON warna.ID_WARNA = peralatan.ID_WARNA');
    return $this->db->resultSet();
  }

  public function generateKode()
  {
    $this->db->query("SELECT max(KODE_PERALATAN) as kodeTerbesar FROM peralatan");
    $data = $this->db->single();

    $kodeDenda = $data ? $data["kodeTerbesar"] : null;

    $urutan = (int) substr($kodeDenda, 4, 4) ?: 5;

    $urutan++;

    $huruf = "PRLT";

    $kodeDenda = $huruf . sprintf("%03s", $urutan);
    return $kodeDenda;
  }

  public function getDataJenis()
  {
    $this->db->query("SELECT ID_JENIS, NAMA_JENIS FROM jenis");
    return $this->db->resultSet();
  }

  public function getDataMerk()
  {
    $this->db->query("SELECT ID_MERK, NAMA_MEREK FROM merk");
    return $this->db->resultSet();
  }

  public function getDataWarna()
  {
    $this->db->query("SELECT ID_WARNA, NAMA_WARNA FROM warna");
    return $this->db->resultSet();
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

  public function insertPeralatan($request)
  {
    $gambar = $this->upload();
    if (!$gambar) {
      return false;
    }
    $this->db->query("INSERT INTO peralatan VALUES('', :kode, :jenis, :merk, :warna, :nama_alat, :tgl_beli, :sts_alat, :jumlah_rusak, :sedia_alat, :aturan_service, :gambar )");
    $this->db->bind('kode', $request['kode']);
    $this->db->bind('jenis', $request['jenis']);
    $this->db->bind('merk', $request['merk']);
    $this->db->bind('warna', $request['warna']);
    $this->db->bind('nama_alat', $request['nama_alat']);
    $this->db->bind('tgl_beli', $request['tgl_beli']);
    $this->db->bind('sts_alat', $request['sts_alat']);
    $this->db->bind('jumlah_rusak', $request['jumlah_rusak']);
    $this->db->bind('sedia_alat', $request['sedia_alat']);
    $this->db->bind('aturan_service', $request['aturan_service']);
    $this->db->bind('gambar', $gambar);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function getPeralatanById($id)
  {
    $this->db->query("SELECT *, jenis.KODE_JENIS, merk.KODE_MERK, 
    warna.KODE_WARNA FROM peralatan
    INNER JOIN jenis ON jenis.ID_JENIS = peralatan.ID_JENIS
    INNER JOIN merk ON merk.ID_MERK = peralatan.ID_MERK
    INNER JOIN warna ON warna.ID_WARNA = peralatan.ID_WARNA
    WHERE ID_PERALATAN = :id");
    $this->db->bind('id', $id);

    return $this->db->single();
  }

  public function updatePeralatan($request)
  {
    $gambarLama = $request['gambarLama'];
    if ($_FILES['gambar']['error'] === 4) {
      $gambar = $gambarLama;
    } else {
      $gambar = $this->upload();
    }
    $this->db->query("UPDATE peralatan SET KODE_PERALATAN = :kode, ID_JENIS = :jenis, ID_MERK = :merk, ID_WARNA = :warna, NAMA_PERALATAN = :nama_alat, TANGGALBELI_PERALATAN = :tgl_beli, STATUS_PERALATAN = :sts_alat, JUMLAHKERUSAKAN_PERALATAN = :jumlah_rusak, STATUSKETERSEDIAAN_PERALATAN = :sedia_alat, ATURANSERVICE_PERALATAN = :aturan_service, IMAGE_PERALATAN = :gambar WHERE ID_PERALATAN = :id");
    $this->db->bind('id', $request['id']);
    $this->db->bind('kode', $request['kode']);
    $this->db->bind('jenis', $request['jenis']);
    $this->db->bind('merk', $request['merk']);
    $this->db->bind('warna', $request['warna']);
    $this->db->bind('nama_alat', $request['nama_alat']);
    $this->db->bind('tgl_beli', $request['tgl_beli']);
    $this->db->bind('sts_alat', $request['sts_alat']);
    $this->db->bind('jumlah_rusak', $request['jumlah_rusak']);
    $this->db->bind('sedia_alat', $request['sedia_alat']);
    $this->db->bind('aturan_service', $request['aturan_service']);
    $this->db->bind('gambar', $gambar);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function deletePeralatan($id)
  {
    // Hapus dulu data anak di detail_peminjaman
    $this->db->query("DELETE FROM detail_peminjaman WHERE ID_PERALATAN = :id");
    $this->db->bind('id', $id);
    $this->db->execute();

    // Baru hapus data dari peralatan
    $this->db->query("DELETE FROM peralatan WHERE ID_PERALATAN = :id");
    $this->db->bind('id', $id);
    $this->db->execute();

    return $this->db->rowCount();
  }
}