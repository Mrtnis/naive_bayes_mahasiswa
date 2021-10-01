<?php

// membuat data label
$a2017 = [];
// data tidak paham
$a2017_tdk_paham = countData("SELECT * FROM data_latih WHERE angkatan='2017' AND status='tidak paham'");
// data paham
$a2017_paham = countData("SELECT * FROM data_latih WHERE angkatan='2017' AND status='paham'");
// data sangat paham
$a2017_sangat_paham = countData("SELECT * FROM data_latih WHERE angkatan='2017' AND status='sangat paham'");
// push data to label
array_push($a2017, $a2017_tdk_paham, $a2017_paham, $a2017_sangat_paham);

// label bagi
$a2017_bagi = [];
array_push($a2017_bagi, $a2017_tdk_paham/$label[0], $a2017_paham/$label[1], $a2017_sangat_paham/$label[2]);