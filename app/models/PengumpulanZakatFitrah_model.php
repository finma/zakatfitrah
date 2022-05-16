<?php

class PengumpulanZakatFitrah_model
{
  private $table = 'bayarzakat';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  // * mengambil semua kategori mustahik
  public function getAllZakat()
  {
    $this->db->query("SELECT * FROM $this->table");
    return $this->db->resultSet();
  }

  // * mengambil data zakat fitrah berdasarkan id
  public function getZakatById($id)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_zakat = :id_zakat');
    $this->db->bind('id_zakat', $id);
    return $this->db->single();
  }

  // * menambahkan data zakat fitrah
  public function postDataZakat($data)
  {
    $query = "INSERT INTO $this->table VALUES ('', :nama_KK, :jumlah_tanggungan, :jenis_bayar, :jumlah_tanggunganyangdibayar, :bayar_beras, :bayar_uang)";

    $this->db->query($query);
    $this->db->bind('nama_KK', $data['nama_KK']);
    $this->db->bind('jumlah_tanggungan', $data['jumlah_tanggungan']);
    $this->db->bind('jenis_bayar', $data['jenis_bayar']);
    $this->db->bind('jumlah_tanggunganyangdibayar', $data['jumlah_tanggunganyangdibayar']);
    $this->db->bind('bayar_beras', $data['bayar_beras']);
    $this->db->bind('bayar_uang', $data['bayar_uang']);

    $this->db->execute();

    return $this->db->rowCount();
  }

  // * mengupdate data zakat fitrah
  public function updateDataZakat($data, $id)
  {
    $query = "UPDATE $this->table SET nama_KK = :nama_KK, jumlah_tanggungan = :jumlah_tanggungan, jenis_bayar = :jenis_bayar, jumlah_tanggunganyangdibayar = :jumlah_tanggunganyangdibayar, bayar_beras = :bayar_beras, bayar_uang = :bayar_uang WHERE id_zakat = :id_zakat";

    $this->db->query($query);
    $this->db->bind('nama_KK', $data['nama_KK']);
    $this->db->bind('jumlah_tanggungan', $data['jumlah_tanggungan']);
    $this->db->bind('jenis_bayar', $data['jenis_bayar']);
    $this->db->bind('jumlah_tanggunganyangdibayar', $data['jumlah_tanggunganyangdibayar']);
    $this->db->bind('bayar_beras', $data['bayar_beras']);
    $this->db->bind('bayar_uang', $data['bayar_uang']);
    $this->db->bind('id_zakat', $id);

    $this->db->execute();

    return $this->db->rowCount();
  }

  // * menghapus zakat fitrah
  public function deleteDataZakat($id)
  {
    $query = "DELETE FROM $this->table WHERE id_zakat = :id_zakat";

    $this->db->query($query);
    $this->db->bind('id_zakat', $id);

    $this->db->execute();

    return $this->db->rowCount();
  }
}
