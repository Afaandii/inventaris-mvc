<?php
class Peminjaman_model
{
  protected $table = "peminjaman";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllPeminjaman()
  {
    $this->db->query(
      "SELECT *, peminjam.KODE_PEMINJAM, guru.KODE_GURU FROM " . $this->table . " INNER JOIN peminjam ON peminjam.ID_PEMINJAM = peminjaman.ID_PEMINJAM
      INNER JOIN guru ON guru.ID_GURU = peminjaman.ID_GURU
      LEFT JOIN denda ON denda.ID_DENDA = peminjaman.ID_DENDA"
    );
    return $this->db->resultSet();
  }

  public function generateKode()
  {
    $this->db->query("SELECT max(KODE_PEMINJAMAN) as kodeTerbesar FROM peminjaman");
    $data = $this->db->single();

    $kodeDenda = $data ? $data["kodeTerbesar"] : null;

    $urutan = (int) substr($kodeDenda, 5, 5) ?: 6;

    $urutan++;

    $huruf = "PMJMN";

    $kodeDenda = $huruf . sprintf("%03s", $urutan);
    return $kodeDenda;
  }

  public function getDataPeminjam()
  {
    $this->db->query("SELECT ID_PEMINJAM, USERNAME_PEMINJAM FROM peminjam");
    return $this->db->resultSet();
  }

  public function getDataGuru()
  {
    $this->db->query("SELECT ID_GURU, NAMA_GURU FROM guru");
    return $this->db->resultSet();
  }

  public function getDataDenda()
  {
    $this->db->query("SELECT ID_DENDA, DENDA FROM denda");
    return $this->db->resultSet();
  }

  public function insertPeminjaman($request)
  {
    $this->db->query("INSERT INTO peminjaman VALUES('', :kode, :peminjam, :guru, :denda, :tgl_pemin, :tgl_kem, :tgl_pengem)");
    $this->db->bind('kode', $request['kode']);
    $this->db->bind('peminjam', $request['peminjam']);
    $this->db->bind('guru', $request['guru']);
    $this->db->bind('denda', $request['denda']);
    $this->db->bind('tgl_pemin', $request['tgl_pemin']);
    $this->db->bind('tgl_kem', $request['tgl_kem']);
    $this->db->bind('tgl_pengem', $request['tgl_pengem']);

    $this->db->execute();
    return $this->db->rowCount();
  }
}
