<?php
class Peminjaman_model
{
  protected $table = "peminjaman";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllPeminjaman()
  {
    $this->db->query(
      "SELECT *, peminjam.KODE_PEMINJAM, guru.KODE_GURU FROM " . $this->table . " INNER JOIN peminjam ON peminjam.ID_PEMINJAM = peminjaman.ID_PEMINJAM
      INNER JOIN guru ON guru.ID_GURU = peminjaman.ID_GURU
      LEFT JOIN denda ON denda.ID_DENDA = peminjaman.ID_DENDA"
    );
    return $this->db->resultSet();
  }
}