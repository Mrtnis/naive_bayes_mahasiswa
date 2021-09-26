<?php

  include_once '../koneksi/index.php';
  include_once '../get_data/index.php';

  $kategori_soal = getData('SELECT * FROM kategori_soal');
  $nilai_skor = getData('SELECT * FROM skor');

?>
<!-- foreach kategori soal -->
<?php foreach ($kategori_soal as $ktg) { ?>
  <ul class="list-group list-group-flush mb-3"> <span class="title-question"><?= ucfirst($ktg['nama_kategori']) ?></span>
    <!-- foreach soal by kategori -->
    <?php
      $ktg_soal = $ktg['id'];
      $kalimat_soal = getData("SELECT * FROM soal WHERE id_kategori=$ktg_soal");
      $nomor = 1;
      foreach ($kalimat_soal as $soal) { 
    ?>
      <li class="list-group-item list-group-item-action"><?= $nomor ?> - <?= ucfirst($soal['soal']) ?>
        <div class="row">
          <div class="col-md-6 ms-4">
            <select class="form-select" name="skor[]" required>
              <!-- foreach skor -->
              <?php foreach ($nilai_skor as $skor) { ?>
                <option value="<?= $skor['nilai_skor'] ?>"><?= ucfirst($skor['nama_skor']) ?></option>
              <?php } ?>
              <!-- end foreach skor -->
            </select>
          </div>
        </div>
      </li>
    <?php 
      $nomor++;
      } 
    ?>
  </ul>
  <!-- end foreach soal -->
<?php } ?>
<!-- end foreach kategori -->