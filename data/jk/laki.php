<?php

// membuat data label
$laki = [];
// data tidak paham
$laki_tdk_paham = countData("SELECT * FROM data_latih WHERE jk='lk' AND status='tidak paham'");
// data paham
$laki_paham = countData("SELECT * FROM data_latih WHERE jk='lk' AND status='paham'");
// data sangat paham
$laki_sangat_paham = countData("SELECT * FROM data_latih WHERE jk='lk' AND status='sangat paham'");
// push data to label
array_push($laki, $laki_tdk_paham, $laki_paham, $laki_sangat_paham);

// membuat data label
$laki_bagi = [];
array_push($laki_bagi, $laki_tdk_paham/$label[0], $laki_paham/$label[1], $laki_sangat_paham/$label[2]);