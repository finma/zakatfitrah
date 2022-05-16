<?php

class PengumpulanZakatFitrah extends Controller
{
  // * view index
  public function index()
  {
    $this->isLogin();

    $data['judul'] = 'Pengumpulan Zakat Fitrah';
    $data['no'] = 1;
    $data['link'] = 'pengumpulanzakatfitrah';
    $data['dataZakat'] = $this->model('PengumpulanZakatFitrah_model')->getAllZakat();

    $this->view('templates/header', $data);
    $this->view('pengumpulan_zakat_fitrah/index', $data);
    $this->view('templates/footer');
  }

  // * view tambah data
  public function tambah()
  {
    $this->isLogin();

    $data['judul'] = 'Tambah Pengumpulan Zakat Fitrah';
    $data['link'] = 'pengumpulanzakatfitrah';

    $this->view('templates/header', $data);
    $this->view('pengumpulan_zakat_fitrah/tambah', $data);
    $this->view('templates/footer');
  }

  // * method tambah data
  public function post()
  {
    $this->isLogin();

    if ($this->model('PengumpulanZakatFitrah_model')->postDataZakat($_POST) > 0) {
      Flasher::setFlash('Zakat Fitrah', 'berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASEURL . '/pengumpulanzakatfitrah');
      exit;
    } else {
      Flasher::setFlash('Zakat Fitrah', 'gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASEURL . '/pengumpulanzakatfitrah');
      exit;
    }
  }

  // * view edit 
  public function edit($id)
  {
    $this->isLogin();

    $data['judul'] = 'Edit Zakat Fitrah';
    $data['link'] = 'pengumpulanzakatfitrah';
    $data['id'] = $id;
    $data['dataZakat'] = $this->model('PengumpulanZakatFitrah_model')->getZakatById($id);

    $this->view('templates/header', $data);
    $this->view('pengumpulan_zakat_fitrah/edit', $data);
    $this->view('templates/footer');
  }

  // * method update data
  public function update($id)
  {
    $this->isLogin();

    if ($this->model('PengumpulanZakatFitrah_model')->updateDataZakat($_POST, $id) > 0) {
      Flasher::setFlash('Zakat Fitrah', 'berhasil', 'diupdate', 'success');
      header('Location: ' . BASEURL . '/pengumpulanzakatfitrah');
      exit;
    } else {
      Flasher::setFlash('Zakat Fitrah', 'gagal', 'diupdate', 'danger');
      header('Location: ' . BASEURL . '/pengumpulanzakatfitrah');
      exit;
    }
  }

  // * view detail 
  public function detail($id)
  {
    $this->isLogin();

    $data['judul'] = 'Detail Zakat Fitrah';
    $data['link'] = 'pengumpulanzakatfitrah';
    $data['id'] = $id;
    $data['dataZakat'] = $this->model('PengumpulanZakatFitrah_model')->getZakatById($id);

    $this->view('templates/header', $data);
    $this->view('pengumpulan_zakat_fitrah/detail', $data);
    $this->view('templates/footer');
  }

  // * method hapus data
  public function delete($id)
  {
    $this->isLogin();

    if ($this->model('PengumpulanZakatFitrah_model')->deleteDataZakat($id) > 0) {
      Flasher::setFlash('Zakat Fitrah', 'berhasil', 'dihapus', 'success');
      header('Location: ' . BASEURL . '/pengumpulanzakatfitrah');
      exit;
    } else {
      Flasher::setFlash('Zakat Fitrah', 'gagal', 'dihapus', 'danger');
      header('Location: ' . BASEURL . '/pengumpulanzakatfitrah');
      exit;
    }
  }
}
