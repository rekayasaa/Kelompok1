<?php

//panggil file koneksi
require "admin/functions.php";

//cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])) {

    //cek jika data berhasil ditambahkan
    if(tambah($_POST) > 0) {
        echo"<script>
        alert('Data Berhasil Dikirim');
        document.location.href='selesai_absensi.php';
        </script>";
    }else {
        echo"<script>
        alert('Data Gagal Dikirim');
        document.location.href='index.php';
        </script>";
    }
}

?>

<!-- <!doctype html> -->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> ABSENSI </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Absensi Siswa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
      </ul>
      <div class="d-flex" role="search">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Options menu
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="admin/index.php">Dashboard</a></li>
            <li><a class="dropdown-item" href="admin/profil.html">Profil</a></li>
            <!-- <li><hr class="dropdown-divider"></li> -->
            <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        </li>
      </ul>
      </div>
    </div>
  </div>
</nav>

<form action="" method="post">
<div class="p-5 rounded-3">
    <div class="container-fluid py-5 card bg-body-tertiary">
        <h1 class="display-5 fw-bold">Isi Absen</h1>
        <!-- <p class="col-md-8 fs-4">Nama Peserta :</p> -->
        <label for="select2Single">Nama Peserta :</label>
        <select class="select2-single form-control mb-3" name="nama" id="select2Single">
            <option value="">Select</option>
            <option value="Indah Yanti">Indah Yanti</option>
            <option value="Arham">Arham</option>
            <option value="Nadia khusnul">Nadia khusnul</option>
            <option value="Farhiah">Farhiah</option>
            <option value="Rahmat">Rahmat</option>
            <option value="abdul wahab">abdul wahab</option>
            <option value="farhiah nailul authar">farhiah nailul authar</option>
        </select>

        <label for="select2Single">Nis :</label>
        <select class="select2-single form-control mb-3" name="nis" id="select2Single">
            <option value="">Select</option>
            <option value="213456">213456</option>
            <option value="213457">213457</option>
            <option value="213458">213458</option>
            <option value="213459">213459</option>
            <option value="213450">213450</option>
        </select>

        <label for="select2Single">Jenis Kelamin :</label>
        <select class="select2-single form-control mb-3" name="jk" id="select2Single">
            <option value="">Select</option>
            <option value="Laki Laki">Laki Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
    </div>
</div>

<div class="p-5 rounded-3">
    <div class="container-fluid py-5 card bg-body-tertiary">
        <h1 class="display-5 fw-bold mb-5">Keterangan</h1>
        <!-- <p class="col-md-8 fs-4">Nama Peserta :</p> -->
        <table class="table align-items-center table-flush table-hover">
            <thead class="table-primary">
                <tr class="text-center">
                    <th>Hadir</th>
                    <th>Izin</th>
                    <th>Sakit</th>
                    <th>Alpa</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td><input type="radio" name="keterangan" required value="Hadir"></td>
                    <td><input type="radio" name="keterangan" required value="Izin"></td>
                    <td><input type="radio" name="keterangan" required value="Sakit"></td>
                    <td><input type="radio" name="keterangan" required value="Alpa"></td>
                </tr>
            </tbody>
        </table>

        <div class="row">
            <div class="col-md-6 text-center">
                <button class="btn btn-primary btn-lg" type="submit" name="submit">Kirim</button>
            </div>
            <div class="col-md-6 text-center">
                <button class="btn btn-danger btn-lg" type="reset">Hapus</button>
            </div>
        </div>
    </div>
</div>
</form>

<div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>
    <script src="color-modes.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>