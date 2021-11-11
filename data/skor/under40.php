<?php

// membuat data label
$under40 = [];
// data tidak paham
$under40_tdk_paham = countData("SELECT * FROM data_latih WHERE skor<47 AND status='tidak paham'");
// data paham
$under40_paham = countData("SELECT * FROM data_latih WHERE skor<47 AND status='paham'");
// data sangat paham
$under40_sangat_paham = countData("SELECT * FROM data_latih WHERE skor<47 AND status='sangat paham'");
// push data to label
array_push($under40, $under40_tdk_paham, $under40_paham, $under40_sangat_paham);

// label bagi
$under40_bagi = [];
array_push($under40_bagi, $under40_tdk_paham/$label[0], $under40_paham/$label[1], $under40_sangat_paham/$label[2]);