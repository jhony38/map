<?php
$host = "localhost";
$user = "id11235373_map";
$pass = "map00";
$name = "id11235373_map";

//$koneksi = mysqli_connect($host, $user, $pass, $name);
$koneksi = mysqli_connect($host, $user, $pass, $name) or die("Koneksi ke database gagal!");
mysqli_select_db($koneksi, $name) or die("Tidak ada database yang dipilih!");
?>