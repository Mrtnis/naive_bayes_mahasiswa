<?php

  $get_id = $_GET['id'];
  // cek login or not
  if (!$_SESSION["username"]) {
    header("Location: login.php");
  }

  // koneksi
  include_once '../koneksi/index.php';

  // get data user
  $delete_data = mysqli_query($koneksi, "DELETE FROM data_latih WHERE id=$get_id");

  // push to data latih
  header("Location: data_latih.php");
?>