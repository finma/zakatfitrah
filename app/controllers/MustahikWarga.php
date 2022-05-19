<?php

class MustahikWarga extends Controller
{
  // * view index
  public function index()
  {
    $this->isLogin();

    $data['judul'] = 'Mustahik Warga';
    $data['no'] = 1;
    $data['link'] = 'mustahikwarga';
    $data['dataMustahikWarga'] = $this->model('MustahikWarga_model')->getAllMustahikWarga();

    $this->view('templates/header', $data);
    $this->view('mustahik_warga/index', $data);
    $this->view('templates/footer');
  }

  // * view tambah data
  public function tambah()
  {
    $this->isLogin();

    $data['judul'] = 'Tambah Mustahik Warga';
    $data['link'] = 'mustahikwarga';
    $data['dataKategori'] = $this->model('Kategori_model')->getAllKategori();

    $this->view('templates/header', $data);
    $this->view('mustahik_warga/tambah', $data);
    $this->view('templates/footer');
  }

  // * method tambah data
  public function post()
  {
    $this->isLogin();

    if ($this->model('MustahikWarga_model')->postDataMustahikWarga($_POST) > 0) {
      Flasher::setFlash('Mustahik Warga', 'berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASEURL . '/mustahikwarga');
      exit;
    } else {
      Flasher::setFlash('Mustahik Warga', 'gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASEURL . '/mustahikwarga');
      exit;
    }
  }

  // * view edit 
  public function edit($id)
  {
    $this->isLogin();

    $data['judul'] = 'Mustahik Warga';
    $data['link'] = 'mustahikwarga';
    $data['id'] = $id;
    $data['dataMustahikWarga'] = $this->model('MustahikWarga_model')->getMustahikWargaById($id);
    $data['dataKategori'] = $this->model('Kategori_model')->getAllKategori();

    $this->view('templates/header', $data);
    $this->view('mustahik_warga/edit', $data);
    $this->view('templates/footer');
  }

  // * method update data
  public function update($id)
  {
    $this->isLogin();

    if ($this->model('MustahikWarga_model')->updateDataMustahikWarga($_POST, $id) > 0) {
      Flasher::setFlash('Mustahik Warga', 'berhasil', 'diupdate', 'success');
      header('Location: ' . BASEURL . '/mustahikwarga');
      exit;
    } else {
      Flasher::setFlash('Mustahik Warga', 'gagal', 'diupdate', 'danger');
      header('Location: ' . BASEURL . '/mustahikwarga');
      exit;
    }
  }

  // * method hapus data
  public function delete($id)
  {
    $this->isLogin();

    if ($this->model('MustahikWarga_model')->deleteDataKategori($id) > 0) {
      Flasher::setFlash('Mustahik Warga', 'berhasil', 'dihapus', 'success');
      header('Location: ' . BASEURL . '/mustahikwarga');
      exit;
    } else {
      Flasher::setFlash('Mustahik Warga', 'gagal', 'dihapus', 'danger');
      header('Location: ' . BASEURL . '/mustahikwarga');
      exit;
    }
  }

  // * view detail 
  public function detail($id)
  {
    $this->isLogin();

    $data['judul'] = 'Mustahik Warga';
    $data['link'] = 'mustahikwarga';
    $data['id'] = $id;
    $data['dataMustahikWarga'] = $this->model('MustahikWarga_model')->getMustahikWargaById($id);
    $data['dataKategori'] = $this->model('Kategori_model')->getAllKategori();

    $this->view('templates/header', $data);
    $this->view('mustahik_warga/detail', $data);
    $this->view('templates/footer');
  }
}
