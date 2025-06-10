<?php
class Peminjaman_guru_model
{
  protected $table = "peminjaman_guru";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllPeminjamanGuru()
  {
    $this->db->query(
      "SELECT *, peminjam.USERNAME_PEMINJAM FROM " . $this->table . " INNER JOIN peminjam ON peminjam.ID_PEMINJAM = peminjaman_guru.ID_PEMINJAM"
    );
    return $this->db->resultSet();
  }
}