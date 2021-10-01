<?php
  include_once '../template/admin/header.php';
  $nav_brand = 'Dashboard Admin';
  include_once '../template/admin/navbar.php';
  // cek login or not
  if (!$_SESSION["username"]) {
    header("Location: login.php");
  }

  include_once 'open_sidebar.php';
?>

  <div class="card-body pt-5 ps-5">
    <h3 class="title-dashboard">Selamat Datang, <b>Admin</b> </h3>
    <img class="img-dashboard my-5" src="<?= $base_url ?>/template/admin/admin.svg" alt="admin">
    <h6>Silahkan klik tombol di sidebar list sebelah kiri untuk menuju ke halaman lainnya.</h6>
  </div>

<?php

  include_once 'close_sidebar.php';

?>

<script>
  document.getElementById('dashboard').classList.add('bold-text')
</script>

<?php
  include_once '../template/admin/footer.php';
