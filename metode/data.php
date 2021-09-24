<?php

// data jenis kelamin
$label_jk = [];
include_once '../data/jk/laki.php';
include_once '../data/jk/perempuan.php';
// push data pr dan lk ke label jk
array_push($label_jk, $laki, $perempuan);

// label jk pembagian
$label_jk_bagi = [];
// push data jk ke label bagi jk
array_push($label_jk_bagi, $laki_bagi, $perempuan_bagi);


// data angkatan
$angkatan = [];
include_once '../data/angkatan/2017.php';
include_once '../data/angkatan/2018.php';
include_once '../data/angkatan/2019.php';
include_once '../data/angkatan/2020.php';
// push data angkatan ke label angkatan
array_push($angkatan, $a2017, $a2018, $a2019, $a2020);

// label angkatan pembagian
$label_angkatan_bagi = [];
// push data angkatan ke label bagi angkatan
array_push($label_angkatan_bagi, $a2017_bagi, $a2018_bagi, $a2019_bagi, $a2020_bagi);


// data jurusan
$jurusan = [];
include_once '../data/jurusan/soshum.php';
include_once '../data/jurusan/saintek.php';
// push data ke label jurusan
array_push($jurusan, $soshum, $saintek);

// label jurusan pembagian
$label_jurusan_bagi = [];
// push data jurusan ke label bagi jurusan
array_push($label_jurusan_bagi, $soshum_bagi, $saintek_bagi);


// data ipk
$ipk = [];
include_once '../data/ipk/under3.php';
include_once '../data/ipk/above3.php';
include_once '../data/ipk/above35.php';
// push data ke label ipk
array_push($ipk, $under3, $above3, $above35);

// label ipk pembagian
$label_ipk_bagi = [];
// push data ipk ke label bagi ipk
array_push($label_ipk_bagi, $under3_bagi, $above3_bagi, $above35_bagi);


// data skor
$skor = [];
include_once '../data/skor/under40.php';
include_once '../data/skor/above40.php';
include_once '../data/skor/above50.php';
// push data ke label skor
array_push($skor, $under40, $above40, $above50);

// label skor pembagian
$label_skor_bagi = [];
// push data skor ke label bagi skor
array_push($label_skor_bagi, $under40_bagi, $above40_bagi, $above50_bagi);


// push data to label utama
array_push($label_utama, $label_jk, $angkatan, $jurusan, $ipk, $skor);


// push data bagi ke label
array_push($label_hasil_bagi, $label_jk_bagi, $label_angkatan_bagi, $label_jurusan_bagi, $label_ipk_bagi, $label_skor_bagi);
