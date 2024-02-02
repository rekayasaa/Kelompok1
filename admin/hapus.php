<?php

require "functions.php";

$id= $_GET["id"];

$hapus = "DELETE FROM siswa where id=$id";

mysqli_query($koneksi, $hapus);

if(mysqli_affected_rows($koneksi) > 0) {

    echo"<script>
    alert('Data Berhasil Dihapus');
    document.location.href='index.php';
    </script>";
} else {

    echo"<script>
    alert('Data Gagal Dihapus');
    document.location.href='index.php';
    </script>";
}

?>