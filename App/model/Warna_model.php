<?php
class Warna_model
{
  protected $table = "warna";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllWarna()
  {
    $this->db->query("SELECT * FROM " . $this->table);
    return $this->db->resultSet();
  }
}