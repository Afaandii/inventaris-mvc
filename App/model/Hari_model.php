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
    $this->db->query("SELECT max(KODE_HARI) as kodeTerbesar FROM hari");
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

  public function getHariById($id)
  {
    $this->db->query("SELECT * FROM hari WHERE ID_HARI = :id");
    $this->db->bind('id', $id);

    return $this->db->single();
  }

  public function updateHari($request)
  {
    $this->db->query("UPDATE hari SET KODE_HARI = :kode, NAMA_HARI = :hari WHERE ID_HARI = :id");
    $this->db->bind('id', $request['id']);
    $this->db->bind('kode', $request['kodeHar']);
    $this->db->bind('hari', $request['hari']);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function deleteHari($id)
  {
    $this->db->query("DELETE FROM hari WHERE ID_HARI = :id");
    $this->db->bind('id', $id);

    $this->db->execute();
    return $this->db->rowCount();
  }
}
