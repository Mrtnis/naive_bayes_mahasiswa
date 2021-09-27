<?php
  include_once '../template/admin/header.php';
  $nav_brand = 'Dashboard Admin';
  include_once '../template/admin/navbar.php';
?>

<div class="container">
  <div class="row mb-5">
    <div class="col-md-3">
      <?php include_once '../template/admin/sidebar.php'; ?>
    </div>
    <div class="col-md-9">
      <div class="card body-element shadow">
        <div class="card-body pt-5 ps-5">
          <h3 class="title-dashboard">Selamat Datang, <b>Admin</b> </h3>
          <img class="img-dashboard my-5" src="<?= $base_url ?>/template/admin/admin.svg" alt="admin">
          <h6>Silahkan klik tombol di sidebar list sebelah kiri untuk menuju ke halaman lainnya.</h6>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  // function to make bold text
  function boldText(params) {
    // init all id
    let allList = ['dashboard','data_latih','data_uji','cek','profil','logout']
    allList.forEach( oneList => {
      if (oneList == params) {
        document.getElementById(params).classList.add('bold-text')
      } else{
        document.getElementById(oneList).classList.remove('bold-text')
      }
    });
  }
</script>

<?php
  include_once '../template/admin/footer.php';
