<?php
  include_once '../template/admin/header.php';
  $nav_brand = 'Cek Akurasi';
  include_once '../template/admin/navbar.php';
  // cek login or not
  if (!$_SESSION["username"]) {
    header("Location: login.php");
  }

  include_once 'open_sidebar.php';
?>

  <div class="card-body pt-5 data-latih small">
    <h4 class="title-dashboard">Cek Akurasi Metode</h4>
    <div class="row">
      <div class="col my-3">
        <a href="tambah_data_akurasi.php" class="btn btn-add">Tambah data akurasi</a>
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
          <th scope="col" class="px-4 align-middle">Status Awal</th>
          <th scope="col" class="px-4 align-middle">Status Metode</th>
          <th colspan="2" scope="col" class="px-4 align-middle">Aksi</th>
        </tr>
      </thead>
      <tbody>
      <?php
        include_once '../koneksi/index.php';
        include_once '../get_data/index.php';
        $data_akurasi = getData("SELECT * FROM data_akurasi GROUP BY id DESC");
        $number = 1;
        foreach ($data_akurasi as $dk) :
      ?>
        <tr class="data-table text-center">
          <td><?= $number ?></td>
          <td><?= ucwords($dk['nama']) ?></td>
          <td>
            <?php
              if ( strtolower($dk['jk']) == 'pr' ) {
                echo "Perempuan";
              } elseif ( strtolower($dk['jk']) == 'lk' ) {
                echo "Laki-laki";
              }
            ?>
          </td>
          <td><?= $dk['angkatan'] ?></td>
          <td><?= ucwords($dk['jurusan']) ?></td>
          <td><?= $dk['ipk'] ?></td>
          <td><?= $dk['skor'] ?></td>
          <td><?= ucwords($dk['status_awal']) ?></td>
          <td><?= ucwords($dk['status_metode']) ?></td>
          <td class="align-middle">
            <a href="edit_data_akurasi.php?id=<?= $dk['id'] ?>" class="btn-edit">
              <i class="bi bi-pencil-square text-warning button"></i>
            </a>
          </td>
          <td class="align-middle">
            <a href="delete_data_akurasi.php?id=<?= $dk['id'] ?>" class="btn-delete" onclick="return  confirm('Anda yakin ingin menghapus data ini?')">
              <i class="bi bi-trash text-danger button"></i>
            </a>
          </td>
        </tr>
      <?php
        $number++;
        endforeach;
      ?>
      </tbody>
    </table>
    <!-- cek row data -->
    <?php
      $count_data = count($data_akurasi);
      if ($count_data > 0) {
    ?>
    <div class="row float-end">
      <div class="col">
        <a href="hasil.php" class="btn btn-add">
          <div>Cek Akurasi</div>
        </a>
      </div>
    </div>
    <?php
      }
    ?>
  </div>

<script>
  document.getElementById('cek').classList.add('bold-text')
</script>

<?php
  include_once 'close_sidebar.php';
  include_once '../template/admin/footer.php';