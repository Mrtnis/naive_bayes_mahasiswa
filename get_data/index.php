<?php

 // function get data
 function getData($query){
    global $koneksi;
    $datas = mysqli_query($koneksi, $query);
    $all_data = [];
        while ($data = mysqli_fetch_assoc($datas)) {
            $all_data[] = $data;
        }
    return $all_data;
}