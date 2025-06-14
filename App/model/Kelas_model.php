<?php
class Kelas_model
{
  protected $table = "kelas";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllKelas()
  {
    $this->db->query("SELECT * FROM " . $this->table);
    return $this->db->resultSet();
  }

  public function generateKode()
  {
    $this->db->query("SELECT max(KODE_KELAS) as kodeTerbesar FROM kelas");
    $data = $this->db->single();

    $kodeDenda = $data ? $data["kodeTerbesar"] : null;

    $urutan = (int) substr($kodeDenda, 3, 3) ?: 5;

    $urutan++;

    $huruf = "KLS";

    $kodeDenda = $huruf . sprintf("%03s", $urutan);
    return $kodeDenda;
  }

  public function insertKelas($request)
  {
    $this->db->query("INSERT INTO kelas VALUES('', :kode, :kelas)");
    $this->db->bind('kode', $request['kode']);
    $this->db->bind('kelas', $request['kelas']);

    $this->db->execute();
    return $this->db->rowCount();
  }
}
