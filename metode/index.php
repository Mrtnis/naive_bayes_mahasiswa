<?php
    include_once '../koneksi/index.php';
    include_once '../get_data/index.php';

    // function to count data array
    function countData($param){
        $data_name = getData($param);
        $count_data = count($data_name);
        return $count_data;
    }

    // data utama
    $data_utama = getData("SELECT * FROM data_latih");

    // hitung jumlah data dan input ke label utama
    $total = count($data_utama);

    // data label
    include_once '../data/label.php';

    // buat label utama
    $label_utama = [];

    // buat label untuk data hasil pembagian
    $label_hasil_bagi = []; 

    // call data keseluruhan label
    include_once 'data.php';

?>