<?php
class Jurusan_model
{
  protected $table = "jurusan";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllJurusan()
  {
    $this->db->query("SELECT * FROM " . $this->table);
    return $this->db->resultSet();
  }

  public function generateKode()
  {
    $this->db->query("SELECT max(KODE_JURUSAN) as kodeTerbesar FROM jurusan");
    $data = $this->db->single();

    $kodeDenda = $data ? $data["kodeTerbesar"] : null;

    $urutan = (int) substr($kodeDenda, 4, 4) ?: 5;

    $urutan++;

    $huruf = "JRSN";

    $kodeDenda = $huruf . sprintf("%03s", $urutan);
    return $kodeDenda;
  }

  public function insertJurusan($request)
  {
    $this->db->query("INSERT INTO jurusan VALUES('', :kode, :jurusan)");
    $this->db->bind('kode', $request['kode']);
    $this->db->bind('jurusan', $request['jurusan']);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function getJurusanById($id)
  {
    $this->db->query("SELECT * FROM jurusan WHERE ID_JURUSAN = :id");
    $this->db->bind('id', $id);

    return $this->db->single();
  }

  public function updateJurusan($request)
  {
    $this->db->query("UPDATE jurusan SET KODE_JURUSAN = :kode, NAMA_JURUSAN = :jurusan WHERE ID_JURUSAN = :id");
    $this->db->bind('id', $request['id']);
    $this->db->bind('kode', $request['kode']);
    $this->db->bind('jurusan', $request['jurusan']);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function deleteJurusan($id)
  {
    $this->db->query("DELETE FROM jurusan WHERE ID_JURUSAN = :id");
    $this->db->bind('id', $id);

    $this->db->execute();
    return $this->db->rowCount();
  }
}
