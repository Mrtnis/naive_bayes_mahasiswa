<?php

// membuat data label
$a2019 = [];
// data tidak paham
$a2019_tdk_paham = countData("SELECT * FROM data_latih WHERE angkatan='2019' AND status='tidak paham'");
// data paham
$a2019_paham = countData("SELECT * FROM data_latih WHERE angkatan='2019' AND status='paham'");
// data sangat paham
$a2019_sangat_paham = countData("SELECT * FROM data_latih WHERE angkatan='2019' AND status='sangat paham'");
// push data to label
array_push($a2019, $a2019_tdk_paham, $a2019_paham, $a2019_sangat_paham);

// label bagi
$a2019_bagi = [];
array_push($a2019_bagi, $a2019_tdk_paham/$label[0], $a2019_paham/$label[1], $a2019_sangat_paham/$label[2]);