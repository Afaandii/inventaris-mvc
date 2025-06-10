<?php
class Pemesanan_model
{
  protected $table = "pemesanan";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllPemesanan()
  {
    $this->db->query("SELECT *, peminjam.ID_PEMINJAM, peminjam.USERNAME_PEMINJAM FROM " . $this->table . " INNER JOIN peminjam ON peminjam.ID_PEMINJAM = pemesanan.ID_PEMINJAM");
    return $this->db->resultSet();
  }
}