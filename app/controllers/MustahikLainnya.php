<?php

class MustahikLainnya extends Controller
{
  // * view index
  public function index()
  {
    $this->isLogin();

    $data['judul'] = 'Mustahik Lainnya';
    $data['no'] = 1;
    $data['link'] = 'mustahiklainnya';
    $data['dataMustahikLainnya'] = $this->model('MustahikLainnya_model')->getAllMustahikLainnya();

    $this->view('templates/header', $data);
    $this->view('mustahik_lainnya/index', $data);
    $this->view('templates/footer');
  }

  // * view tambah data
  public function tambah()
  {
    $this->isLogin();

    $data['judul'] = 'Tambah Mustahik Lainnya';
    $data['link'] = 'mustahiklainnya';
    $data['dataKategori'] = $this->model('Kategori_model')->getAllKategori();

    $this->view('templates/header', $data);
    $this->view('mustahik_lainnya/tambah', $data);
    $this->view('templates/footer');
  }

  // * method tambah data
  public function post()
  {
    $this->isLogin();

    if ($this->model('MustahikLainnya_model')->postDataMustahikLainnya($_POST) > 0) {
      Flasher::setFlash('Mustahik Lainnya', 'berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASEURL . '/mustahiklainnya');
      exit;
    } else {
      Flasher::setFlash('Mustahik Lainnya', 'gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASEURL . '/mustahiklainnya');
      exit;
    }
  }

  // * view edit 
  public function edit($id)
  {
    $this->isLogin();

    $data['judul'] = 'Mustahik Lainnya';
    $data['link'] = 'mustahiklainnya';
    $data['id'] = $id;
    $data['dataMustahikLainnya'] = $this->model('MustahikLainnya_model')->getMustahikLainnyaById($id);
    $data['dataKategori'] = $this->model('Kategori_model')->getAllKategori();

    $this->view('templates/header', $data);
    $this->view('mustahik_lainnya/edit', $data);
    $this->view('templates/footer');
  }

  // * method update data
  public function update($id)
  {
    $this->isLogin();

    if ($this->model('MustahikLainnya_model')->updateDataMustahikLainnya($_POST, $id) > 0) {
      Flasher::setFlash('Mustahik Lainnya', 'berhasil', 'diupdate', 'success');
      header('Location: ' . BASEURL . '/mustahiklainnya');
      exit;
    } else {
      Flasher::setFlash('Mustahik Lainnya', 'gagal', 'diupdate', 'danger');
      header('Location: ' . BASEURL . '/mustahiklainnya');
      exit;
    }
  }

  // * method hapus data
  public function delete($id)
  {
    $this->isLogin();

    if ($this->model('MustahikLainnya_model')->deleteDataMustahikLainnya($id) > 0) {
      Flasher::setFlash('Mustahik Lainnya', 'berhasil', 'dihapus', 'success');
      header('Location: ' . BASEURL . '/mustahiklainnya');
      exit;
    } else {
      Flasher::setFlash('Mustahik Lainnya', 'gagal', 'dihapus', 'danger');
      header('Location: ' . BASEURL . '/mustahiklainnya');
      exit;
    }
  }

  // * view detail 
  public function detail($id)
  {
    $this->isLogin();

    $data['judul'] = 'Mustahik Lainnya';
    $data['link'] = 'mustahiklainnya';
    $data['id'] = $id;
    $data['dataMustahikLainnya'] = $this->model('MustahikLainnya_model')->getMustahikLainnyaById($id);
    $data['dataKategori'] = $this->model('Kategori_model')->getAllKategori();

    $this->view('templates/header', $data);
    $this->view('mustahik_lainnya/detail', $data);
    $this->view('templates/footer');
  }
}
