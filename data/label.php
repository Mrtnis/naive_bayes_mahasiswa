<?php

// membuat data label
$label = [];
// data tidak paham
$jumlah_tdk_paham = countData("SELECT * FROM data_uji WHERE status='tidak paham'");
// data paham
$jumlah_paham = countData("SELECT * FROM data_uji WHERE status='paham'");
// data sangat paham
$jumlah_sangat_paham = countData("SELECT * FROM data_uji WHERE status='sangat paham'");
// push data to label
array_push($label, $jumlah_tdk_paham, $jumlah_paham, $jumlah_sangat_paham);


// data label dibagi total
$label_bagi = [];
array_push($label_bagi, $jumlah_tdk_paham/$total, $jumlah_paham/$total, $jumlah_sangat_paham/$total);