<?php
class Warna_model
{
  protected $table = "warna";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllWarna()
  {
    $this->db->query("SELECT * FROM " . $this->table);
    return $this->db->resultSet();
  }

  public function generateKode()
  {
    $this->db->query("SELECT max(KODE_WARNA) as kodeTerbesar FROM warna");
    $data = $this->db->single();

    $kodeDenda = $data ? $data["kodeTerbesar"] : null;

    $urutan = (int) substr($kodeDenda, 3, 3) ?: 5;

    $urutan++;

    $huruf = "WRN";

    $kodeDenda = $huruf . sprintf("%03s", $urutan);
    return $kodeDenda;
  }

  public function insertWarna($request)
  {
    $this->db->query("INSERT INTO warna VALUES('', :kode, :warna)");
    $this->db->bind('kode', $request['kode']);
    $this->db->bind('warna', $request['warna']);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function getWarnaById($id)
  {
    $this->db->query("SELECT * FROM warna WHERE ID_WARNA = :id");
    $this->db->bind('id', $id);

    return $this->db->single();
  }

  public function updateWarna($request)
  {
    $this->db->query("UPDATE warna SET KODE_WARNA = :kode, NAMA_WARNA = :warna WHERE ID_WARNA = :id");
    $this->db->bind('id', $request['id']);
    $this->db->bind('kode', $request['kode']);
    $this->db->bind('warna', $request['warna']);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function deleteWarna($id)
  {
    $this->db->query("DELETE FROM warna WHERE ID_WARNA = :id");
    $this->db->bind('id', $id);

    $this->db->execute();
    return $this->db->rowCount();
  }
}