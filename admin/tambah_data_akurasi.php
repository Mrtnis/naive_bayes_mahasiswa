<?php
  include_once '../template/admin/header.php';
  $nav_brand = 'Tambah Data Akurasi';
  include_once '../template/admin/navbar.php';
  // cek login or not
  if (!$_SESSION["username"]) {
    header("Location: login.php");
  }

  // call metode
  include_once '../metode/index.php';

  // testing data
  if (isset($_POST['add'])) {
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $angkatan = $_POST['angkatan'];
    $jurusan = $_POST['jurusan'];
    $ipk = $_POST['ipk'];
    $skor = $_POST['skor'];
    $status = $_POST['status'];

    // call cek data
    include_once '../metode/cek.php';

    $result =  cekData($jk, $angkatan, $jurusan, $ipk, $skor);

    $insert = mysqli_query($koneksi, "INSERT INTO data_akurasi (id, nama, jk, angkatan, jurusan, ipk, skor, status_awal, status_metode) VALUES ('', '$nama','$jk', '$angkatan', '$jurusan', '$ipk', '$skor', '$status', '$result')");
    header("Location: cek_akurasi.php");
}

  include_once 'open_sidebar.php';
?>

  <div class="card-body pt-5 data-latih small">
    <h4 class="title-dashboard">Tambah Data Akurasi</h4>
    <div class="row">
      <div class="col my-3">
        <form action="" method="post">
          <div class="mb-3">
            <label class="form-label">Nama Mahasiswa : </label>
            <input class="form-control" type="text" placeholder="Isikan nama mahasiswa..." name="nama" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Jenis Kelamin : </label>
            <select class="form-select" name="jk" required>
              <option value="lk">Laki-laki</option>
              <option value="pr">Perempuan</option>
            </select> 
          </div>
          <div class="mb-3">
            <label class="form-label">Angkatan : </label>
            <select class="form-select" name="angkatan" required>
              <option value="2017">2017</option>
              <option value="2018">2018</option>
              <option value="2019">2019</option>
              <option value="2020">2020</option>
            </select> 
          </div>
          <div class="mb-3">
            <label class="form-label">Jurusan : </label>
            <select class="form-select" name="jurusan" required>
              <option value="soshum">Soshum</option>
              <option value="saintek">Saintek</option>
            </select> 
          </div>
          <div class="mb-3">
            <label class="form-label">IPK : </label>
            <input class="form-control" type="double" placeholder="Isikan nilai ipk anda. Tanda 'koma' diganti dengan 'titik'. Contohnya: 3,5 menjadi 3.5" name="ipk" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Jumlah Skor : </label>
            <input class="form-control" type="number" placeholder="Isikan jumlah skor..." name="skor" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Status awal : </label>
            <select class="form-select" name="status" required>
              <option value="paham">Paham</option>
              <option value="tidak paham">Tidak Paham</option>
              <option value="sangat paham">Sangat Paham</option>
            </select> 
          </div>
          <div class="mb-3 float-end">
            <button class="btn btn-add" type="submit" name="add">Tambah Data</button>
          </div>
        </form>
      </div>
    </div>
  </div>

<?php
  include_once 'close_sidebar.php';
  include_once '../template/admin/footer.php';