<?php
class Kelas_siswa_model
{
  protected $table = "kelas_siswa";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllKelasSiswa()
  {
    $this->db->query("SELECT *, jurusan.NAMA_JURUSAN, kelas.NAMA_KELAS FROM " . $this->table . " INNER JOIN jurusan ON kelas_siswa.ID_JURUSAN = jurusan.ID_JURUSAN INNER JOIN kelas ON kelas_siswa.ID_KELAS = kelas.ID_KELAS");
    return $this->db->resultSet();
  }
}