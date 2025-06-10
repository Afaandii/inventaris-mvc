<?php
class Pelajaran_model
{
  protected $table = "pelajaran";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllPelajaran()
  {
    $this->db->query("SELECT * FROM " . $this->table);
    return $this->db->resultSet();
  }
}