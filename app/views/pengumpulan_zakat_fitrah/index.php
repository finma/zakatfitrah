<!-- Begin Page Content -->
<div class="container-fluid">

  <div class="row">
    <div class="col-lg-12">
      <?php Flasher::flash(); ?>
    </div>
  </div>

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pengumpulan Zakat Fitrah</h1>

    <a href="<?= BASEURL; ?>/pengumpulanzakatfitrah/tambah" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah</a>
  </div>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Pengumpulan Zakat Fitrah</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama KK</th>
              <th>Jumlah Tanggungan</th>
              <th>Jenis Bayar</th>
              <th>Jumlah Tanggungan yang Dibayar</th>
              <th>Bayar Beras</th>
              <th>Bayar Uang</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data['dataZakat'] as $zakat) : ?>
              <tr>
                <td><?= $data['no']++ ?></td>
                <td><?= $zakat['nama_KK'] ?></td>
                <td><?= $zakat['jumlah_tanggungan'] ?></td>
                <td><?= $zakat['jenis_bayar'] ?></td>
                <td><?= $zakat['jumlah_tanggunganyangdibayar'] ?></td>
                <td><?= $zakat['bayar_beras'] ?></td>
                <td><?= $zakat['bayar_uang'] ?></td>
                <td>
                  <a href="<?= BASEURL ?>/pengumpulanzakatfitrah/detail/<?= $zakat['id_zakat'] ?>" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i class="fas fa-eye"></i> Detail</a>
                  <a href="<?= BASEURL ?>/pengumpulanzakatfitrah/edit/<?= $zakat['id_zakat'] ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-edit"></i> Edit</a>
                  <a onclick="return confirm('Apakah yakin data akan dihapus?')" href="<?= BASEURL ?>/pengumpulanzakatfitrah/delete/<?= $zakat['id_zakat'] ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-trash"></i> Hapus</a>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->