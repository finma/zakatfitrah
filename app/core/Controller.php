<?php

class Controller
{
  public function view($view, $data = [])
  {
    require_once '../app/views/' . $view . '.php';
  }

  public function model($model)
  {
    require_once '../app/models/' . $model . '.php';
    return new $model;
  }

  // * mengecek apakah user sudah login
  public function isLogin()
  {
    if (!isset($_SESSION['login'])) {
      header('Location: ' . BASEURL . '/auth/login');
      exit;
    }
  }
}
