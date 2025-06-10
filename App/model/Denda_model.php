<?php
class Denda_model
{
  protected $table = "denda";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllDenda()
  {
    $this->db->query("SELECT * FROM " . $this->table);
    return $this->db->resultSet();
  }
}