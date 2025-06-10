<?php
class Kelas_model
{
  protected $table = "kelas";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllKelas()
  {
    $this->db->query("SELECT * FROM " . $this->table);
    return $this->db->resultSet();
  }
}