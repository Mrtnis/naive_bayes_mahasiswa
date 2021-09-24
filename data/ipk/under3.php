<?php

// membuat data label
$under3 = [];
// data tidak paham
$under3_tdk_paham = countData("SELECT * FROM data_uji WHERE ipk<3 AND status='tidak paham'");
// data paham
$under3_paham = countData("SELECT * FROM data_uji WHERE ipk<3 AND status='paham'");
// data sangat paham
$under3_sangat_paham = countData("SELECT * FROM data_uji WHERE ipk<3 AND status='sangat paham'");
// push data to label
array_push($under3, $under3_tdk_paham, $under3_paham, $under3_sangat_paham);

// label bagi
$under3_bagi = [];
array_push($under3_bagi, $under3_tdk_paham/$label[0], $under3_paham/$label[1], $under3_sangat_paham/$label[2]);