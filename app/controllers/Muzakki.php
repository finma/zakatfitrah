<?php

class Muzakki extends Controller
{
  // * view index
  public function index()
  {
    $data['judul'] = 'Muzakki';
    $data['no'] = 1;
    $data['dataMuzakki'] = $this->model('Muzakki_model')->getAllMuzakki();

    $this->view('templates/header', $data);
    $this->view('muzakki/index', $data);
    $this->view('templates/footer');
  }

  // * view tambah data
  public function tambah()
  {
    $data['judul'] = 'Tambah Muzakki';

    $this->view('templates/header', $data);
    $this->view('muzakki/tambah', $data);
    $this->view('templates/footer');
  }

  // * method tambah data
  public function post()
  {
    if ($this->model('Muzakki_model')->postDataMuzakki($_POST) > 0) {
      Flasher::setFlash('berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASEURL . '/muzakki');
      exit;
    } else {
      Flasher::setFlash('gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASEURL . '/muzakki');
      exit;
    }
  }

  // * method hapus data
  public function delete($id)
  {
    if ($this->model('Muzakki_model')->deleteDataMuzakki($id) > 0) {
      Flasher::setFlash('berhasil', 'dihapus', 'success');
      header('Location: ' . BASEURL . '/muzakki');
      exit;
    } else {
      Flasher::setFlash('gagal', 'dihapus', 'danger');
      header('Location: ' . BASEURL . '/muzakki');
      exit;
    }
  }

  // * method update data
  public function update($id)
  {
    if ($this->model('Muzakki_model')->updateDataMuzakki($_POST, $id) > 0) {
      Flasher::setFlash('berhasil', 'diupdate', 'success');
      header('Location: ' . BASEURL . '/muzakki');
      exit;
    } else {
      Flasher::setFlash('gagal', 'diupdate', 'danger');
      header('Location: ' . BASEURL . '/muzakki');
      exit;
    }
  }

  // * view edit 
  public function edit($id)
  {
    $data['judul'] = 'Edit Muzakki';
    $data['id'] = $id;
    $data['dataMuzakki'] = $this->model('Muzakki_model')->getMuzakkiById($id);

    $this->view('templates/header', $data);
    $this->view('muzakki/edit', $data);
    $this->view('templates/footer');
  }
}
