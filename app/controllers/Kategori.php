<?php

class Kategori extends Controller
{
  // * view index
  public function index()
  {
    $this->isLogin();

    $data['judul'] = 'Kategori';
    $data['no'] = 1;
    $data['link'] = 'kategori';
    $data['dataKategori'] = $this->model('Kategori_model')->getAllKategori();

    $this->view('templates/header', $data);
    $this->view('kategori/index', $data);
    $this->view('templates/footer');
  }

  // * view tambah data
  public function tambah()
  {
    $this->isLogin();

    $data['judul'] = 'Tambah Kategori';
    $data['link'] = 'kategori';

    $this->view('templates/header', $data);
    $this->view('kategori/tambah', $data);
    $this->view('templates/footer');
  }

  // * method tambah data
  public function post()
  {
    $this->isLogin();

    if ($this->model('Kategori_model')->postDataKategori($_POST) > 0) {
      Flasher::setFlash('Kategori Mustahik', 'berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASEURL . '/kategori');
      exit;
    } else {
      Flasher::setFlash('Kategori Mustahik', 'gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASEURL . '/kategori');
      exit;
    }
  }

  // * view edit 
  public function edit($id)
  {
    $this->isLogin();

    $data['judul'] = 'Edit Kategori Mustahik';
    $data['link'] = 'kategori';
    $data['id'] = $id;
    $data['dataKategori'] = $this->model('Kategori_model')->getKategoriById($id);

    $this->view('templates/header', $data);
    $this->view('kategori/edit', $data);
    $this->view('templates/footer');
  }

  // * method update data
  public function update($id)
  {
    $this->isLogin();

    if ($this->model('Kategori_model')->updateDataKategori($_POST, $id) > 0) {
      Flasher::setFlash('Kategori Mustahik', 'berhasil', 'diupdate', 'success');
      header('Location: ' . BASEURL . '/kategori');
      exit;
    } else {
      Flasher::setFlash('Kategori Mustahik', 'gagal', 'diupdate', 'danger');
      header('Location: ' . BASEURL . '/kategori');
      exit;
    }
  }

  // * method hapus data
  public function delete($id)
  {
    $this->isLogin();

    if ($this->model('Kategori_model')->deleteDataKategori($id) > 0) {
      Flasher::setFlash('Kategori Mustahik', 'berhasil', 'dihapus', 'success');
      header('Location: ' . BASEURL . '/kategori');
      exit;
    } else {
      Flasher::setFlash('Kategori Mustahik', 'gagal', 'dihapus', 'danger');
      header('Location: ' . BASEURL . '/kategori');
      exit;
    }
  }

  // * view detail 
  public function detail($id)
  {
    $this->isLogin();

    $data['judul'] = 'Detail Kategori Mustahik';
    $data['link'] = 'kategori';
    $data['id'] = $id;
    $data['dataKategori'] = $this->model('Kategori_model')->getKategoriById($id);

    $this->view('templates/header', $data);
    $this->view('kategori/detail', $data);
    $this->view('templates/footer');
  }
}
