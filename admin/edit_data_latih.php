<?php

  $get_id = $_GET['id'];
  include_once '../template/admin/header.php';
  $nav_brand = 'Edit Data Latih';
  include_once '../template/admin/navbar.php';
  // cek login or not
  if (!$_SESSION["username"]) {
    header("Location: login.php");
  }

  // koneksi
  include_once '../koneksi/index.php';
  // method get data
  include_once '../get_data/index.php';

  // get data user
  $get_data_user = getData("SELECT * FROM data_latih WHERE id=$get_id");

  // fetch user
  $user = $get_data_user[0];

  // testing data
  if (isset($_POST['edit'])) {
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $angkatan = $_POST['angkatan'];
    $jurusan = $_POST['jurusan'];
    $ipk = $_POST['ipk'];
    $skor = $_POST['skor'];
    $status = $_POST['status'];

    $insert = mysqli_query($koneksi, "UPDATE data_latih set nama='$nama', jk='$jk', angkatan='$angkatan', jurusan='$jurusan', ipk='$ipk',skor='$skor', status='$status' WHERE id='$get_id'");
    header("Location: data_latih.php");
  }

  include_once 'open_sidebar.php';
?>

  <div class="card-body pt-5 data-latih small">
    <h4 class="title-dashboard">Tambah Data Latih</h4>
    <div class="row">
      <div class="col my-3">
        <form action="" method="post">
          <div class="mb-3">
            <label class="form-label">Nama Mahasiswa : </label>
            <input class="form-control" type="text" placeholder="Isikan nama mahasiswa..." name="nama" required value="<?= $user['nama'] ?>">
          </div>
          <!-- jk -->
          <div class="mb-3">
            <label class="form-label">Jenis Kelamin : </label>
            <select class="form-select" name="jk" required>
            <?php
              if ($user['jk'] == 'lk') {
            ?>
              <option value="lk" selected>Laki-laki</option>
              <option value="pr">Perempuan</option>
            <?php
              } elseif ($user['jk'] == 'pr') {
            ?>
              <option value="lk">Laki-laki</option>
              <option value="pr" selected>Perempuan</option>
            <?php
              }
            ?>
            </select>
          </div>
          <!-- end jk -->
          <!-- angkatan -->
          <div class="mb-3">
            <label class="form-label">Angkatan : </label>
            <select class="form-select" name="angkatan" required>
            <?php
              if ($user['angkatan'] == '2017') {
            ?>
              <option value="2017" selected>2017</option>
              <option value="2018">2018</option>
              <option value="2019">2019</option>
              <option value="2020">2020</option>
            <?php
              } elseif ($user['angkatan'] == '2018') {
            ?>
              <option value="2017">2017</option>
              <option value="2018" selected>2018</option>
              <option value="2019">2019</option>
              <option value="2020">2020</option>
            <?php
              } elseif ($user['angkatan'] == '2019') {
            ?>
              <option value="2017">2017</option>
              <option value="2018">2018</option>
              <option value="2019" selected>2019</option>
              <option value="2020">2020</option>
            <?php
              } elseif ($user['angkatan'] == '2020') {
            ?>
              <option value="2017">2017</option>
              <option value="2018">2018</option>
              <option value="2019">2019</option>
              <option value="2020" selected>2020</option>
            <?php
              }
            ?>
            </select> 
          </div>
          <!-- end of angkatan -->
          <!-- jurusan -->
          <div class="mb-3">
            <label class="form-label">Jurusan : </label>
            <select class="form-select" name="jurusan" required>
            <?php
              if ($user['jurusan'] == 'soshum') {
            ?>
              <option value="soshum" selected>Soshum</option>
              <option value="saintek">Saintek</option>
            <?php
              } elseif ($user['jurusan'] == 'saintek') {
            ?>
              <option value="soshum">Soshum</option>
              <option value="saintek" selected>Saintek</option>
            <?php
              }
            ?>
            </select> 
          </div>
          <!-- end of jurusan -->
          <div class="mb-3">
            <label class="form-label">IPK : </label>
            <input class="form-control" type="double" placeholder="Isikan nilai ipk anda. Tanda 'koma' diganti dengan 'titik'. Contohnya: 3,5 menjadi 3.5" name="ipk" required value="<?= $user['ipk'] ?>">
          </div>
          <div class="mb-3">
            <label class="form-label">Jumlah Skor : </label>
            <input class="form-control" type="number" placeholder="Isikan jumlah skor..." name="skor" required value="<?= $user['skor'] ?>">
          </div>
          <!-- Status -->
          <div class="mb-3">
            <label class="form-label">Status yang didapat : </label>
            <select class="form-select" name="status" required>
            <?php
              if ($user['status'] == 'paham') {
            ?>
              <option value="paham" selected>Paham</option>
              <option value="tidak paham">Tidak Paham</option>
              <option value="sangat paham">Sangat Paham</option>
            <?php
              } elseif ($user['status'] == 'tidak paham') {
            ?>
              <option value="paham">Paham</option>
              <option value="tidak paham" selected>Tidak Paham</option>
              <option value="sangat paham">Sangat Paham</option>
            <?php
              } elseif ($user['status'] == 'sangat paham') {
            ?>
              <option value="paham">Paham</option>
              <option value="tidak paham">Tidak Paham</option>
              <option value="sangat paham" selected>Sangat Paham</option>
            <?php
              }
            ?>
            </select> 
          </div>
          <!-- end of status -->
          <div class="mb-3 float-end">
            <button class="btn btn-add" type="submit" name="edit">Edit Data</button>
          </div>
        </form>
      </div>
    </div>
  </div>

<?php
  include_once 'close_sidebar.php';
  include_once '../template/admin/footer.php';