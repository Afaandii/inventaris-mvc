<?php
class Guru_model
{
  protected $table = "guru";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllGuru()
  {
    $this->db->query("SELECT *, peminjam.USERNAME_PEMINJAM, jabatan.NAMA_JABATAN FROM " . $this->table . " INNER JOIN peminjam ON guru.ID_PEMINJAM = peminjam.ID_PEMINJAM INNER JOIN  jabatan ON guru.ID_JABATAN = jabatan.ID_JABATAN");
    return $this->db->resultSet();
  }

  public function generateKode()
  {
    // mengambil data dari database dengan nilai terbesar dari kolom kode_denda diasliaskan menjadi kodeTerbesar dari tabel denda.
    $this->db->query("SELECT max(KODE_GURU) as kodeTerbesar FROM guru");
    // mengambil data satu persatu baris dari tabel denda 
    $data = $this->db->single();
    // mengambil data terbesar dari kode_denda pada query dan dicek apakah datanya null apa tidak.
    $kodeDenda = $data ? $data["kodeTerbesar"] : null;

    /*
  substr($kodeDenda,mulai 3, panjang 3): Mengambil substring dari $kodeDenda.
  awal 3: Mulai dari karakter ke-4 (karena indeks dimulai dari 0).
  akhir 3: Panjang substring adalah 3 karakter.
  (int): Mengonversi substring menjadi integer.
  Variabel $urutan sekarang berisi angka dari substring $kodeDenda (tanpa huruf awalan).
  */
    $urutan = (int) substr($kodeDenda, 3, 3) ?: 5;

    // menambahkan nilai urutan menjadi 1 untuk menentukan nomer urut berikutnya.
    $urutan++;

    // membentuk huruf untuk kode barang pada database
    $huruf = "GR";

    /*
  sprintf("%03s", $urutan):
  Format string untuk memastikan nilai $urutan memiliki panjang minimal 3 karakter.
  Jika $urutan kurang dari 3 karakter, maka akan diisi spasi di depan.
  Contoh: sprintf("%03s", 5) menghasilkan " 5".
  $huruf . sprintf(...):
  Menggabungkan awalan $huruf ("DND") dengan hasil format $urutan.
  Contoh hasil: "DND 5" (mengandung spasi).
  perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
	misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
	angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
  */
    $kodeDenda = $huruf . sprintf("%03s", $urutan);
    return $kodeDenda;
  }

  public function getDataPeminjam()
  {
    $this->db->query("SELECT ID_PEMINJAM, USERNAME_PEMINJAM FROM peminjam");
    $data = $this->db->resultSet();
    return $data;
  }
  public function getDataJabatan()
  {
    $this->db->query("SELECT * FROM jabatan");
    $data = $this->db->resultSet();
    return $data;
  }

  public function tambahGuru($request)
  {
    $this->db->query("INSERT INTO guru VALUES('', :kode, :peminjam, :jabatan, :nik, :nama_guru, :alamat, :tanggal_lahir)");
    $this->db->bind('kode', $request['kode']);
    $this->db->bind('peminjam', $request['peminjam']);
    $this->db->bind('jabatan', $request['jabatan']);
    $this->db->bind('nik', $request['nik']);
    $this->db->bind('nama_guru', $request['guru']);
    $this->db->bind('alamat', $request['alGuru']);
    $this->db->bind('tanggal_lahir', $request['tglGuru']);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function getGuruById($id)
  {
    $this->db->query("SELECT *, peminjam.USERNAME_PEMINJAM, jabatan.NAMA_JABATAN FROM guru INNER JOIN peminjam ON guru.ID_PEMINJAM = peminjam.ID_PEMINJAM INNER JOIN jabatan ON guru.ID_JABATAN = jabatan.ID_JABATAN WHERE ID_GURU = :id");
    $this->db->bind('id', $id);
    return $this->db->single();
  }

  public function updateGuru($request)
  {
    $this->db->query("UPDATE guru SET KODE_GURU = :kode, ID_PEMINJAM = :peminjam, ID_JABATAN = :jabatan, NIK = :nik, NAMA_GURU = :guru, ALAMAT_GURU = :alamat, TANGGALLAHIR_GURU = :tanggal_lahir WHERE ID_GURU = :id");
    $this->db->bind('id', $request['id']);
    $this->db->bind('kode', $request['kode']);
    $this->db->bind('peminjam', $request['peminjam']);
    $this->db->bind('jabatan', $request['jabatan']);
    $this->db->bind('nik', $request['nik']);
    $this->db->bind('guru', $request['nama_guru']);
    $this->db->bind('alamat', $request['alamat_guru']);
    $this->db->bind('tanggal_lahir', $request['tgllahir_guru']);

    $this->db->execute();
    return $this->db->rowCount();
  }
}
