<?php

class MustahikWarga_model
{
  private $table = 'mustahik_warga';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  // * mengambil semua data mustahik warga
  public function getAllMustahikWarga()
  {
    $this->db->query("SELECT * FROM $this->table");
    return $this->db->resultSet();
  }

  // * mengambil data mustahik warga berdasarkan id
  public function getMustahikWargaById($id)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_mustahikwarga = :id_mustahikwarga');
    $this->db->bind('id_mustahikwarga', $id);
    return $this->db->single();
  }

  // * mengambil data mustahik warga berdasarkan kategori
  public function getJumlahKKByKategori($kategori)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE kategori = :kategori');
    $this->db->bind('kategori', $kategori);
    return $this->db->resultSet();
  }

  // * menambahkan data mustahik warga
  public function postDataMustahikWarga($data)
  {
    $query = "INSERT INTO $this->table VALUES ('', :nama, :kategori, :hak)";

    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('kategori', $data['kategori']);
    $this->db->bind('hak', $data['hak']);

    $this->db->execute();

    return $this->db->rowCount();
  }

  // * mengupdate data mustahik warga
  public function updateDataMustahikWarga($data, $id)
  {
    $query = "UPDATE $this->table SET nama = :nama, kategori = :kategori, hak = :hak WHERE id_mustahikwarga = :id_mustahikwarga";

    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('kategori', $data['kategori']);
    $this->db->bind('hak', $data['hak']);
    $this->db->bind('id_mustahikwarga', $id);

    $this->db->execute();

    return $this->db->rowCount();
  }

  // * menghapus data mustahik warga
  public function deleteDataKategori($id)
  {
    $query = "DELETE FROM $this->table WHERE id_mustahikwarga = :id_mustahikwarga";

    $this->db->query($query);
    $this->db->bind('id_mustahikwarga', $id);

    $this->db->execute();

    return $this->db->rowCount();
  }
}
