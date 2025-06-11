<?php
class Denda_model
{
  protected $table = "denda";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllDenda()
  {
    $this->db->query("SELECT * FROM " . $this->table);
    return $this->db->resultSet();
  }

  public function generateKode()
  {
    // mengambil data dari database dengan nilai terbesar dari kolom kode_denda diasliaskan menjadi kodeTerbesar dari tabel denda.
    $this->db->query("SELECT max(KODE_DENDA) as kodeTerbesar FROM denda");
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
    $huruf = "DND";

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

  public function insertDenda($request)
  {
    $this->db->query("INSERT INTO denda VALUES('', :kodeDen, :denda)");
    $this->db->bind('kodeDen', $request['kodeDen']);
    $this->db->bind('denda', $request['denda']);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function getDendaById($id)
  {
    $this->db->query("SELECT * FROM denda WHERE ID_DENDA =:id");
    $this->db->bind('id', $id);
    return $this->db->single();
  }

  public function updateDenda($request)
  {
    $this->db->query("UPDATE denda SET denda = :denda WHERE ID_DENDA = :id");
    $this->db->bind('id', $request['id']);
    $this->db->bind('denda', $request['denda']);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function deleteDenda($id)
  {
    $this->db->query("DELETE FROM denda WHERE ID_DENDA = :id");
    $this->db->bind('id', $id);

    $this->db->execute();
    return $this->db->rowCount();
  }
}
