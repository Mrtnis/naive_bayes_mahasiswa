<?php

// membuat data label
$perempuan = [];
// data tidak paham
$perempuan_tdk_paham = countData("SELECT * FROM data_latih WHERE jk='pr' AND status='tidak paham'");
// data paham
$perempuan_paham = countData("SELECT * FROM data_latih WHERE jk='pr' AND status='paham'");
// data sangat paham
$perempuan_sangat_paham = countData("SELECT * FROM data_latih WHERE jk='pr' AND status='sangat paham'");
// push data to label
array_push($perempuan, $perempuan_tdk_paham, $perempuan_paham, $perempuan_sangat_paham);

// membuat data label
$perempuan_bagi = [];
array_push($perempuan_bagi, $perempuan_tdk_paham/$label[0], $perempuan_paham/$label[1], $perempuan_sangat_paham/$label[2]);