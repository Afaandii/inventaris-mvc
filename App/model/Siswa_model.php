<?php
class Siswa_model
{
  protected $table = 'siswa';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllSiswa()
  {
    $this->db->query("SELECT * FROM " . $this->table . "
      INNER JOIN peminjam ON peminjam.ID_PEMINJAM = siswa.ID_PEMINJAM
      INNER JOIN kelas_siswa ON kelas_siswa.ID_KELASSISWA = siswa.ID_KELASSISWA");
    return $this->db->resultSet();
  }

  public function generateKode()
  {
    $this->db->query("SELECT max(KODE_SISWA) as kodeTerbesar FROM siswa");
    $data = $this->db->single();

    $kodeDenda = $data ? $data["kodeTerbesar"] : null;

    $urutan = (int) substr($kodeDenda, 3, 3) ?: 5;

    $urutan++;

    $huruf = "SIS";

    $kodeDenda = $huruf . sprintf("%03s", $urutan);
    return $kodeDenda;
  }

  public function getDataPeminjam()
  {
    $this->db->query("SELECT ID_PEMINJAM, USERNAME_PEMINJAM FROM peminjam");
    return $this->db->resultSet();
  }

  public function getDataKelsis()
  {
    $this->db->query("SELECT ID_KELASSISWA, NAMA_KELASSISWA FROM kelas_siswa");
    return $this->db->resultSet();
  }

  public function insertSiswa($request)
  {
    $this->db->query("INSERT INTO siswa VALUES('', :kode, :peminjam, :kelsis, :nis, :nama, :alamat, :angkatan, :keterangan)");
    $this->db->bind('kode', $request['kode']);
    $this->db->bind('peminjam', $request['peminjam']);
    $this->db->bind('kelsis', $request['kelsis']);
    $this->db->bind('nis', $request['nis']);
    $this->db->bind('nama', $request['nama']);
    $this->db->bind('alamat', $request['alamat']);
    $this->db->bind('angkatan', $request['angkatan']);
    $this->db->bind('keterangan', $request['keterangan']);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function getSiswaById($id)
  {
    $this->db->query("SELECT *, peminjam.KODE_PEMINJAM, kelas_siswa.KODE_KELASSISWA FROM siswa
   INNER JOIN peminjam ON peminjam.ID_PEMINJAM = siswa.ID_PEMINJAM
   INNER JOIN kelas_siswa ON kelas_siswa.ID_KELASSISWA = siswa.ID_KELASSISWA
   WHERE ID_SISWA = :id");
    $this->db->bind('id', $id);

    return $this->db->single();
  }

  public function updateSiswa($request)
  {
    $this->db->query("UPDATE siswa SET KODE_SISWA = :kode, ID_PEMINJAM = :peminjam, ID_KELASSISWA = :kelsis, NIS = :nis, NAMA_SISWA = :nama, ALAMAT_SISWA = :alamat, ANGKATAN_SISWA = :angkatan, KETERANGAN_SISWA = :keterangan WHERE ID_SISWA = :id");
    $this->db->bind('id', $request['id']);
    $this->db->bind('kode', $request['kode']);
    $this->db->bind('peminjam', $request['peminjam']);
    $this->db->bind('kelsis', $request['kelsis']);
    $this->db->bind('nis', $request['nis']);
    $this->db->bind('nama', $request['nama']);
    $this->db->bind('alamat', $request['alamat']);
    $this->db->bind('angkatan', $request['angkatan']);
    $this->db->bind('keterangan', $request['keterangan']);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function deleteSiswa($id)
  {
    $this->db->query("DELETE FROM siswa WHERE ID_SISWA = :id");
    $this->db->bind('id', $id);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function getKelasSiswaByPeminjam($idPeminjam)
  {
    $query = "SELECT kelas_siswa.ID_KELASSISWA, kelas_siswa.NAMA_KELASSISWA
            FROM siswa
            JOIN kelas_siswa ON siswa.ID_KELASSISWA = kelas_siswa.ID_KELASSISWA
            WHERE siswa.ID_PEMINJAM = :id_peminjam";

    $this->db->query($query);
    $this->db->bind('id_peminjam', $idPeminjam);
    return $this->db->single();
  }
}
