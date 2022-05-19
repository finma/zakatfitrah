<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4 w-50">
    <h1 class="h3 mb-0 text-gray-800">Tambah Data Mustahik Warga</h1>
  </div>

  <div class='row w-50'>
    <form class='col-md' action="<?= BASEURL; ?>/mustahikwarga/post" method="POST">
      <div class="mb-3">
        <label for="nama">Nama</label>
        <input required class="form-control" id="nama" name="nama" type="text" value="<?= $data['dataMustahikWarga']['nama'] ?>" disabled>
      </div>
      <div class="mb-3">
        <label for="kategori">Kategori</label>
        <select required class="custom-select" id="kategori" name="kategori" value="<?= $data['dataMustahikWarga']['kategori'] ?>" disabled>
          <option value="empty" selected>Pilih Kategori...</option>
          <?php foreach ($data['dataKategori'] as $kategori) : ?>
            <option value="<?= $kategori['nama_kategori'] ?>" data-hak="<?= $kategori['jumlah_hak'] ?>" <?= $data['dataMustahikWarga']['kategori'] == $kategori['nama_kategori'] ? 'selected="selected"' : ''; ?>><?= $kategori['nama_kategori'] ?></option>
          <?php endforeach ?>
        </select>
      </div>
      <div class="mb-3">
        <label for="hak">Hak (Rp)</label>
        <input required class="form-control" id="hak" name="hak" type="number" value="<?= $data['dataMustahikWarga']['hak'] ?>" disabled>
      </div>

      <div class='d-sm-flex align-items-center mt-3'>
        <a href="<?= BASEURL; ?>/mustahikwarga" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-3">
          <i class="fas fa-plus fa-sm text-white-50"></i> Kembali
        </a>

        <!-- <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
          <i class="fas fa-plus fa-sm text-white-50"></i> Simpan
        </button> -->
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

<!--  -->