<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4 w-50">
    <h1 class="h3 mb-0 text-gray-800">Update Kategori Mustahik</h1>
  </div>

  <div class='row w-50'>
    <form action="<?= BASEURL; ?>/kategori/update/<?= $data['dataKategori']['id_kategori'] ?>" method="POST" class='col-md'>
      <div class="mb-3">
        <label for="nama_kategori">Nama Kategori Mustahik</label>
        <input class="form-control" id="nama_kategori" name="nama_kategori" type="text" placeholder="" value="<?= $data['dataKategori']['nama_kategori'] ?>">
      </div>
      <div class="mb-3">
        <label for="jumlah_hak">Jumlah Tanggungan</label>
        <input class="form-control" id="jumlah_hak" name="jumlah_hak" type="number" placeholder="" value="<?= $data['dataKategori']['jumlah_hak'] ?>">
      </div>

      <div class='d-sm-flex align-items-center mt-3'>
        <a href="<?= BASEURL; ?>/kategori" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-3">
          <i class="fas fa-plus fa-sm text-white-50"></i> Kembali
        </a>

        <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
          <i class="fas fa-plus fa-sm text-white-50"></i> Simpan
        </button>
      </div>
    </form>
  </div>

</div>
<!-- /.container-fluid -->