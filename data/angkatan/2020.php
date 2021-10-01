<?php

// membuat data label
$a2020 = [];
// data tidak paham
$a2020_tdk_paham = countData("SELECT * FROM data_latih WHERE angkatan='2020' AND status='tidak paham'");
// data paham
$a2020_paham = countData("SELECT * FROM data_latih WHERE angkatan='2020' AND status='paham'");
// data sangat paham
$a2020_sangat_paham = countData("SELECT * FROM data_latih WHERE angkatan='2020' AND status='sangat paham'");
// push data to label
array_push($a2020, $a2020_tdk_paham, $a2020_paham, $a2020_sangat_paham);

// label bagi
$a2020_bagi = [];
array_push($a2020_bagi, $a2020_tdk_paham/$label[0], $a2020_paham/$label[1], $a2020_sangat_paham/$label[2]);