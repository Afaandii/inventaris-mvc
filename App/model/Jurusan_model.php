<?php
class Jurusan_model
{
  protected $table = "jurusan";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllJurusan()
  {
    $this->db->query("SELECT * FROM " . $this->table);
    return $this->db->resultSet();
  }
}