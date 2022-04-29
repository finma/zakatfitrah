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
    if ($_POST['username'] == 'finma' && $_POST['password'] == 'finma') {
      $_SESSION['login'] = true;
      header('Location: ' . BASEURL . '/');
      exit;
    } else {
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
