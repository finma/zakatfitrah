<?php

class Auth extends Controller
{
  public function index()
  {
    header('Location: login');
    exit;
  }

  // * view login
  public function login()
  {
    if (isset($_SESSION['login'])) {
      header('Location: ' . BASEURL . '/');
      exit;
    }

    $this->view('auth/login');
  }

  // * method login
  public function signin()
  {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $data['login'] = $this->model('Auth_model')->getUser($username);

    if ($password == $data['login']['password']) {
      $_SESSION['login'] = true;
      $_SESSION['user'] = $data['login'];
      header('Location: ' . BASEURL . '/');
      exit;
    } else {
      Flasher::setFlash('User', 'gagal', 'login', 'danger');
      header('Location: ' . BASEURL . '/auth/login');
      exit;
    }
  }

  // * method logout
  public function signout()
  {
    $_SESSION['login'] = false;
    session_unset();
    session_destroy();

    header('Location: ' . BASEURL . '/auth/login');
    exit;
  }
}
