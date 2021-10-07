<?php
  include_once '../template/admin/header.php';
  $nav_brand = 'Data Uji';
  include_once '../template/admin/navbar.php';
  // cek login or not
  if (!$_SESSION["username"]) {
    header("Location: login.php");
  }

  include_once 'open_sidebar.php';
?>

  <div class="card-body pt-5 data-latih small">
    <h4 class="title-dashboard">Data Uji Klasifikasi</h4>
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
        </tr>
      </thead>
      <tbody>
      <!-- panggil data latih -->
      <?php
        include_once '../koneksi/index.php';
        include_once '../get_data/index.php';
        $data_uji = getData("SELECT * FROM data_uji");
        $number = 1;
        foreach ($data_uji as $du) :
      ?>
        <tr class="data-table text-center">
          <td><?= $number ?></td>
          <td><?= ucwords($du['nama']) ?></td>
          <td>
            <?php
              if ( strtolower($du['jk']) == 'pr' ) {
                echo "Perempuan";
              } elseif ( strtolower($du['jk']) == 'lk' ) {
                echo "Laki-laki";
              }
            ?>
          </td>
          <td><?= $du['angkatan'] ?></td>
          <td><?= ucwords($du['jurusan']) ?></td>
          <td><?= $du['ipk'] ?></td>
          <td><?= $du['skor'] ?></td>
          <td><?= ucwords($du['status']) ?></td>
        </tr>
      </tbody>
    <?php
      $number++;
      endforeach;
    ?>
    </table>

  </div>

<script>
  document.getElementById('data_uji').classList.add('bold-text')
</script>

<?php
  include_once 'close_sidebar.php';
  include_once '../template/admin/footer.php';