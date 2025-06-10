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
}