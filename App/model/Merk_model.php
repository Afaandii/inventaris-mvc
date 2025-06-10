<?php
class Merk_model
{
  protected $table = "merk";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllMerk()
  {
    $this->db->query("SELECT * FROM " . $this->table);
    return $this->db->resultSet();
  }
}