<?php
class Auth extends Controller
{
  public function __construct()
  {
    if (!isset($_SESSION['user']) && isset($_COOKIE['username']) && isset($_COOKIE['token'])) {
      $auth = $this->model('Auth_model')->login($_COOKIE['username']);
      if ($auth && hash('sha256', $auth['PASSWORD_PEMINJAM']) === $_COOKIE['token']) {
        $_SESSION['user'] = $auth;
        header("Location: " . BASEURL . "/home");
        exit;
      }
    }
  }

  public function index()
  {
    $this->view('template/auth_header');
    $this->view('auth/login');
    $this->view('template/auth_footer');
  }

  public function register()
  {
    $this->view('template/auth_header');
    $this->view('auth/register');
    $this->view('template/auth_footer');
  }

  public function login()
  {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $remember = isset($_POST['remember']);

    $auth = $this->model('Auth_model')->login($username);

    if ($auth) {
      if ($auth['PASSWORD_PEMINJAM'] == $password) {
        $_SESSION['user'] = $auth;
        if ($remember) {
          setcookie('username', $username, time() + (86400 * 30), "/"); // 30 hari
          setcookie('token', password_hash($auth['PASSWORD_PEMINJAM'], PASSWORD_BCRYPT), time() + (86400 * 30), "/");
        }
        header("Location: " . BASEURL . "/home");
        die;
      } else {
        echo "<script>alert('Password salah!');window.location.href='" . BASEURL . "/auth';</script>";
      }
    } else {
      echo "<script>alert('Username tidak ditemukan!');window.location.href='" . BASEURL . "/auth';</script>";
    }
  }

  public function logout()
  {
    session_destroy();
    setcookie('username', '', time() - 3600, "/");
    setcookie('token', '', time() - 3600, "/");
    header("Location: " . BASEURL . "/auth");
  }
}
