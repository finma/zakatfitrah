<?php

class Muzakki_model
{
  private $table = 'muzakki';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  // * mengambil semua data muzakki
  public function getAllMuzakki()
  {
    $this->db->query("SELECT * FROM $this->table");
    return $this->db->resultSet();
  }

  // * mengambil data muzakki berdasarkan id
  public function getMuzakkiById($id)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_muzakki = :id_muzakki');
    $this->db->bind('id_muzakki', $id);
    return $this->db->single();
  }

  public function getSumJumlahTanggungan()
  {
    $this->db->query('SELECT SUM(jumlah_tanggungan) AS total_jiwa FROM ' . $this->table);
    return $this->db->resultSet();
  }

  // * menambahkan data muzakki
  public function postDataMuzakki($data)
  {
    $query = "INSERT INTO $this->table VALUES ('', :nama_muzakki, :jumlah_tanggungan, :keterangan)";

    $this->db->query($query);
    $this->db->bind('nama_muzakki', $data['nama_muzakki']);
    $this->db->bind('jumlah_tanggungan', $data['jumlah_tanggungan']);
    $this->db->bind('keterangan', $data['keterangan']);

    $this->db->execute();

    return $this->db->rowCount();
  }

  // * mengupdate data muzakki
  public function updateDataMuzakki($data, $id)
  {
    $query = "UPDATE $this->table SET nama_muzakki = :nama_muzakki, jumlah_tanggungan = :jumlah_tanggungan, keterangan = :keterangan WHERE id_muzakki = :id_muzakki";

    $this->db->query($query);
    $this->db->bind('nama_muzakki', $data['nama_muzakki']);
    $this->db->bind('jumlah_tanggungan', $data['jumlah_tanggungan']);
    $this->db->bind('keterangan', $data['keterangan']);
    $this->db->bind('id_muzakki', $id);

    $this->db->execute();

    return $this->db->rowCount();
  }

  // * menghapus data muzakki
  public function deleteDataMuzakki($id)
  {
    $query = "DELETE FROM $this->table WHERE id_muzakki = :id_muzakki";

    $this->db->query($query);
    $this->db->bind('id_muzakki', $id);

    $this->db->execute();

    return $this->db->rowCount();
  }
}
