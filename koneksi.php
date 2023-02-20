<?php
// Koneksi ke database
$host = "127.0.0.1";
$user = "root";
$password = "";
$dbname = "data_pegawai";

// Membuat koneksi
$conn = mysqli_connect($host, $user, $password, $dbname);

// Cek koneksi
if ($conn === false) {
    die("Error: connection error." . mysqli_connect_error());
}
?>