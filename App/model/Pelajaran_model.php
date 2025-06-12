<?php
class Pelajaran_model
{
  protected $table = "pelajaran";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllPelajaran()
  {
    $this->db->query("SELECT * FROM " . $this->table);
    return $this->db->resultSet();
  }

  public function generateKode()
  {
    $this->db->query("SELECT max(KODE_PELAJARAN) as kodeTerbesar FROM pelajaran");
    $data = $this->db->single();

    $kodeDenda = $data ? $data["kodeTerbesar"] : null;

    $urutan = (int) substr($kodeDenda, 4, 4) ?: 5;

    $urutan++;

    $huruf = "PLJN";

    $kodeDenda = $huruf . sprintf("%03s", $urutan);
    return $kodeDenda;
  }

  public function insertPelajaran($request)
  {
    $this->db->query("INSERT INTO pelajaran VALUES('', :kode, :pelajaran)");
    $this->db->bind('kode', $request['kodePel']);
    $this->db->bind('pelajaran', $request['pelajaran']);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function getPelajaranById($id)
  {
    $this->db->query("SELECT * FROM pelajaran WHERE ID_PELAJARAN = :id");
    $this->db->bind('id', $id);

    return $this->db->single();
  }

  public function updatePelajaran($request)
  {
    $this->db->query("UPDATE pelajaran SET KODE_PELAJARAN = :kode, NAMA_PELAJARAN = :pelajaran WHERE ID_PELAJARAN = :id");
    $this->db->bind('id', $request['id']);
    $this->db->bind('kode', $request['kode']);
    $this->db->bind('pelajaran', $request['pelajaran']);

    $this->db->execute();
    return $this->db->rowCount();
  }
}
