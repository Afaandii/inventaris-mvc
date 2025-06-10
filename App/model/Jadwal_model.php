<?php
class Jadwal_model
{
  protected $table = "jadwal";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllJadwal()
  {
    $this->db->query("SELECT * FROM " . $this->table . "
      INNER JOIN kelas_siswa ON kelas_siswa.ID_KELASSISWA = jadwal.ID_KELASSISWA 
      INNER JOIN pelajaran ON jadwal.ID_PELAJARAN = pelajaran.ID_PELAJARAN
      INNER JOIN guru ON jadwal.ID_GURU = guru.ID_GURU
      INNER JOIN hari ON jadwal.ID_HARI = hari.ID_HARI");
    return $this->db->resultSet();
  }
}