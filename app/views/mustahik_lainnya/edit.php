<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4 w-50">
    <h1 class="h3 mb-0 text-gray-800">Update Data Mustahik Lainnya</h1>
  </div>

  <div class='row w-50'>
    <form class='col-md' action="<?= BASEURL; ?>/mustahiklainnya/update/<?= $data['dataMustahikLainnya']['id_mustahiklainnya'] ?>" method="POST">
      <div class="mb-3">
        <label for="nama">Nama</label>
        <input required class="form-control" id="nama" name="nama" type="text" value="<?= $data['dataMustahikLainnya']['nama'] ?>">
      </div>
      <div class="mb-3">
        <label for="kategori">Kategori</label>
        <select required class="custom-select" id="kategori" name="kategori" value="<?= $data['dataMustahikLainnya']['kategori'] ?>">
          <option value="empty">Pilih Kategori...</option>
          <option value="Amilin" <?= $data['dataMustahikLainnya']['kategori'] == 'Amilin' ? 'selected="selected"' : ''; ?>>Amilin</option>
          <option value="Fisabilillah" <?= $data['dataMustahikLainnya']['kategori'] == 'Fisabilillah' ? 'selected="selected"' : ''; ?>>Fisabilillah</option>
          <option value="Mualaf" <?= $data['dataMustahikLainnya']['kategori'] == 'Mualaf' ? 'selected="selected"' : ''; ?>>Mualaf</option>
          <option value="Ibnu Sabil" <?= $data['dataMustahikLainnya']['kategori'] == 'Ibnu Sabil' ? 'selected="selected"' : ''; ?>>Ibnu Sabil</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="hak">Hak (Rp)</label>
        <input required class="form-control" id="hak" name="hak" type="number" value="<?= $data['dataMustahikLainnya']['hak'] ?>">
      </div>

      <div class='d-sm-flex align-items-center mt-3'>
        <a href="<?= BASEURL; ?>/mustahiklainnya" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-3">
          <i class="fas fa-plus fa-sm text-white-50"></i> Kembali
        </a>

        <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
          <i class="fas fa-plus fa-sm text-white-50"></i> Simpan
        </button>
      </div>
    </form>
  </div>

  <script>
    const kategori = document.querySelector('#kategori')
    const hak = document.querySelector('#hak')

    kategori.addEventListener('change', function(e) {
      hak.value = this.options[this.selectedIndex].getAttribute('data-hak');
    })
  </script>

</div>
<!-- /.container-fluid -->