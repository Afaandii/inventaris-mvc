<?php
class Auth_model
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }
  public function login($username)
  {
    $this->db->query("SELECT USERNAME_PEMINJAM, PASSWORD_PEMINJAM FROM peminjam WHERE USERNAME_PEMINJAM = :username");
    $this->db->bind('username', $username);

    return $this->db->single();
  }
}
