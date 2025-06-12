<?php
class Hari_model
{
  protected $table = "hari";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllHari()
  {
    $this->db->query("SELECT * FROM " . $this->table);
    return $this->db->resultSet();
  }

  public function generateKode()
  {
    $this->db->query("SELECT max(KODE_DENDA) as kodeTerbesar FROM denda");
    $data = $this->db->single();

    $kodeDenda = $data ? $data["kodeTerbesar"] : null;

    $urutan = (int) substr($kodeDenda, 3, 3) ?: 5;

    $urutan++;

    $huruf = "HRI";

    $kodeDenda = $huruf . sprintf("%03s", $urutan);
    return $kodeDenda;
  }

  public function insertHari($request)
  {
    $this->db->query("INSERT INTO hari VALUES('', :kode, :hari)");
    $this->db->bind('kode', $request['kodeHar']);
    $this->db->bind('hari', $request['hari']);

    $this->db->execute();
    return $this->db->rowCount();
  }
}
