<?php
class Perbaikan_model
{
  protected $table = "perbaikan";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllPerbaikan()
  {
    $this->db->query(
      "SELECT * FROM " . $this->table
    );
    return $this->db->resultSet();
  }
}