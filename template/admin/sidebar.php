<div class="card sidebar shadow">
  <div class="card-body py-4">
    <div class="row">
      <a href="<?= $base_url ?>/admin/index.php" class="col list-data" id="dashboard"><i class="bi bi-ui-checks-grid me-3"></i> Dashboard</a>
    </div>
    <div class="row">
      <a href="<?= $base_url ?>/admin/data_latih.php" class="col list-data" id="data_latih"><i class="bi bi-journal-check me-3" ></i> Data Latih</a>
    </div>
    <div class="row">
      <a href="<?= $base_url ?>/admin/data_uji.php" class="col list-data" id="data_uji"><i class="bi bi-journals me-3"></i> Data Uji</a>
    </div>
    <div class="row">
      <a href="<?= $base_url ?>/admin/cek_akurasi.php" class="col list-data" id="cek"><i class="bi bi-list-check me-3"></i> Cek Akurasi</a>
    </div>
    <div class="row">
      <a href="<?= $base_url ?>/admin/logout.php" onclick="return  confirm('Apakah anda yakin?')" class="col list-data" id="logout"><i class="bi bi-door-open-fill me-3"></i> Logout</a>
    </div>
  </div>
</div>