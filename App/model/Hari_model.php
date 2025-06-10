<?php
class Hari_model
{
  protected $table = "hari";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllHari()
  {
    $this->db->query("SELECT * FROM " . $this->table);
    return $this->db->resultSet();
  }
}