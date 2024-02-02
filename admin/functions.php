<?php

//koneksi ke database
$koneksi = mysqli_connect("localhost","root","","absensi");

function tambah($data) {
    //ambil data dari elemen, lalu masukan ke dalam variabel
    global $koneksi;

    $nama = htmlspecialchars($data["nama"]);
    $nis = htmlspecialchars($data["nis"]);
    $jk = htmlspecialchars($data["jk"]);
    $keterangan = htmlspecialchars($data["keterangan"]);

    $tambah = "INSERT INTO siswa (nama, nis, jk, keterangan, waktu_pengisian) VALUES ('$nama', '$nis', '$jk', '$keterangan', NOW())";

    mysqli_query($koneksi, $tambah);

    return mysqli_affected_rows($koneksi);

}

function ubah($data) {
    global $koneksi;

    //ambil data dari elemen, lalu masukan ke dalam variabel
    $id = htmlspecialchars($data["id"]);
    $nama = htmlspecialchars($data["nama"]);
    $nis = htmlspecialchars($data["nis"]);
    $jk = htmlspecialchars($data["jk"]);
    $keterangan = htmlspecialchars($data["keterangan"]);

    //fungsi ubah data
    $ubah = "UPDATE siswa SET nama = '$nama', keterangan = '$keterangan'
    
    WHERE id=$id";

    mysqli_query($koneksi,$ubah);

    return mysqli_affected_rows($koneksi);
}

function registrasi($data) {
    global $koneksi;
    $nama = htmlspecialchars($data["nama"]);
    $username = stripslashes($data["username"]);
    $email = htmlspecialchars($data["email"]);
    $nohp = htmlspecialchars($data["nohp"]);
    $password = mysqli_real_escape_string($koneksi,$data["password"]);
    $password2 = mysqli_real_escape_string($koneksi,$data["password2"]);

    //cek jika user yang dimasukkan sama

    $data = mysqli_query($koneksi, "SELECT username FROM user
    WHERE username= '$username'");
    if(mysqli_fetch_assoc($data)) {
        echo"<script>
        alert('Username telah terdaftar');
        </script>";
    return false;
}


    //cek jika password tidak sama
    if($password !== $password2 ) {
        echo"<script>
        alert('konfirmasi password tidak sama');
        </script>";
        return false;
    }

    //enkripsi password

    $password = password_hash($password, PASSWORD_DEFAULT);

    // insert kan user baru ke dalam database

    $input = "INSERT INTO user VALUES('', '$nama', '$username', '$email', '$nohp', '$password')";
    mysqli_query($koneksi, $input) ;

    return mysqli_affected_rows($koneksi);

}
?>