<?php
// file ini digunakan untuk menangani pesan cepat(flash message) untuk validasi crud.

class Flasher
{
  public static function setFlash($pesan, $aksi, $tipe, $table)
  {
    $_SESSION['flash'] = [
      'pesan' => $pesan,
      'aksi' => $aksi,
      'tipe' => $tipe,
      'table' => $table,
    ];
  }

  public static function flash()
  {
    if (isset($_SESSION['flash'])) {
      echo '
            <div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert">
              Data ' . $_SESSION['flash']['table'] . '<strong> ' . $_SESSION['flash']['pesan'] . '</strong> ' . $_SESSION['flash']['aksi'] . '
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
      unset($_SESSION['flash']);
    }
  }
}
