<?php
class Perbaikan_model
{
  protected $table = "perbaikan";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllPerbaikan()
  {
    $this->db->query(
      "SELECT *, guru.NAMA_GURU FROM " . $this->table . " INNER JOIN guru ON perbaikan.ID_GURU = guru.ID_GURU"
    );
    return $this->db->resultSet();
  }

  public function getDataGuru()
  {
    $this->db->query("SELECT ID_GURU, NAMA_GURU FROM guru");
    return $this->db->resultSet();
  }

  public function generateKode()
  {
    $this->db->query("SELECT max(KODE_PERBAIKAN) as kodeTerbesar FROM perbaikan");
    $data = $this->db->single();

    $kodeDenda = $data ? $data["kodeTerbesar"] : null;

    $urutan = (int) substr($kodeDenda, 4, 4) ?: 5;

    $urutan++;

    $huruf = "PRBK";

    $kodeDenda = $huruf . sprintf("%03s", $urutan);
    return $kodeDenda;
  }

  public function insertPerbaikan($request)
  {
    $this->db->query("INSERT INTO perbaikan VALUES('', :kode, :guru, :tgl_perbaikan)");
    $this->db->bind('kode', $request['kode']);
    $this->db->bind('guru', $request['guru']);
    $this->db->bind('tgl_perbaikan', $request['tgl_perbaikan']);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function getPerbaikanById($id)
  {
    $this->db->query("SELECT * FROM perbaikan WHERE ID_PERBAIKAN = :id");
    $this->db->bind('id', $id);

    return $this->db->single();
  }

  public function updatePerbaikan($request)
  {
    $this->db->query("UPDATE perbaikan SET KODE_PERBAIKAN = :kode, ID_GURU = :guru, TANGGAL_PERBAIKAN = :tgl_perbaikan WHERE ID_PERBAIKAN = :id");
    $this->db->bind('id', $request['id']);
    $this->db->bind('kode', $request['kode']);
    $this->db->bind('guru', $request['guru']);
    $this->db->bind('tgl_perbaikan', $request['tgl_perbaikan']);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function deletePerbaikan($id)
  {
    $this->db->query("DELETE FROM perbaikan WHERE ID_PERBAIKAN = :id");
    $this->db->bind('id', $id);

    $this->db->execute();
    return $this->db->rowCount();
  }
}
