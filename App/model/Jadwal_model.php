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

  public function generateKode()
  {
    $this->db->query("SELECT max(KODE_JADWAL) as kodeTerbesar FROM jadwal");
    $data = $this->db->single();

    $kodeDenda = $data ? $data["kodeTerbesar"] : null;

    $urutan = (int) substr($kodeDenda, 4, 4) ?: 5;

    $urutan++;

    $huruf = "JDWL";

    $kodeDenda = $huruf . sprintf("%03s", $urutan);
    return $kodeDenda;
  }

  public function getDataKelsis()
  {
    $this->db->query("SELECT ID_KELASSISWA, NAMA_KELASSISWA FROM kelas_siswa");
    return $this->db->resultSet();
  }

  public function getDataPelajaran()
  {
    $this->db->query("SELECT ID_PELAJARAN, NAMA_PELAJARAN FROM pelajaran");
    return $this->db->resultSet();
  }

  public function getDataGuru()
  {
    $this->db->query("SELECT ID_GURU, NAMA_GURU FROM guru");
    return $this->db->resultSet();
  }

  public function getDataHari()
  {
    $this->db->query("SELECT ID_HARI, NAMA_HARI FROm hari");
    return $this->db->resultSet();
  }

  public function insertJadwal($request)
  {
    $this->db->query("INSERT INTO jadwal VALUES('', :kode, :kelsis, :mapel, :guru, :hari, :jamsuk, :jamkel, :semester)");
    $this->db->bind('kode', $request['kode']);
    $this->db->bind('kelsis', $request['kelsis']);
    $this->db->bind('mapel', $request['mapel']);
    $this->db->bind('guru', $request['guru']);
    $this->db->bind('hari', $request['hari']);
    $this->db->bind('jamsuk', $request['jamsuk']);
    $this->db->bind('jamkel', $request['jamkel']);
    $this->db->bind('semester', $request['semester']);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function getJadwalById($id)
  {
    $this->db->query("SELECT *, kelas_siswa.KODE_KELASSISWA, pelajaran.KODE_PELAJARAN, guru.KODE_GURU, hari.KODE_HARI FROM jadwal 
    INNER JOIN kelas_siswa ON kelas_siswa.ID_KELASSISWA =  jadwal.ID_KELASSISWA INNER JOIN pelajaran ON pelajaran.ID_PELAJARAN = jadwal.ID_PELAJARAN 
    INNER JOIN guru ON guru.ID_GURU = jadwal.ID_GURU 
    INNER JOIN hari ON hari.ID_HARI = jadwal.ID_HARI 
    WHERE ID_JADWAL = :id");
    $this->db->bind('id', $id);

    return $this->db->single();
  }
}
