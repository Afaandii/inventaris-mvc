<?php
class Home extends Controller
{
  public function index()
  {
    $this->view('template/header');
    $this->view('home');
    $this->view('template/sidebar');
    $this->view('template/footer');
  }
}