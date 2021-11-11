<?php

// membuat data label
$above40 = [];
// data tidak paham
$above40_tdk_paham = countData("SELECT * FROM data_latih WHERE skor>=47 AND skor<=58 AND status='tidak paham'");
// data paham
$above40_paham = countData("SELECT * FROM data_latih WHERE skor>=47 AND skor<=58 AND status='paham'");
// data sangat paham
$above40_sangat_paham = countData("SELECT * FROM data_latih WHERE skor>=47 AND skor<=58 AND status='sangat paham'");
// push data to label
array_push($above40, $above40_tdk_paham, $above40_paham, $above40_sangat_paham);

// label bagi
$above40_bagi = [];
array_push($above40_bagi, $above40_tdk_paham/$label[0], $above40_paham/$label[1], $above40_sangat_paham/$label[2]);