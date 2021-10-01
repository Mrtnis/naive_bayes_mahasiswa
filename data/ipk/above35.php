<?php

// membuat data label
$above35 = [];
// data tidak paham
$above35_tdk_paham = countData("SELECT * FROM data_latih WHERE ipk>3.5 AND status='tidak paham'");
// data paham
$above35_paham = countData("SELECT * FROM data_latih WHERE ipk>3.5 AND status='paham'");
// data sangat paham
$above35_sangat_paham = countData("SELECT * FROM data_latih WHERE ipk>3.5 AND status='sangat paham'");
// push data to label
array_push($above35, $above35_tdk_paham, $above35_paham, $above35_sangat_paham);

// label bagi
$above35_bagi = [];
array_push($above35_bagi, $above35_tdk_paham/$label[0], $above35_paham/$label[1], $above35_sangat_paham/$label[2]);