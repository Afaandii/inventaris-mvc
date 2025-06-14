<?php
class Pemesanan_model
{
  protected $table = "pemesanan";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllPemesanan()
  {
    $this->db->query("SELECT *, peminjam.ID_PEMINJAM, peminjam.USERNAME_PEMINJAM FROM " . $this->table . " INNER JOIN peminjam ON peminjam.ID_PEMINJAM = pemesanan.ID_PEMINJAM");
    return $this->db->resultSet();
  }

  public function generateKode()
  {
    $this->db->query("SELECT max(KODE_PEMESANAN) as kodeTerbesar FROM pemesanan");
    $data = $this->db->single();

    $kodeDenda = $data ? $data["kodeTerbesar"] : null;

    $urutan = (int) substr($kodeDenda, 4, 4) ?: 5;

    $urutan++;

    $huruf = "PMSN";

    $kodeDenda = $huruf . sprintf("%03s", $urutan);
    return $kodeDenda;
  }

  public function getDataPeminjam()
  {
    $this->db->query("SELECT USERNAME_PEMINJAM, ID_PEMINJAM FROM peminjam");
    return $this->db->resultSet();
  }

  public function insertPemesanan($request)
  {
    $this->db->query("INSERT INTO pemesanan VALUES('', :kode, :peminjam, :tgl_pemesanan, :sts_pemesanan)");
    $this->db->bind('kode', $request['kode']);
    $this->db->bind('peminjam', $request['peminjam']);
    $this->db->bind('tgl_pemesanan', $request['tgl_pemesanan']);
    $this->db->bind('sts_pemesanan', $request['sts_pemesanan']);

    $this->db->execute();
    return $this->db->rowCount();
  }
}
