<nav class="navbar navbar-light py-4">
  <div class="container">
    <a class="link-brand" href="<?= $base_url ?>/admin"><span class="mb-0 h3 fw-bolder text-brand"><?= $nav_brand ?></span></a>
    <span class="d-flex">
      <div class="logout">
        <a class="logout" href="<?= $base_url ?>/admin/logout.php" onclick="return confirm('Apakah anda yakin?');"><i class="bi bi-door-open-fill"></i> Logout</a>
      </div>
    </span>
  </div>
</nav>
<!-- line before body -->
<div class="container">
  <hr>
</div>
