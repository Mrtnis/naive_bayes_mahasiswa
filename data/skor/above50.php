<?php

// membuat data label
$above50 = [];
// data tidak paham
$above50_tdk_paham = countData("SELECT * FROM data_latih WHERE skor>=59 AND status='tidak paham'");
// data paham
$above50_paham = countData("SELECT * FROM data_latih WHERE skor>=59 AND status='paham'");
// data sangat paham
$above50_sangat_paham = countData("SELECT * FROM data_latih WHERE skor>=59 AND status='sangat paham'");
// push data to label
array_push($above50, $above50_tdk_paham, $above50_paham, $above50_sangat_paham);    

// label bagi
$above50_bagi = [];
array_push($above50_bagi, $above50_tdk_paham/$label[0], $above50_paham/$label[1], $above50_sangat_paham/$label[2]);