<?php

// membuat data label
$a2018 = [];
// data tidak paham
$a2018_tdk_paham = countData("SELECT * FROM data_latih WHERE angkatan='2018' AND status='tidak paham'");
// data paham
$a2018_paham = countData("SELECT * FROM data_latih WHERE angkatan='2018' AND status='paham'");
// data sangat paham
$a2018_sangat_paham = countData("SELECT * FROM data_latih WHERE angkatan='2018' AND status='sangat paham'");
// push data to label
array_push($a2018, $a2018_tdk_paham, $a2018_paham, $a2018_sangat_paham);

// label bagi
$a2018_bagi = [];
array_push($a2018_bagi, $a2018_tdk_paham/$label[0], $a2018_paham/$label[1], $a2018_sangat_paham/$label[2]);