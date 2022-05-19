<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  </div>

  <!-- Content Row -->
  <div class="row flex-row">

    <!-- Card Jumlah Muzakki -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Muzakki</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data['dataJumlah']['muzakki'] ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-user fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Card Jumlah Kategori -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Kategori</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data['dataJumlah']['kategori'] ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-th-large fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Card Jumlah Zakat Fitrah -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-danger shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Zakat Fitrah</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data['dataJumlah']['zakatfitrah'] ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-th-large fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Card Jumlah Muztahik Warga -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Mustahik Warga</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data['dataJumlah']['mustahikwarga'] ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-th-large fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Card Jumlah Mustahik Lainnya -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Mustahik Lainnya</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data['dataJumlah']['mustahiklainnya'] ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-th-large fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>
<!-- /.container-fluid -->