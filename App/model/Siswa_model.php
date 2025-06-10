<?php
class Siswa_model
{
  protected $table = 'siswa';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllSiswa()
  {
    $this->db->query("SELECT * FROM " . $this->table . "
      INNER JOIN peminjam ON peminjam.ID_PEMINJAM = siswa.ID_PEMINJAM
      INNER JOIN kelas_siswa ON kelas_siswa.ID_KELASSISWA = siswa.ID_KELASSISWA");
    return $this->db->resultSet();
  }
}