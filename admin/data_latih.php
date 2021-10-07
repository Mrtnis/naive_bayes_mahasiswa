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

  <div class="card-body pt-5 data-latih small">
    <h4 class="title-dashboard">Data Latih Klasifikasi</h4>
    <div class="row">
      <div class="col my-3">
        <a href="tambah_data_latih.php" class="btn btn-add">Tambah data latih</a>
      </div>
    </div>
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
        $data_latih = getData("SELECT * FROM data_latih GROUP BY id DESC");
        $number = 1;
        foreach ($data_latih as $dl) :
      ?>
        <tr class="data-table text-center">
          <td><?= $number ?></td>
          <td><?= ucwords($dl['nama']) ?></td>
          <td>
            <?php
              if ( strtolower($dl['jk']) == 'pr' ) {
                echo "Perempuan";
              } elseif ( strtolower($dl['jk']) == 'lk' ) {
                echo "Laki-laki";
              }
            ?>
          </td>
          <td><?= $dl['angkatan'] ?></td>
          <td><?= ucwords($dl['jurusan']) ?></td>
          <td><?= $dl['ipk'] ?></td>
          <td><?= $dl['skor'] ?></td>
          <td><?= ucwords($dl['status']) ?></td>
          <td class="align-middle">
            <a href="edit_data_latih.php?id=<?= $dl['id'] ?>" class="btn-edit">
              <i class="bi bi-pencil-square text-warning button"></i>
            </a>
          </td>
          <td class="align-middle">
            <a href="delete_data_latih.php?id=<?= $dl['id'] ?>" class="btn-delete" onclick="return  confirm('Anda yakin ingin menghapus data ini?')">
              <i class="bi bi-trash text-danger button"></i>
            </a>
          </td>
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