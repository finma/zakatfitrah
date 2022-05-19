<?php

class MustahikLainnya_model
{
  private $table = 'mustahik_lainnya';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  // * mengambil semua data mustahik lainnya
  public function getAllMustahikLainnya()
  {
    $this->db->query("SELECT * FROM $this->table");
    return $this->db->resultSet();
  }

  // * mengambil data mustahik lainnya berdasarkan id
  public function getMustahikLainnyaById($id)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_mustahiklainnya = :id_mustahiklainnya');
    $this->db->bind('id_mustahiklainnya', $id);
    return $this->db->single();
  }

  // * menambahkan data mustahik lainnya
  public function postDataMustahikLainnya($data)
  {
    $query = "INSERT INTO $this->table VALUES ('', :nama, :kategori, :hak)";

    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('kategori', $data['kategori']);
    $this->db->bind('hak', $data['hak']);

    $this->db->execute();

    return $this->db->rowCount();
  }

  // * mengupdate data mustahik lainnya
  public function updateDataMustahikLainnya($data, $id)
  {
    $query = "UPDATE $this->table SET nama = :nama, kategori = :kategori, hak = :hak WHERE id_mustahiklainnya = :id_mustahiklainnya";

    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('kategori', $data['kategori']);
    $this->db->bind('hak', $data['hak']);
    $this->db->bind('id_mustahiklainnya', $id);

    $this->db->execute();

    return $this->db->rowCount();
  }

  // * menghapus data mustahik lainnya
  public function deleteDataMustahikLainnya($id)
  {
    $query = "DELETE FROM $this->table WHERE id_mustahiklainnya = :id_mustahiklainnya";

    $this->db->query($query);
    $this->db->bind('id_mustahiklainnya', $id);

    $this->db->execute();

    return $this->db->rowCount();
  }
}
