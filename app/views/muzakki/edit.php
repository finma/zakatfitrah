<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4 w-50">
    <h1 class="h3 mb-0 text-gray-800">Update Muzakki</h1>
  </div>

  <div class='row w-50'>
    <form action="<?= BASEURL; ?>/muzakki/update/<?= $data['dataMuzakki']['id_muzakki'] ?>" method="POST" class='col-md'>
      <div class="mb-3">
        <label for="nama_muzakki">Nama Muzakki </label>
        <input class="form-control" id="nama_muzakki" name="nama_muzakki" type="text" placeholder="" value="<?= $data['dataMuzakki']['nama_muzakki'] ?>">
      </div>
      <div class="mb-3">
        <label for="jumlah_tanggungan">Jumlah Tanggungan</label>
        <input class="form-control" id="jumlah_tanggungan" name="jumlah_tanggungan" type="number" placeholder="" value="<?= $data['dataMuzakki']['jumlah_tanggungan'] ?>">
      </div>
      <div class="mb-0">
        <label for="keterangan">Keterangan</label>
        <textarea class="form-control" id="keterangan" name="keterangan" rows="3"><?= $data['dataMuzakki']['keterangan'] ?></textarea>
      </div>

      <div class='d-sm-flex align-items-center mt-3'>
        <a href="<?= BASEURL; ?>/muzakki" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-3">
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