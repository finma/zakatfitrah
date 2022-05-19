<!-- Begin Page Content -->
<div class="container-fluid">

  <div class="row">
    <div class="col-lg-12">
      <?php Flasher::flash(); ?>
    </div>
  </div>

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Mustahik Lainnya</h1>

    <a href="<?= BASEURL; ?>/mustahiklainnya/tambah" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah</a>
  </div>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Mustahik Lainnya</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Kategori</th>
              <th>Hak</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data['dataMustahikLainnya'] as $mustahik) : ?>
              <tr>
                <td><?= $data['no']++ ?></td>
                <td><?= $mustahik['nama'] ?></td>
                <td><?= $mustahik['kategori'] ?></td>
                <td><?= $mustahik['hak'] ?></td>
                <td>
                  <a href="<?= BASEURL ?>/mustahiklainnya/detail/<?= $mustahik['id_mustahiklainnya'] ?>" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i class="fas fa-eye"></i> Detail</a>
                  <a href="<?= BASEURL ?>/mustahiklainnya/edit/<?= $mustahik['id_mustahiklainnya'] ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-edit"></i> Edit</a>
                  <a onclick="return confirm('Apakah yakin data akan dihapus?')" href="<?= BASEURL ?>/mustahiklainnya/delete/<?= $mustahik['id_mustahiklainnya'] ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-trash"></i> Hapus</a>
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