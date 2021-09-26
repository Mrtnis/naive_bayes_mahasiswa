<?php
  include_once '../template/user/header.php';
  include_once '../template/user/navbar.php';
?>
  <div class="container">
    <div class="row mb-3">
      <div class="col">
        <a class="btn btn-go-to-back" href="<?= $base_url?>/user"><i class="bi bi-arrow-left-short"></i> Kembali</a>
      </div>
    </div>
    <div class="row mb-5">
      <div class="col-md">
        <div class="card">
          <div class="card-body">
            <div class="row my-3">
              <div class="col text-center">
                <div class="title-form">Masukkan data anda pada form di bawah ini.</div>
                <hr class="line-form">
              </div>
            </div>
            <form action="<?= $base_url ?>/user/result.php" method="post">
              <div class="mb-3">
                <label class="form-label">Nama Anda : </label>
                <input class="form-control" type="text" placeholder="Isikan nama anda..." name="nama" required>
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
                <?php include_once './soal.php'; ?>
              </div>
              <div class="mb-3 float-end">
                <button class="btn-go-to-klik" type="submit" name="check">Cek Data</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
  include_once '../template/user/footer.php';
?>