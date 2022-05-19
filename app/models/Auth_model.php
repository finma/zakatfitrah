<?php

class Auth_model
{
  private $table = 'users';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  // * mengambil data user
  public function getUser($username)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE username = :username');
    $this->db->bind('username', $username);
    return $this->db->single();
  }
}
