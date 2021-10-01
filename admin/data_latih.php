<?php
  include_once '../template/admin/header.php';
  $nav_brand = 'Data Latih';
  include_once '../template/admin/navbar.php';
  // cek login or not
  if (!$_SESSION["username"]) {
    header("Location: login.php");
  }

  include_once 'open_sidebar.php';
?>

  <div class="card-body pt-5 ps-5 data-latih">
    <h4 class="title-dashboard">Data Latih Klasifikasi</h4>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col" class="px-4 align-middle">Nomor</th>
          <th scope="col" class="px-4 align-middle">Nama</th>
          <th scope="col" class="px-4 align-middle">Jenis Kelamin</th>
          <th scope="col" class="px-4 align-middle">Angkatan</th>
          <th scope="col" class="px-4 align-middle">Jurusan</th>
          <th scope="col" class="px-4 align-middle">IPK</th>
          <th scope="col" class="px-4 align-middle">Skor</th>
          <th scope="col" class="px-4 align-middle">Status</th>
          <th colspan="2" scope="col" class="px-4 align-middle">Aksi</th>
        </tr>
      </thead>
      <tbody>
      <!-- panggil data latih -->
      <?php
        include_once '../koneksi/index.php';
        include_once '../get_data/index.php';
        $data_latih = getData("SELECT * FROM data_latih");
        $number = 1;
        foreach ($data_latih as $dl) :
      ?>
        <tr class="data-table text-center">
          <td><?= $number ?></td>
          <td><?= $dl['nama'] ?></td>
          <td><?= $dl['jk'] ?></td>
          <td><?= $dl['angkatan'] ?></td>
          <td><?= $dl['jurusan'] ?></td>
          <td><?= $dl['ipk'] ?></td>
          <td><?= $dl['skor'] ?></td>
          <td><?= $dl['status'] ?></td>
          <td><i class="bi bi-pencil-square text-warning button"></i></td>
          <td><i class="bi bi-trash text-danger button"></i></td>
        </tr>
      </tbody>
    <?php
      $number++;
      endforeach;
    ?>
    </table>

  </div>

<script>
  document.getElementById('data_latih').classList.add('bold-text')
</script>

<?php
  include_once 'close_sidebar.php';
  include_once '../template/admin/footer.php';