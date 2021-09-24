<?php

// membuat data label
$saintek = [];
// data tidak paham
$saintek_tdk_paham = countData("SELECT * FROM data_uji WHERE jurusan='saintek' AND status='tidak paham'");
// data paham
$saintek_paham = countData("SELECT * FROM data_uji WHERE jurusan='saintek' AND status='paham'");
// data sangat paham
$saintek_sangat_paham = countData("SELECT * FROM data_uji WHERE jurusan='saintek' AND status='sangat paham'");
// push data to label
array_push($saintek, $saintek_tdk_paham, $saintek_paham, $saintek_sangat_paham);

// label bagi
$saintek_bagi = [];
array_push($saintek_bagi, $saintek_tdk_paham/$label[0], $saintek_paham/$label[1], $saintek_sangat_paham/$label[2]);