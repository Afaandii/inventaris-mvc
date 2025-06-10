<?php
class Peminjaman_siswa_model
{
  protected $table = "peminjaman_siswa";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllPeminjamanSiswa()
  {
    $this->db->query(
      "SELECT * FROM " . $this->table . " INNER JOIN peminjam ON peminjam.ID_PEMINJAM = peminjaman_siswa.ID_PEMINJAM"
    );
    return $this->db->resultSet();
  }
}