<?php
  include_once '../template/admin/header.php';
  $nav_brand = 'Hasil Akurasi';
  include_once '../template/admin/navbar.php';
  // cek login or not
  if (!$_SESSION["username"]) {
    header("Location: login.php");
  }

  include_once 'open_sidebar.php';
?>

  <div class="card-body data-result text-center">
    <?php
      include_once '../koneksi/index.php';
      include_once '../get_data/index.php';
      $data_akurasi = getData("SELECT * FROM data_akurasi");
      $count_data = count($data_akurasi);
      $data_benar = 0;
      $data_salah = 0;
      foreach ($data_akurasi as $dk) {
        if ($dk['status_awal'] == $dk['status_metode']) {
          $data_benar ++;
        } else {
          $data_salah ++;
        }
      }

      // hitung persentase
      $persentase = ($data_benar/$count_data) * 100;
    ?>
    <div class="row mt-5">
      <div class="col-md-6 m-auto persentase bg-success">
        <div class="text-persen">Persentase Kebenaran adalah <?= $persentase ?>%</div>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-4">
        <div class="count-data mb-2 bg-primary m-auto"><?= $count_data ?></div>
        <div class="text-data">Jumlah keseluruhan data</div>
      </div>
      <div class="col-md-4">
        <div class="count-data mb-2 bg-success m-auto"><?= $data_benar ?></div>
        <div class="text-data">Jumlah data sesuai</div>
      </div>
      <div class="col-md-4">
        <div class="count-data mb-2 bg-danger m-auto"><?= $data_salah ?></div>
        <div class="text-data">Jumlah data tidak sesuai</div>
      </div>
    </div>
  </div>

<?php
  include_once 'close_sidebar.php';
  include_once '../template/admin/footer.php';
