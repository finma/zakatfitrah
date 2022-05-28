<?php

class LaporanDistribusiZakat extends Controller
{
  // * view index
  public function index()
  {
    $this->isLogin();

    $data['judul'] = 'Laporan Distribusi Zakat Fitrah';
    $data['no'] = 1;
    $data['link'] = 'laporandistribusizakat';
    $data['dataKategori'] = $this->model('Kategori_model')->getAllKategori();
    $data['dataMustahikWarga']['jumlah_kk']['fakir'] = count($this->model('MustahikWarga_model')->getJumlahKKByKategori('fakir'));
    $data['dataMustahikWarga']['jumlah_kk']['miskin'] = count($this->model('MustahikWarga_model')->getJumlahKKByKategori('miskin'));
    $data['dataMustahikWarga']['jumlah_kk']['amil'] = count($this->model('MustahikWarga_model')->getJumlahKKByKategori('amil'));

    $data['dataKategoriLainnya'] = $this->model('MustahikLainnya_model')->getAllMustahikLainnya();
    $data['dataMustahikLainnya']['jumlah_kk']['amilin'] = count($this->model('MustahikLainnya_model')->getJumlahKKByKategori('amilin'));
    $data['dataMustahikLainnya']['jumlah_kk']['fisabilillah'] = count($this->model('MustahikLainnya_model')->getJumlahKKByKategori('fisabilillah'));
    $data['dataMustahikLainnya']['jumlah_kk']['mualaf'] = count($this->model('MustahikLainnya_model')->getJumlahKKByKategori('mualaf'));
    $data['dataMustahikLainnya']['jumlah_kk']['ibnu_sabil'] = count($this->model('MustahikLainnya_model')->getJumlahKKByKategori('ibnu_sabil'));

    $this->view('templates/header', $data);
    $this->view('laporan_distribusi_zakat/index', $data);
    $this->view('templates/footer');
  }

  // * view laporan and print
  public function laporan()
  {
    $this->isLogin();

    $data['judul'] = 'Laporan Distribusi Zakat Fitrah';
    $data['no'] = 1;
    $data['link'] = 'laporandistribusizakat';
    $data['dataKategori'] = $this->model('Kategori_model')->getAllKategori();
    $data['dataMustahikWarga']['jumlah_kk']['fakir'] = count($this->model('MustahikWarga_model')->getJumlahKKByKategori('fakir'));
    $data['dataMustahikWarga']['jumlah_kk']['miskin'] = count($this->model('MustahikWarga_model')->getJumlahKKByKategori('miskin'));
    $data['dataMustahikWarga']['jumlah_kk']['amil'] = count($this->model('MustahikWarga_model')->getJumlahKKByKategori('amil'));

    $data['dataKategoriLainnya'] = $this->model('MustahikLainnya_model')->getAllMustahikLainnya();
    $data['dataMustahikLainnya']['jumlah_kk']['amilin'] = count($this->model('MustahikLainnya_model')->getJumlahKKByKategori('amilin'));
    $data['dataMustahikLainnya']['jumlah_kk']['fisabilillah'] = count($this->model('MustahikLainnya_model')->getJumlahKKByKategori('fisabilillah'));
    $data['dataMustahikLainnya']['jumlah_kk']['mualaf'] = count($this->model('MustahikLainnya_model')->getJumlahKKByKategori('mualaf'));
    $data['dataMustahikLainnya']['jumlah_kk']['ibnu_sabil'] = count($this->model('MustahikLainnya_model')->getJumlahKKByKategori('ibnu_sabil'));

    // $this->view('templates/header', $data);
    $this->view('laporan_distribusi_zakat/laporan', $data);
    // $this->view('templates/footer');
  }
}
