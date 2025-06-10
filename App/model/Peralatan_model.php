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
}