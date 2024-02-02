<?php

//panggil file koneksi
require "functions.php";

//cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])) {

    //cek jika data berhasil ditambahkan
    if(tambah($_POST) > 0) {
        echo"<script>
        alert('Data Berhasil Ditambahkan');
        document.location.href='index.php';
        </script>";
    }else {
        echo"<script>
        alert('Data Gagal Disimpan');
        document.location.href='tambah.php';
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Data</title>
</head>
<body>

<h1>Halaman Tambah Data</h1>

<form action="" method="post" enctype="multipart/form-data">

<!-- <table>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama" require></td>
    </tr>
    <tr>
        <td>hadir</td>
        <td>:</td>
        <td><input type="radio" name="hadir" require></td>
    </tr>
    <tr>
        <td>izin</td>
        <td>:</td>
        <td><input type="radio" name="izin" require></td>
    </tr>
    <tr>
        <td>sakit</td>
        <td>:</td>
        <td><input type="radio" name="sakit" require></td>
    </tr>
    <tr>
        <td>alpa</td>
        <td>:</td>
        <td><input type="radio" name="alpa" require></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td><button type="submit" name="submit">Simpan</button></td>
    </tr>
</table>
</form> -->

<form action="" method="post">

<table border="1">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Hadir</th>
            <th>Izin</th>
            <th>Sakit</th>
            <th>Alpa</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><input type="text" name="nama" required></td>
            <td><input type="radio" name="keterangan" required value="Hadir"></td>
            <td><input type="radio" name="keterangan" required value="Izin"></td>
            <td><input type="radio" name="keterangan" required value="Sakit"></td>
            <td><input type="radio" name="keterangan" required value="Alpa"></td>
        </tr>
    </tbody>
</table>

<button type="submit" name="submit">Simpan</button>
<button type="reset" name="submit">Hapus</button>

</form>
    
</body>
</html>