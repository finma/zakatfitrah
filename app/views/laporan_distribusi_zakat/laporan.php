<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $data['judul'] ?> - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= BASEURL; ?>/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body onload='print()'>
  <div class='container-fluid'>

    <h1 class='text-center mt-4 mb-4'>Laporan Distribusi Zakat Fitrah</h1>

    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Kategori Mustahik</th>
            <th>Hak Beras (Kg)</th>
            <th>Jumlah KK</th>
            <th>Total Beras (Kg)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?= $data['dataKategori'][0]['nama_kategori'] ?></td>
            <td><?= $data['dataKategori'][0]['jumlah_hak'] ?></td>
            <td><?= $data['dataMustahikWarga']['jumlah_kk']['fakir'] ?></td>
            <td><?= $data['dataMustahikWarga']['jumlah_kk']['fakir'] * $data['dataKategori'][1]['jumlah_hak'] ?></td>
          </tr>
          <tr>
            <td><?= $data['dataKategori'][1]['nama_kategori'] ?></td>
            <td><?= $data['dataKategori'][1]['jumlah_hak'] ?></td>
            <td><?= $data['dataMustahikWarga']['jumlah_kk']['miskin'] ?></td>
            <td><?= $data['dataMustahikWarga']['jumlah_kk']['miskin'] * $data['dataKategori'][1]['jumlah_hak'] ?></td>
          </tr>
          <tr>
            <td><?= $data['dataKategori'][2]['nama_kategori'] ?></td>
            <td><?= $data['dataKategori'][2]['jumlah_hak'] ?></td>
            <td><?= $data['dataMustahikWarga']['jumlah_kk']['amil'] ?></td>
            <td><?= $data['dataMustahikWarga']['jumlah_kk']['amil'] * $data['dataKategori'][1]['jumlah_hak'] ?></td>
          </tr>
          <tr>
            <td>amilin</td>
            <td><?= 10 ?></td>
            <td><?= $data['dataMustahikLainnya']['jumlah_kk']['amilin'] ?></td>
            <td><?= $data['dataMustahikLainnya']['jumlah_kk']['amilin'] * 10 ?></td>
          </tr>
          <tr>
            <td>fisabilillah</td>
            <td><?= 10 ?></td>
            <td><?= $data['dataMustahikLainnya']['jumlah_kk']['fisabilillah'] ?></td>
            <td><?= $data['dataMustahikLainnya']['jumlah_kk']['fisabilillah'] * 10 ?></td>
          </tr>
          <tr>
            <td>mualaf</td>
            <td><?= 10 ?></td>
            <td><?= $data['dataMustahikLainnya']['jumlah_kk']['mualaf'] ?></td>
            <td><?= $data['dataMustahikLainnya']['jumlah_kk']['mualaf'] * 10 ?></td>
          </tr>
          <tr>
            <td>Ibnu Sabil</td>
            <td><?= 10 ?></td>
            <td><?= $data['dataMustahikLainnya']['jumlah_kk']['ibnu_sabil'] ?></td>
            <td><?= $data['dataMustahikLainnya']['jumlah_kk']['ibnu_sabil'] * 10 ?></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>