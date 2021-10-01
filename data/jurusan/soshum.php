<?php

// membuat data label
$soshum = [];
// data tidak paham
$soshum_tdk_paham = countData("SELECT * FROM data_latih WHERE jurusan='soshum' AND status='tidak paham'");
// data paham
$soshum_paham = countData("SELECT * FROM data_latih WHERE jurusan='soshum' AND status='paham'");
// data sangat paham
$soshum_sangat_paham = countData("SELECT * FROM data_latih WHERE jurusan='soshum' AND status='sangat paham'");
// push data to label
array_push($soshum, $soshum_tdk_paham, $soshum_paham, $soshum_sangat_paham);

// label bagi
$soshum_bagi = [];
array_push($soshum_bagi, $soshum_tdk_paham/$label[0], $soshum_paham/$label[1], $soshum_sangat_paham/$label[2]);