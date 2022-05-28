<!-- Begin Page Content -->
<div class="container-fluid">

  <div class="row">
    <div class="col-lg-12">
      <?php Flasher::flash(); ?>
    </div>
  </div>

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Laporan Pengumpulan Zakat Fitrah</h1>

    <a href="<?= BASEURL; ?>/laporanpengumpulanzakat/laporan" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"></i> Cetak Laporan</a>
  </div>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Laporan Pengumpulan Zakat Fitrah</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Total Muzzaki</th>
              <th>Total Jiwa</th>
              <th>Total Beras (Kg)</th>
              <th>Total Uang (Rp)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?= $data['dataLaporan']['total_muzzaki'] ?></td>
              <td><?= $data['dataLaporan']['total_jiwa'] ?></td>
              <td><?= $data['dataLaporan']['total_beras'] ?></td>
              <td><?= number_format($data['dataLaporan']['total_uang'], 2, ',', '.') ?></td>
            </tr>
            <!-- <?php foreach ($data['dataLaporan'] as $data) : ?>
              <tr>
                <td><?= $data['no']++ ?></td>
                <td><?= $data['nama_KK'] ?></td>
                <td><?= $data['jumlah_tanggungan'] ?></td>
                <td><?= $data['jenis_bayar'] ?></td>
                <td><?= $data['jumlah_tanggunganyangdibayar'] ?></td>
              </tr>
            <?php endforeach ?> -->
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->