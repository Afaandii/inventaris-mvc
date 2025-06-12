<?php
class Jabatan_model
{
  protected $table = 'jabatan';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllJabatan()
  {
    $this->db->query("SELECT * FROM " . $this->table);
    return $this->db->resultSet();
  }

  public function generateKode()
  {
    $this->db->query("SELECT max(KODE_JABATAN) as kodeTerbesar FROM jabatan");
    $data = $this->db->single();

    $kodeDenda = $data ? $data["kodeTerbesar"] : null;

    $urutan = (int) substr($kodeDenda, 4, 4) ?: 5;

    $urutan++;

    $huruf = "JBTN";

    $kodeDenda = $huruf . sprintf("%03s", $urutan);
    return $kodeDenda;
  }

  public function insertJabatan($request)
  {
    $this->db->query("INSERT INTO jabatan VALUES ('', :kode, :jabatan)");
    $this->db->bind('kode', $request['kodeJab']);
    $this->db->bind('jabatan', $request['jabatan']);

    $this->db->execute();
    return $this->db->rowCount();
  }
}
