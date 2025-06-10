<?php
class Jabatan_model
{
  protected $table = 'jabatan';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllJabatan()
  {
    $this->db->query("SELECT * FROM " . $this->table);
    return $this->db->resultSet();
  }
}