<?php
class Merk_model
{
  protected $table = "merk";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllMerk()
  {
    $this->db->query("SELECT * FROM " . $this->table);
    return $this->db->resultSet();
  }

  public function generateKode()
  {
    $this->db->query("SELECT max(KODE_MERK) as kodeTerbesar FROM merk");
    $data = $this->db->single();

    $kodeDenda = $data ? $data["kodeTerbesar"] : null;

    $urutan = (int) substr($kodeDenda, 3, 3) ?: 5;

    $urutan++;

    $huruf = "MRK";

    $kodeDenda = $huruf . sprintf("%03s", $urutan);
    return $kodeDenda;
  }

  public function insertMerk($request)
  {
    $this->db->query("INSERT INTO merk VALUES('', :kode, :merk)");
    $this->db->bind('kode', $request['kode']);
    $this->db->bind('merk', $request['merk']);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function getMerkById($id)
  {
    $this->db->query("SELECT * FROM merk WHERE ID_MERK = :id");
    $this->db->bind('id', $id);

    return $this->db->single();
  }

  public function updateMerk($request)
  {
    $this->db->query("UPDATE merk SET KODE_MERK = :kode, NAMA_MEREK = :merk WHERE ID_MERK = :id");
    $this->db->bind('id', $request['id']);
    $this->db->bind('kode', $request['kode']);
    $this->db->bind('merk', $request['merk']);

    $this->db->execute();
    return $this->db->rowCount();
  }
}