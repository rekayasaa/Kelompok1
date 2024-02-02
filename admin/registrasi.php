<?php
//panggil file function

require 'functions.php';
 
//cek jika tombol register sudah di tekan atau belum 
if(isset($_POST["register"])) {

    if(registrasi($_POST) > 0) {

        echo"<script>
        alert('User baru berhasil ditambahkan');
        document.location.href='login.php'
        </script>";
    }else{
        echo"<script>
        alert('Anda Gagal registrasi');
        document.location.href='registrasi.php'
        </script>";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="RegistrasiUser.css">
</head>
<body>
    <div class="container">
      <form action="" method="post">
        <div class="title">
            Registrasi
        </div>
        <div class="user-details">
            <div class="input-box">
                <span class="details">Nama Lengkap</span>
                <input type="text" placeholder="Masukkan Nama Anda" required name="nama">
            </div>
            <div class="input-box">
                <span class="details">Nama Pengguna</span>
                <input type="text" placeholder="Masukkan Nama Pengguna" required name="username">
            </div>
            <div class="input-box">
                <span class="details">Email</span>
                <input type="text" placeholder="Masukkan Email" required name="email">
            </div>
            <div class="input-box">
                <span class="details">Nomor Hp</span>
                <input type="text" placeholder="Masukkan Nomor Hp" required name="nohp">
            </div>
            <div class="input-box">
                <span class="details">Kata Sandi</span>
                <input type="password" placeholder="Masukkan Kata Sandi" required name="password">
            </div>
            <div class="input-box">
                <span class="details">Konfirmasi Kata Sandi</span>
                <input type="password" placeholder="Masukkan Ulang Kata Sandi" required name="password2">
            </div>
        </div>
     <div class="gender-details">
        <input type="radio" name="gender" id="dot-1" value="Laki-Laki">
        <input type="radio" name="gender" id="dot-2" value="Perempuan">
        <input type="radio" name="gender" id="dot-3" value="Privasi">
        <span class="gender-title">Jenis Kelamin</span>
        <div class="category">
            <label for="dot-1">
                <span class="dot one"></span>
                <span class="gender">Laki-Laki</span>
            </label>
            <label for="dot-2"> 
                <span class="dot two"></span>
                <span class="gender">Perempuan</span>
            </label>
            <label for="dot-3">
                <span class="dot three"></span>
                <span class="gender">Privasi</span>
            </label>
        </div>
      </div>
      <div class="register-link">
                <p>you have account?<a href="login.php">Login</a></p>
            </div>
      <div class="button">
        
        <input type="submit" value="Registrasi" name="register">
    
      </div>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>