<?php
class Peralatan_model
{
  protected $table = 'peralatan';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllPeralatan()
  {
    $this->db->query('SELECT *, jenis.KODE_JENIS, merk.KODE_MERK, warna.KODE_WARNA FROM ' .     $this->table . '
    INNER JOIN jenis ON jenis.ID_JENIS = peralatan.ID_JENIS
    INNER JOIN merk ON merk.ID_MERK = peralatan.ID_MERK
    INNER JOIN warna ON warna.ID_WARNA = peralatan.ID_WARNA');
    return $this->db->resultSet();
  }

  public function generateKode()
  {
    $this->db->query("SELECT max(KODE_PERALATAN) as kodeTerbesar FROM peralatan");
    $data = $this->db->single();

    $kodeDenda = $data ? $data["kodeTerbesar"] : null;

    $urutan = (int) substr($kodeDenda, 4, 4) ?: 5;

    $urutan++;

    $huruf = "PRLT";

    $kodeDenda = $huruf . sprintf("%03s", $urutan);
    return $kodeDenda;
  }

  public function getDataJenis()
  {
    $this->db->query("SELECT ID_JENIS, NAMA_JENIS FROM jenis");
    return $this->db->resultSet();
  }

  public function getDataMerk()
  {
    $this->db->query("SELECT ID_MERK, NAMA_MEREK FROM merk");
    return $this->db->resultSet();
  }

  public function getDataWarna()
  {
    $this->db->query("SELECT ID_WARNA, NAMA_WARNA FROM warna");
    return $this->db->resultSet();
  }
}