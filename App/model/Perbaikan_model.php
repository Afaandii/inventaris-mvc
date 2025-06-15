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
      "SELECT *, guru.NAMA_GURU FROM " . $this->table . " INNER JOIN guru ON perbaikan.ID_GURU = guru.ID_GURU"
    );
    return $this->db->resultSet();
  }
}
