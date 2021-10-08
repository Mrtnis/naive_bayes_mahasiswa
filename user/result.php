<?php
    include_once '../template/user/header.php';
    include_once '../template/user/navbar.php';
    include_once '../metode/index.php';

    // testing data
    if (isset($_POST['check'])) {
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $angkatan = $_POST['angkatan'];
        $jurusan = $_POST['jurusan'];
        $ipk = $_POST['ipk'];
        $skor = 0;
        foreach ($_POST['skor'] as $cek_skor) {
            $skor += $cek_skor;
        }
        
        include_once '../metode/cek.php';

        $result = cekData($jk, $angkatan, $jurusan, $ipk, $skor);

        $insert = mysqli_query($koneksi, "INSERT INTO data_uji (id, nama, jk, angkatan, jurusan, ipk, skor, status) VALUES ('', '$nama','$jk', '$angkatan', '$jurusan', '$ipk', '$skor', '$result')");
    }

    if (!$result) {
        header("Location: index.php");
    }
?>

    <div class="container mt-3">
        <div class="card">
            <?php if ($result === 'tidak paham') { ?>
            <div class="card-body card-result bg-danger">
                <div class="wrap-result">
                    <div class="text-result text-light">Oopss :-(<br> Hasil yang anda dapatkan adalah <b><?= $result ?></b></div>
                    <div class="text-back mt-5"><a href="<?= $base_url?>/user"><i class="bi bi-door-open-fill"></i> Kembali ke menu utama</a></div>
                </div>
            </div>
            <?php } elseif ($result === 'paham') { ?>
            <div class="card-body card-result bg-paham">
                <div class="wrap-result">
                    <div class="text-result text-light">Yeaaay :-)<br> Hasil yang anda dapatkan adalah <b><?= $result ?></b></div>
                    <div class="text-back mt-5"><a href="<?= $base_url?>/user"><i class="bi bi-door-open-fill"></i> Kembali ke menu utama</a></div>
                </div>
            </div>
            <?php } elseif ($result === 'sangat paham') { ?>
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