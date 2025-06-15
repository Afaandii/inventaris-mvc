<?php
class Peminjaman_guru_model
{
  protected $table = "peminjaman_guru";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllPeminjamanGuru()
  {
    $this->db->query(
      "SELECT *, peminjam.USERNAME_PEMINJAM FROM " . $this->table . " INNER JOIN peminjam ON peminjam.ID_PEMINJAM = peminjaman_guru.ID_PEMINJAM"
    );
    return $this->db->resultSet();
  }

  public function generateKode()
  {
    $this->db->query("SELECT max(KODE_PEMINJAMAN_GURU) as kodeTerbesar FROM peminjaman_guru");
    $data = $this->db->single();

    $kodeDenda = $data ? $data["kodeTerbesar"] : null;

    $urutan = (int) substr($kodeDenda, 8, 8) ?: 9;

    $urutan++;

    $huruf = "PMJMN_GR";

    $kodeDenda = $huruf . sprintf("%03s", $urutan);
    return $kodeDenda;
  }

  public function getDataPeminjam()
  {
    $this->db->query("SELECT USERNAME_PEMINJAM, ID_PEMINJAM FROM peminjam");
    return $this->db->resultSet();
  }

  public function insertPeminjamanGuru($request)
  {
    $this->db->query("INSERT INTO peminjaman_guru VALUES('', :kode, :peminjam, :ket_peminjam)");
    $this->db->bind('kode', $request['kode']);
    $this->db->bind('peminjam', $request['peminjam']);
    $this->db->bind('ket_peminjam', $request['ket_peminjam']);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function getPeminjamanGuruById($id)
  {
    $this->db->query("SELECT * FROM peminjaman_guru INNER JOIN peminjam ON peminjam.ID_PEMINJAM = peminjaman_guru.ID_PEMINJAM WHERE ID_PEMINJAMAN_GURU = :id");
    $this->db->bind('id', $id);

    return $this->db->single();
  }

  public function updatePeminjamanGuru($request)
  {
    $this->db->query("UPDATE peminjaman_guru SET KODE_PEMINJAMAN_GURU = :kode, ID_PEMINJAM = :peminjam, KETERANGAN_PEMINJAMAN = :ket_peminjaman WHERE ID_PEMINJAMAN_GURU = :id");
    $this->db->bind('id', $request['id']);
    $this->db->bind('kode', $request['kode']);
    $this->db->bind('peminjam', $request['peminjam']);
    $this->db->bind('ket_peminjaman', $request['ket_peminjaman']);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function deletePeminjamanGuru($id)
  {
    $this->db->query("DELETE FROM peminjaman_guru WHERE ID_PEMINJAMAN_GURU = :id");
    $this->db->bind('id', $id);

    $this->db->execute();
    return $this->db->rowCount();
  }
}
