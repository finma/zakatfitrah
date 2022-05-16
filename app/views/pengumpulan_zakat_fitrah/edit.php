<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4 w-50">
    <h1 class="h3 mb-0 text-gray-800">Update Data Pengumpulan Zakat Fitrah</h1>
  </div>

  <div class='row w-50'>
    <form class='col-md' action="<?= BASEURL; ?>/pengumpulanzakatfitrah/update/<?= $data['dataZakat']['id_zakat'] ?>" method="POST">
      <div class="mb-3">
        <label for="nama_KK">Nama KK</label>
        <input required class="form-control" id="nama_KK" name="nama_KK" type="text" value="<?= $data['dataZakat']['nama_KK'] ?>">
      </div>
      <div class="mb-3">
        <label for="jumlah_tanggungan">Jumlah Tanggungan</label>
        <input required class="form-control" id="jumlah_tanggungan" name="jumlah_tanggungan" type="number" value="<?= $data['dataZakat']['jumlah_tanggungan'] ?>">
      </div>
      <div class="mb-3">
        <label for="jenis_bayar">Jenis Bayar</label>
        <select required class="custom-select" id="jenis_bayar" name="jenis_bayar">
          <option value="empty">Pilih Jenis Bayar...</option>
          <option value="Beras" <?= $data['dataZakat']['jenis_bayar'] == 'Beras' ? 'selected="selected"' : ''; ?>>Beras</option>
          <option value="Uang" <?= $data['dataZakat']['jenis_bayar'] == 'Uang' ? 'selected="selected"' : ''; ?>>Uang</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="jumlah_tanggunganyangdibayar">Jumlah Tanggungan yang Dibayar</label>
        <input required class="form-control" id="jumlah_tanggunganyangdibayar" name="jumlah_tanggunganyangdibayar" type="number" value="<?= $data['dataZakat']['jumlah_tanggunganyangdibayar'] ?>">
      </div>
      <div class="mb-3">
        <label for="bayar_beras">Bayar Beras (Kg)</label>
        <input required class="form-control" id="bayar_beras" name="bayar_beras" type="number" step="0.01" value="<?= $data['dataZakat']['bayar_beras'] ?>">
      </div>
      <div class="mb-3">
        <label for="bayar_uang">Bayar Uang (Rp)</label>
        <input required class="form-control" id="bayar_uang" name="bayar_uang" type="number" step="0.01" value="<?= $data['dataZakat']['bayar_uang'] ?>">
      </div>

      <div class='d-sm-flex align-items-center mt-3'>
        <a href="<?= BASEURL; ?>/pengumpulanzakatfitrah" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-3">
          <i class="fas fa-plus fa-sm text-white-50"></i> Kembali
        </a>

        <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
          <i class="fas fa-plus fa-sm text-white-50"></i> Simpan
        </button>
      </div>
    </form>
  </div>

  <script>
    const jumlahTanggungan = document.querySelector('#jumlah_tanggungan')
    const jumlahTanggunganBayar = document.querySelector('#jumlah_tanggunganyangdibayar')
    const jenisBayar = document.querySelector('#jenis_bayar')
    const bayarBeras = document.querySelector('#bayar_beras')
    const bayarUang = document.querySelector('#bayar_uang')

    jumlahTanggungan.addEventListener('change', (e) => {
      if (jenisBayar.value === 'empty') {
        jenisBayar.value = 'Beras'
        jumlahTanggunganBayar.value = jumlahTanggungan.value
        bayarBeras.value = Number(jumlahTanggungan.value) * 2.5
        bayarUang.value = 0
      } else if (jenisBayar.value === 'Beras') {
        jumlahTanggunganBayar.value = jumlahTanggungan.value
        bayarBeras.value = Number(jumlahTanggungan.value) * 2.5
        bayarUang.value = 0
      } else if (jenisBayar.value === 'Uang') {
        jumlahTanggunganBayar.value = jumlahTanggungan.value
        bayarUang.value = Number(jumlahTanggungan.value) * 30000
        bayarBeras.value = 0
      }
    })

    jenisBayar.addEventListener('change', (e) => {
      console.log(e.target.value);

      if (e.target.value === 'Beras') {
        bayarBeras.value = Number(jumlahTanggungan.value) * 2.5
        bayarUang.value = 0
      } else {
        bayarUang.value = Number(jumlahTanggungan.value) * 30000
        bayarBeras.value = 0
      }
    })
  </script>

</div>
<!-- /.container-fluid -->

<!--  -->