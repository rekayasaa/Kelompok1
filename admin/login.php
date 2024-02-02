<?php
session_start();

//cek session
if(isset($_SESSION["login"])) {
    header("Location: index.php");
    exit();
}

require "functions.php";

//cek apakah tombol submit sudah ditekan atau belum

if(isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $data = mysqli_query($koneksi, "SELECT * FROM user WHERE username
    = '$username'");

    //cek username
    if(mysqli_num_rows($data) === 1) {

        //cek password
        $row = mysqli_fetch_assoc($data);
        if(password_verify($password, $row["password"])) {

            //set / atur session
            $_SESSION["login"] = true;

            header("Location: index.php");
            exit;
            
        }

    }
    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="LoginUser.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form action="" method="post">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Name" required name="username">
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="password" required name="password">
                <i class='bx bxs-lock-alt'></i>
            </div>

            <!-- <div class="remember-forgot">
                <label><input type="checkbox">remember me</label>
                <a href="#">forget password?</a>
            </div> -->

            <button type="submit" class="btn" name="login">Login</button>

            <div class="register-link">
                <p>Don't have account?<a href="registrasi.php">Registrasi</a></p>
            </div>
        </form>
        <form action="../index.php">
            <button type="submit" class="btn" name="">Keluar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>