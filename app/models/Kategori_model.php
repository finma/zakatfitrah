<?php

class Kategori_model
{
  private $table = 'kategori_mustahik';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  // * mengambil semua kategori mustahik
  public function getAllKategori()
  {
    $this->db->query("SELECT * FROM $this->table");
    return $this->db->resultSet();
  }

  // * mengambil data kategori mustahik berdasarkan id
  public function getKategoriById($id)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_kategori = :id_kategori');
    $this->db->bind('id_kategori', $id);
    return $this->db->single();
  }

  // * menambahkan data kategori mustahik
  public function postDataKategori($data)
  {
    $query = "INSERT INTO $this->table VALUES ('', :nama_kategori, :jumlah_hak)";

    $this->db->query($query);
    $this->db->bind('nama_kategori', $data['nama_kategori']);
    $this->db->bind('jumlah_hak', $data['jumlah_hak']);

    $this->db->execute();

    return $this->db->rowCount();
  }

  // * mengupdate data kategori mustahik
  public function updateDataKategori($data, $id)
  {
    $query = "UPDATE $this->table SET nama_kategori = :nama_kategori, jumlah_hak = :jumlah_hak WHERE id_kategori = :id_kategori";

    $this->db->query($query);
    $this->db->bind('nama_kategori', $data['nama_kategori']);
    $this->db->bind('jumlah_hak', $data['jumlah_hak']);
    $this->db->bind('id_kategori', $id);

    $this->db->execute();

    return $this->db->rowCount();
  }

  // * menghapus kategori mustahik
  public function deleteDataKategori($id)
  {
    $query = "DELETE FROM $this->table WHERE id_kategori = :id_kategori";

    $this->db->query($query);
    $this->db->bind('id_kategori', $id);

    $this->db->execute();

    return $this->db->rowCount();
  }
}
