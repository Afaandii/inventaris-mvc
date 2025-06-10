<?php
class Controller
{
  public function view($view, $data = [])
  {
    include_once "../App/view/" . $view . ".php";
  }

  public function model($model)
  {
    include_once "../App/model/" . $model . ".php";

    return new $model;
  }
}
