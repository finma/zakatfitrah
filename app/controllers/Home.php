<?php

class Home extends Controller
{
  public function index()
  {
    $this->isLogin();

    $data['judul'] = 'Home';
    $data['link'] = 'home';
    $data['dataJumlah']['muzakki'] = count($this->model('Muzakki_model')->getAllMuzakki());
    $data['dataJumlah']['kategori'] = count($this->model('Kategori_model')->getAllKategori());
    $data['dataJumlah']['zakatfitrah'] = count($this->model('PengumpulanZakatFitrah_model')->getAllZakat());
    $data['dataJumlah']['mustahikwarga'] = count($this->model('MustahikWarga_model')->getAllMustahikWarga());
    $data['dataJumlah']['mustahiklainnya'] = count($this->model('MustahikLainnya_model')->getAllMustahikLainnya());
    $this->view('templates/header', $data);
    $this->view('home/index', $data);
    $this->view('templates/footer');
  }
}
