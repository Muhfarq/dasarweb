<?php
// koneksi.php
$koneksi = mysqli_connect("localhost", "root", "", "Prakwebdb");

if (mysqli_connect_errno()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
