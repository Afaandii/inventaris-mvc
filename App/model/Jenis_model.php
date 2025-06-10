<?php
class Jenis_model
{
  protected $table = "jenis";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllJenis()
  {
    $this->db->query("SELECT * FROM " . $this->table);
    return $this->db->resultSet();
  }
}