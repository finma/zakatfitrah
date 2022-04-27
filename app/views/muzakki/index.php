<!-- Begin Page Content -->
<div class="container-fluid">

  <div class="row">
    <div class="col-lg-12">
      <?php Flasher::flash(); ?>
    </div>
  </div>

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Muzakki</h1>

    <a href="<?= BASEURL; ?>/muzakki/tambah" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah</a>
  </div>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Muzakki</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Jumlah Tanggungan</th>
              <th>Keterangan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data['dataMuzakki'] as $muzakki) : ?>
              <tr>
                <td><?= $data['no']++ ?></td>
                <td><?= $muzakki['nama_muzakki'] ?></td>
                <td><?= $muzakki['jumlah_tanggungan'] ?></td>
                <td><?= $muzakki['keterangan'] ?></td>
                <td>
                  <a href="<?= BASEURL ?>/muzakki/edit/<?= $muzakki['id_muzakki'] ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-edit"></i> Edit</a>
                  <a onclick="return confirm('Apakah yakin data akan dihapus?')" href="<?= BASEURL ?>/muzakki/delete/<?= $muzakki['id_muzakki'] ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-trash"></i> Hapus</a>
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