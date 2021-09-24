<?php
    include_once '../koneksi/index.php';
    include_once '../get_data/index.php';

    // function to count data array
    function countData($param){
        $data_name = getData($param);
        $count_data = count($data_name);
        return $count_data;
    }

    // data utama
    $data_utama = getData("SELECT * FROM data_uji");

    // hitung jumlah data dan input ke label utama
    $total = count($data_utama);

    // data label
    include_once '../data/label.php';

    // buat label utama
    $label_utama = [];

    // buat label untuk data hasil pembagian
    $label_hasil_bagi = []; 

    // call data keseluruhan label
    include_once 'data.php';

    // testing data
    if (isset($_POST['check'])) {
        $jk = $_POST['jk'];
        $angkatan = $_POST['angkatan'];
        $jurusan = $_POST['jurusan'];
        $ipk = $_POST['ipk'];
        $skor = $_POST['skor'];
        
        include_once 'cek.php';

        echo cekData($jk, $angkatan, $jurusan, $ipk, $skor);
    }
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Testing Data</title>
    </head>
    <style>
        .testing{
            margin-top: 20px
        }
        input{
            margin-bottom: 10px
        }
    </style>
    <body>
        <div class="testing">
            <h4>Testing Data</h4>
            <h5>Masukkan data mahasiswa</h5>
        </div>
        <div class="inputan">
            <form action="" method="post">
                <label>Jenis Kelamin</label>
                <input type="text" placeholder="lk atau pr" name="jk" required> <br>
                <label>Angkatan</label>
                <input type="text" placeholder="2017 - 2020" name="angkatan" required><br>
                <label>Jurusan</label>
                <input type="text" placeholder="soshum atau saintek" name="jurusan" required><br>
                <label>IPK</label>
                <input type="double" placeholder="<3 - >3.5" name="ipk" required><br>
                <label>Skor</label>
                <input type="number" placeholder="<40 - >50" name="skor" required><br>
                <button type="submit" name="check">Cek Data</button>
            </form>
        </div>
    </body>
    </html>