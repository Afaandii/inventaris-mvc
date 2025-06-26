<?php
class Auth extends Controller
{
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

    $auth = $this->model('Auth_model')->login($username);

    if ($auth) {
      if ($auth['PASSWORD_PEMINJAM'] == $password) {
        $_SESSION['user'] = $auth;
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
    header("Location: " . BASEURL . "/auth");
  }
}
