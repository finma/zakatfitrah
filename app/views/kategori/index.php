<!-- Begin Page Content -->
<div class="container-fluid">

  <div class="row">
    <div class="col-lg-12">
      <?php Flasher::flash(); ?>
    </div>
  </div>

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Kategori Mustahik</h1>

    <a href="<?= BASEURL; ?>/kategori/tambah" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah</a>
  </div>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Kategori Mustahik</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Kategori</th>
              <th>Jumlah Hak</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data['dataKategori'] as $kategori) : ?>
              <tr>
                <td><?= $data['no']++ ?></td>
                <td><?= $kategori['nama_kategori'] ?></td>
                <td><?= $kategori['jumlah_hak'] ?></td>
                <td>
                  <a href="<?= BASEURL ?>/kategori/detail/<?= $kategori['id_kategori'] ?>" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i class="fas fa-eye"></i> Detail</a>
                  <a href="<?= BASEURL ?>/kategori/edit/<?= $kategori['id_kategori'] ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-edit"></i> Edit</a>
                  <a onclick="return confirm('Apakah yakin data akan dihapus?')" href="<?= BASEURL ?>/kategori/delete/<?= $kategori['id_kategori'] ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-trash"></i> Hapus</a>
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