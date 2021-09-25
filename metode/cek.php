<?php

function cekData($jk, $angkatan, $jurusan, $ipk, $skor){
    global $label_hasil_bagi;
    global $label_bagi;
    $nilai_jk = [];
    $nilai_angkatan = [];
    $nilai_jurusan = [];
    $nilai_ipk = [];
    $nilai_skor = [];

    // jk
    if ($jk === 'lk') {
        array_push($nilai_jk, $label_hasil_bagi[0][0][0],$label_hasil_bagi[0][0][1],$label_hasil_bagi[0][0][2]);
    } elseif ($jk === 'pr') {
        array_push($nilai_jk, $label_hasil_bagi[0][1][0],$label_hasil_bagi[0][1][1],$label_hasil_bagi[0][1][2]);
    }

    // angkatan
    if ($angkatan === '2017') {
        array_push($nilai_angkatan, $label_hasil_bagi[1][0][0],$label_hasil_bagi[1][0][1],$label_hasil_bagi[1][0][2]);  
    } elseif ($angkatan === '2018') {
        array_push($nilai_angkatan, $label_hasil_bagi[1][1][0],$label_hasil_bagi[1][1][1],$label_hasil_bagi[1][1][2]);  
    } elseif ($angkatan === '2019') {
        array_push($nilai_angkatan, $label_hasil_bagi[1][2][0],$label_hasil_bagi[1][2][1],$label_hasil_bagi[1][2][2]);  
    } elseif ($angkatan === '2020') {
        array_push($nilai_angkatan, $label_hasil_bagi[1][3][0],$label_hasil_bagi[1][3][1],$label_hasil_bagi[1][3][2]);
    }

    // jurusan
    if ($jurusan === 'soshum') {
        array_push($nilai_jurusan, $label_hasil_bagi[2][0][0],$label_hasil_bagi[2][0][1],$label_hasil_bagi[2][0][2]);
    } elseif ($jurusan === 'saintek') {
        array_push($nilai_jurusan, $label_hasil_bagi[2][1][0],$label_hasil_bagi[2][1][1],$label_hasil_bagi[2][1][2]);
    }

    // ipk
    if ($ipk < 3) {
        array_push($nilai_ipk, $label_hasil_bagi[3][0][0],$label_hasil_bagi[3][0][1],$label_hasil_bagi[3][0][2]);
    } elseif ($ipk >=3 && $ipk <=3.5) {
        array_push($nilai_ipk, $label_hasil_bagi[3][1][0],$label_hasil_bagi[3][1][1],$label_hasil_bagi[3][1][2]);
    } elseif ($ipk > 3.5) {
        array_push($nilai_ipk, $label_hasil_bagi[3][2][0],$label_hasil_bagi[3][2][1],$label_hasil_bagi[3][2][2]);
    }

    // skor
    if ($skor < 40) {
        array_push($nilai_skor, $label_hasil_bagi[4][0][0],$label_hasil_bagi[4][0][1],$label_hasil_bagi[4][0][2]);
    } elseif ($skor >=40 && $skor <=50) {
        array_push($nilai_skor, $label_hasil_bagi[4][1][0],$label_hasil_bagi[4][1][1],$label_hasil_bagi[4][1][2]);
    } elseif ($skor > 50) {
        array_push($nilai_skor, $label_hasil_bagi[4][2][0],$label_hasil_bagi[4][2][1],$label_hasil_bagi[4][2][2]);
    }

    // kalikan nilai
    $nilai_tidak_paham = ($nilai_jk[0])*($nilai_angkatan[0])*($nilai_jurusan[0])*($nilai_ipk[0])*($nilai_skor[0])*($label_bagi[0]);
    $nilai_paham = $nilai_jk[1]*$nilai_angkatan[1]*$nilai_jurusan[1]*$nilai_ipk[1]*$nilai_skor[1]*$label_bagi[1];
    $nilai_sangat_paham = $nilai_jk[2]*$nilai_angkatan[2]*$nilai_jurusan[2]*$nilai_ipk[2]*$nilai_skor[2]*$label_bagi[2];

    // init variable hasil
    $hasil = '';

    // cek max value
    $max = max($nilai_tidak_paham, $nilai_paham, $nilai_sangat_paham);
    if ($max === $nilai_tidak_paham) {
        $hasil = "Tidak Paham";
    } elseif ($max === $nilai_paham) {
        $hasil = "Paham";
    } elseif ($max === $nilai_sangat_paham) {
        $hasil = "Sangat Paham";
    }

    // return hasil
    return $hasil;
}