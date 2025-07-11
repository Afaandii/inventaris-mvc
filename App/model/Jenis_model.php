<?php
class Jenis_model
{
  protected $table = "jenis";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllJenis()
  {
    $this->db->query("SELECT * FROM " . $this->table);
    return $this->db->resultSet();
  }

  public function generateKode()
  {
    $this->db->query("SELECT max(KODE_JENIS) as kodeTerbesar FROM jenis");
    $data = $this->db->single();

    $kodeDenda = $data ? $data["kodeTerbesar"] : null;

    $urutan = (int) substr($kodeDenda, 3, 3) ?: 5;

    $urutan++;

    $huruf = "JNS";

    $kodeDenda = $huruf . sprintf("%03s", $urutan);
    return $kodeDenda;
  }

  public function insertJenis($request)
  {
    $this->db->query("INSERT INTO jenis VALUES('', :kode, :jenis)");
    $this->db->bind('kode', $request['kode']);
    $this->db->bind('jenis', $request['jenis']);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function getJenisById($id)
  {
    $this->db->query("SELECT * FROM jenis WHERE ID_JENIS = :id");
    $this->db->bind('id', $id);

    return $this->db->single();
  }

  public function updateJenis($request)
  {
    $this->db->query("UPDATE jenis SET KODE_JENIS = :kode, NAMA_JENIS = :jenis WHERE ID_JENIS = :id");
    $this->db->bind('id', $request['id']);
    $this->db->bind('kode', $request['kode']);
    $this->db->bind('jenis', $request['jenis']);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function deleteJenis($id)
  {
    $this->db->query("DELETE FROM jenis WHERE ID_JENIS = :id");
    $this->db->bind('id', $id);

    $this->db->execute();
    return $this->db->rowCount();
  }
}