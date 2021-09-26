<?php
  include_once '../template/user/header.php';
  include_once '../template/user/navbar.php';
?>
  <div class="mt-3 container">
    <div class="row">
      <div class="col-md-6 display-table">
        <div class="wrap">
          <div class="title my-4">
            Selamat Datang, <b class="bold-info">User</b>
          </div>
          <div class="information">
            Silahkan klik tombol dibawah ini untuk mulai memberikan pendapat anda mengenai perkuliahan secara daring.
          </div>
          <a class="btn btn-go-to-klik" href="<?= $base_url?>/user/form.php">Mulai <i class="bi bi-arrow-right-short"></i></a>
        </div>
      </div>
      <div class="col-md-6 display-table">
        <div class="wrap">
          <img class="img-landing" src="<?= $base_url ?>/template/user/learning.svg" alt="online-learning">
        </div>
      </div>
    </div>
  </div>

<?php
  include_once '../template/user/footer.php';
?>