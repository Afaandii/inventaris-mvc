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
}