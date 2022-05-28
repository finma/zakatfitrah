<?php

class LaporanPengumpulanZakat extends Controller
{
  // * view index
  public function index()
  {
    $this->isLogin();

    $total_muzzaki = count($this->model('PengumpulanZakatFitrah_model')->getAllZakat());
    $total_zakat = $this->model('PengumpulanZakatFitrah_model')->getSumJumlahZakat();

    $data['judul'] = 'Laporan Pengumpulan Zakat Fitrah';
    $data['no'] = 1;
    $data['link'] = 'laporanpengumpulanzakat';
    $data['dataLaporan']['total_muzzaki'] = $total_muzzaki;
    $data['dataLaporan']['total_jiwa'] = $total_zakat['0']['total_jiwa'];
    $data['dataLaporan']['total_beras'] = $total_zakat['0']['total_beras'];
    $data['dataLaporan']['total_uang'] = $total_zakat['0']['total_uang'];

    $this->view('templates/header', $data);
    $this->view('laporan_pengumpulan_zakat/index', $data);
    $this->view('templates/footer');
  }

  // * view laporan and print
  public function laporan()
  {
    $this->isLogin();

    $total_muzzaki = count($this->model('PengumpulanZakatFitrah_model')->getAllZakat());
    $total_zakat = $this->model('PengumpulanZakatFitrah_model')->getSumJumlahZakat();

    $data['judul'] = 'Laporan Pengumpulan Zakat Fitrah';
    $data['no'] = 1;
    $data['link'] = 'laporanpengumpulanzakat';
    $data['dataLaporan']['total_muzzaki'] = $total_muzzaki;
    $data['dataLaporan']['total_jiwa'] = $total_zakat['0']['total_jiwa'];
    $data['dataLaporan']['total_beras'] = $total_zakat['0']['total_beras'];
    $data['dataLaporan']['total_uang'] = $total_zakat['0']['total_uang'];

    // $this->view('templates/header', $data);
    $this->view('laporan_pengumpulan_zakat/laporan', $data);
    // $this->view('templates/footer');
  }
}
