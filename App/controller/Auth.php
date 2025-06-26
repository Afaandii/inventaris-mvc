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
}
