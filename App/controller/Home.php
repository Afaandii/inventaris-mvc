<?php
class Home extends Controller
{
  public function index()
  {
    if (!isset($_SESSION['user'])) {
      header("Location: " . BASEURL . "/auth");
      exit;
    }

    $this->view('template/header');
    $this->view('home/home');
    $this->view('template/sidebar');
    $this->view('template/footer');
  }
}
