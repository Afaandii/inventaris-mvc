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

  public function generateKode()
  {
    $this->db->query("SELECT max(KODE_KELASSISWA) as kodeTerbesar FROM kelas_siswa");
    $data = $this->db->single();

    $kodeDenda = $data ? $data["kodeTerbesar"] : null;

    $urutan = (int) substr($kodeDenda, 5, 5) ?: 6;

    $urutan++;

    $huruf = "KLSIS";

    $kodeDenda = $huruf . sprintf("%03s", $urutan);
    return $kodeDenda;
  }

  public function getDataJurusan()
  {
    $this->db->query("SELECT * FROM jurusan");
    return $this->db->resultSet();
  }

  public function getDataKelas()
  {
    $this->db->query("SELECT * FROM kelas");
    return $this->db->resultSet();
  }

  public function insertKelasSiswa($request)
  {
    $this->db->query("INSERT INTO kelas_siswa VALUES('', :kode, :jurusan, :kelas, :kelas_sis)");
    $this->db->bind('kode', $request['kode']);
    $this->db->bind('jurusan', $request['jurusan']);
    $this->db->bind('kelas', $request['kelas']);
    $this->db->bind('kelas_sis', $request['kelasSiswa']);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function getKelasSiswaById($id)
  {
    $this->db->query("SELECT *, jurusan.NAMA_JURUSAN, kelas.NAMA_KELAS FROM kelas_siswa INNER JOIN jurusan ON kelas_siswa.ID_JURUSAN = jurusan.ID_JURUSAN INNER JOIN kelas ON kelas_siswa.ID_KELAS = kelas.ID_KELAS WHERE ID_KELASSISWA = :id");
    $this->db->bind('id', $id);

    return $this->db->single();
  }

  public function updateKelasSiswa($request)
  {
    $this->db->query("UPDATE kelas_siswa SET KODE_KELASSISWA = :kode, ID_JURUSAN = :jurusan, ID_KELAS = :kelas, NAMA_KELASSISWA = :kelas_sis WHERE ID_KELASSISWA = :id");
    $this->db->bind('id', $request['id']);
    $this->db->bind('kode', $request['kode']);
    $this->db->bind('jurusan', $request['jurusan']);
    $this->db->bind('kelas', $request['kelas']);
    $this->db->bind('kelas_sis', $request['kelasSiswa']);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function deleteKelasSiswa($id)
  {
    $this->db->query("DELETE FROM kelas_siswa WHERE ID_KELASSISWA = :id");
    $this->db->bind('id', $id);

    $this->db->execute();
    return $this->db->rowCount();
  }
}