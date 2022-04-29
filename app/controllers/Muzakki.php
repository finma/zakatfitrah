<?php

class Muzakki extends Controller
{
  // * view index
  public function index()
  {
    $this->isLogin();

    $data['judul'] = 'Muzakki';
    $data['no'] = 1;
    $data['link'] = 'muzakki';
    $data['dataMuzakki'] = $this->model('Muzakki_model')->getAllMuzakki();

    $this->view('templates/header', $data);
    $this->view('muzakki/index', $data);
    $this->view('templates/footer');
  }

  // * view tambah data
  public function tambah()
  {
    $this->isLogin();

    $data['judul'] = 'Tambah Muzakki';
    $data['link'] = 'muzakki';

    $this->view('templates/header', $data);
    $this->view('muzakki/tambah', $data);
    $this->view('templates/footer');
  }

  // * method tambah data
  public function post()
  {
    $this->isLogin();

    if ($this->model('Muzakki_model')->postDataMuzakki($_POST) > 0) {
      Flasher::setFlash('Muzakki', 'berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASEURL . '/muzakki');
      exit;
    } else {
      Flasher::setFlash('Muzakki', 'gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASEURL . '/muzakki');
      exit;
    }
  }

  // * method hapus data
  public function delete($id)
  {
    $this->isLogin();

    if ($this->model('Muzakki_model')->deleteDataMuzakki($id) > 0) {
      Flasher::setFlash('Muzakki', 'berhasil', 'dihapus', 'success');
      header('Location: ' . BASEURL . '/muzakki');
      exit;
    } else {
      Flasher::setFlash('Muzakki', 'gagal', 'dihapus', 'danger');
      header('Location: ' . BASEURL . '/muzakki');
      exit;
    }
  }

  // * method update data
  public function update($id)
  {
    $this->isLogin();

    if ($this->model('Muzakki_model')->updateDataMuzakki($_POST, $id) > 0) {
      Flasher::setFlash('Muzakki', 'berhasil', 'diupdate', 'success');
      header('Location: ' . BASEURL . '/muzakki');
      exit;
    } else {
      Flasher::setFlash('Muzakki', 'gagal', 'diupdate', 'danger');
      header('Location: ' . BASEURL . '/muzakki');
      exit;
    }
  }

  // * view edit 
  public function edit($id)
  {
    $this->isLogin();

    $data['judul'] = 'Edit Muzakki';
    $data['link'] = 'muzakki';
    $data['id'] = $id;
    $data['dataMuzakki'] = $this->model('Muzakki_model')->getMuzakkiById($id);

    $this->view('templates/header', $data);
    $this->view('muzakki/edit', $data);
    $this->view('templates/footer');
  }

  // * view detail 
  public function detail($id)
  {
    $this->isLogin();

    $data['judul'] = 'Detail Muzakki';
    $data['link'] = 'muzakki';
    $data['id'] = $id;
    $data['dataMuzakki'] = $this->model('Muzakki_model')->getMuzakkiById($id);

    $this->view('templates/header', $data);
    $this->view('muzakki/detail', $data);
    $this->view('templates/footer');
  }
}
