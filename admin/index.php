<?php
session_start();
if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit();
}
?>

<?php
//panggil file function
require "functions.php";

//query atau ambil data di database
//ASC
//DESC
$siswa = mysqli_query($koneksi, "SELECT * FROM siswa ORDER BY waktu_pengisian DESC");

//cek apakah tombol cari sudah ditekan atau belum
// if(isset($_POST["keyword"])){
//     $cari = $_POST["cari"];

//     // $siswa = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nama = '$cari'");
//     $siswa = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nama LIKE '%$cari%' ");
// }else {
//     $siswa = mysqli_query($koneksi, "SELECT * FROM siswa ORDER BY id ASC");
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <style>
    .bi-check-circle-fill {
        color: green;
        font-size: 25px;
    }
    .bi-dash-lg {
        font-size: 25px;
    }
  </style>
</head>
<body>

<h1>Absensi Siswa</h1>

<!-- <a href="tambah.php" class="btn btn-success">Tambah Peserta</a> -->
<a href="logout.php" class="btn btn-warning">logout</a>
<br>
<br>

<!-- <form action="" method="post">

<input type="text" name="cari" placeholder="Masukkan Ketword Pencarian.." size="30" autofocus>
<button type="submit" name="keyword">Cari</button>

</form> -->

<br>

<div class="table-responsive p-3">
<table class="table align-items-center table-flush table-hover" id="dataTableHover">

<thead class="thead-light">
<tr>
    <th>No</th>
    <th>Aksi</th>
    <th>Nama</th>
    <th class="text-center">Hadir</th>
    <th class="text-center">Izin</th>
    <th class="text-center">Sakit</th>
    <th class="text-center">Alpa</th>
    <th class="">Waktu Pengisian</th>
</tr>
</thead>

<tfoot class="thead-light">
<tr>
    <th>No</th>
    <th>Aksi</th>
    <th>Nama</th>
    <th class="text-center">Hadir</th>
    <th class="text-center">Izin</th>
    <th class="text-center">Sakit</th>
    <th class="text-center">Alpa</th>
    <th class="">Waktu Pengisian</th>
</tr>
</tfoot>

<tbody>
<?php $i = 1; ?>

<?php foreach($siswa as $data) : ?>
<tr>
    <td><?= $i ?></td>
    <td>
        <a href="ubah.php?id=<?= $data["id"]; ?>" class="btn btn-warning">Keterangan</a>
        <a href="hapus.php?id=<?= $data["id"]; ?>" class="btn btn-danger" onclick="return confirm('Anda yakin ingin Meenghapus')">Hapus</a>
    </td>
    <td><?= $data["nama"]; ?></td>
    <td class="text-center">
        <?php if($data["keterangan"] === "Hadir") {?>
            <i class="bi bi-check-circle-fill"></i>
        <?php } else { ?>
            <i class="bi bi-dash-lg"></i>
        <?php } ?>
    </td>
    <td class="text-center">
        <?php if($data["keterangan"] === "Izin") {?>
            <i class="bi bi-check-circle-fill"></i>
        <?php } else { ?>
            <i class="bi bi-dash-lg"></i>
        <?php } ?>
    </td>
    <td class="text-center">
        <?php if($data["keterangan"] === "Sakit") {?>
            <i class="bi bi-check-circle-fill"></i>
        <?php } else { ?>
            <i class="bi bi-dash-lg"></i>
        <?php } ?>
    </td>
    <td class="text-center">
        <?php if($data["keterangan"] === "Alpa") {?>
            <i class="bi bi-check-circle-fill"></i>
        <?php } else { ?>
            <i class="bi bi-dash-lg"></i>
        <?php } ?>
    </td>
    <td>
        <?= $data["waktu_pengisian"]; ?>
    </td>
</tr>

<?php $i++; ?>

<?php endforeach; ?>
</tbody>

</table>
</div>

<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>
    
</body>
</html>