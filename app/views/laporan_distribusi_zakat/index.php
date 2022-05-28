<!-- Begin Page Content -->
<div class="container-fluid">

  <div class="row">
    <div class="col-lg-12">
      <?php Flasher::flash(); ?>
    </div>
  </div>

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Laporan Distribusi Zakat Fitrah</h1>

    <a href="<?= BASEURL; ?>/laporandistribusizakat/laporan" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"></i> Cetak Laporan</a>
  </div>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Laporan Distribusi Zakat Fitrah Warga</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Kategori Mustahik</th>
              <th>Hak Beras (Kg)</th>
              <th>Jumlah KK</th>
              <th>Total Beras (Kg)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?= $data['dataKategori'][0]['nama_kategori'] ?></td>
              <td><?= $data['dataKategori'][0]['jumlah_hak'] ?></td>
              <td><?= $data['dataMustahikWarga']['jumlah_kk']['fakir'] ?></td>
              <td><?= $data['dataMustahikWarga']['jumlah_kk']['fakir'] * $data['dataKategori'][1]['jumlah_hak'] ?></td>
            </tr>
            <tr>
              <td><?= $data['dataKategori'][1]['nama_kategori'] ?></td>
              <td><?= $data['dataKategori'][1]['jumlah_hak'] ?></td>
              <td><?= $data['dataMustahikWarga']['jumlah_kk']['miskin'] ?></td>
              <td><?= $data['dataMustahikWarga']['jumlah_kk']['miskin'] * $data['dataKategori'][1]['jumlah_hak'] ?></td>
            </tr>
            <tr>
              <td><?= $data['dataKategori'][2]['nama_kategori'] ?></td>
              <td><?= $data['dataKategori'][2]['jumlah_hak'] ?></td>
              <td><?= $data['dataMustahikWarga']['jumlah_kk']['amil'] ?></td>
              <td><?= $data['dataMustahikWarga']['jumlah_kk']['amil'] * $data['dataKategori'][1]['jumlah_hak'] ?></td>
            </tr>
            <tr>
              <td>amilin</td>
              <td><?= 10 ?></td>
              <td><?= $data['dataMustahikLainnya']['jumlah_kk']['amilin'] ?></td>
              <td><?= $data['dataMustahikLainnya']['jumlah_kk']['amilin'] * 10 ?></td>
            </tr>
            <tr>
              <td>fisabilillah</td>
              <td><?= 10 ?></td>
              <td><?= $data['dataMustahikLainnya']['jumlah_kk']['fisabilillah'] ?></td>
              <td><?= $data['dataMustahikLainnya']['jumlah_kk']['fisabilillah'] * 10 ?></td>
            </tr>
            <tr>
              <td>mualaf</td>
              <td><?= 10 ?></td>
              <td><?= $data['dataMustahikLainnya']['jumlah_kk']['mualaf'] ?></td>
              <td><?= $data['dataMustahikLainnya']['jumlah_kk']['mualaf'] * 10 ?></td>
            </tr>
            <tr>
              <td>Ibnu Sabil</td>
              <td><?= 10 ?></td>
              <td><?= $data['dataMustahikLainnya']['jumlah_kk']['ibnu_sabil'] ?></td>
              <td><?= $data['dataMustahikLainnya']['jumlah_kk']['ibnu_sabil'] * 10 ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->