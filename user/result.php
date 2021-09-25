<?php
    include_once '../template/user/header.php';
    include_once '../template/user/navbar.php';
    include_once '../metode/index.php';
?>

    <div class="container mt-3">
        <div class="card">
            <?php if ($result === 'Tidak Paham') { ?>
            <div class="card-body card-result bg-danger">
                <div class="wrap-result">
                    <div class="text-result text-light">Oopss :-(<br> Hasil yang anda dapatkan adalah <b><?= $result ?></b></div>
                    <div class="text-back mt-5"><a href="<?= $base_url?>/user"><i class="bi bi-door-open-fill"></i> Kembali ke menu utama</a></div>
                </div>
            </div>
            <?php } elseif ($result === 'Paham') { ?>
            <div class="card-body card-result bg-paham">
                <div class="wrap-result">
                    <div class="text-result text-light">Yeaaay :-)<br> Hasil yang anda dapatkan adalah <b><?= $result ?></b></div>
                    <div class="text-back mt-5"><a href="<?= $base_url?>/user"><i class="bi bi-door-open-fill"></i> Kembali ke menu utama</a></div>
                </div>
            </div>
            <?php } elseif ($result === 'Sangat Paham') { ?>
            <div class="card-body card-result bg-sangat-paham">
                <div class="wrap-result">
                    <div class="text-result text-light">Uuhuuuuuy :-)<br> Hasil yang anda dapatkan adalah <b><?= $result ?></b></div>
                    <div class="text-back mt-5"><a href="<?= $base_url?>/user"><i class="bi bi-door-open-fill"></i> Kembali ke menu utama</a></div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

<?php
  include_once '../template/user/footer.php';
?>