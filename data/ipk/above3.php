<?php

// membuat data label
$above3 = [];
// data tidak paham
$above3_tdk_paham = countData("SELECT * FROM data_latih WHERE ipk>=3 AND ipk<=3.5 AND status='tidak paham'");
// data paham
$above3_paham = countData("SELECT * FROM data_latih WHERE ipk>=3 AND ipk<=3.5 AND status='paham'");
// data sangat paham
$above3_sangat_paham = countData("SELECT * FROM data_latih WHERE ipk>=3 AND ipk<=3.5 AND status='sangat paham'");
// push data to label
array_push($above3, $above3_tdk_paham, $above3_paham, $above3_sangat_paham);

// label bagi
$above3_bagi = [];
array_push($above3_bagi, $above3_tdk_paham/$label[0], $above3_paham/$label[1], $above3_sangat_paham/$label[2]);