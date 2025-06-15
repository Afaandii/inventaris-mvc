<?php
class Peminjaman_siswa_model
{
  protected $table = "peminjaman_siswa";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllPeminjamanSiswa()
  {
    $this->db->query(
      "SELECT * FROM " . $this->table . " INNER JOIN peminjam ON peminjam.ID_PEMINJAM = peminjaman_siswa.ID_PEMINJAM"
    );
    return $this->db->resultSet();
  }

  public function generateKode()
  {
    $this->db->query("SELECT max(KODE_PEMINJAMAN_SISWA) as kodeTerbesar FROM peminjaman_siswa");
    $data = $this->db->single();

    $kodeDenda = $data ? $data["kodeTerbesar"] : null;

    $urutan = (int) substr($kodeDenda, 9, 9) ?: 10;

    $urutan++;

    $huruf = "PMJMN_SIS";

    $kodeDenda = $huruf . sprintf("%03s", $urutan);
    return $kodeDenda;
  }

  public function getDataPeminjam()
  {
    $this->db->query("SELECT USERNAME_PEMINJAM, ID_PEMINJAM FROM peminjam");
    return $this->db->resultSet();
  }

  public function insertPeminjamanSiswa($request)
  {
    $this->db->query("INSERT INTO peminjaman_siswa VALUES('', :kode, :peminjam, :mapel, :guru)");
    $this->db->bind('kode', $request['kode']);
    $this->db->bind('peminjam', $request['peminjam']);
    $this->db->bind('mapel', $request['mapel']);
    $this->db->bind('guru', $request['guru']);

    $this->db->execute();
    return $this->db->rowCount();
  }
}
