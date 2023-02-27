<?php 
include './app.php';

$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis-kelamin'];
$tanggal_lahir = $_POST['tanggal-lahir'];
$usia = $_POST['usia'];
$pendidikan = $_POST['pendidikan'];
$status = $_POST['status'];

if (edit($_POST) > 0) {
  // Jika data berhasil disimpan, munculkan alert dengan pesan sukses
  session_start();
  $_SESSION['success'] = "Data berhasil diubah!";
  header("Location: ../views/edit-data.php");
  exit();
} else {
  // Jika terjadi kesalahan dalam menyimpan data, munculkan alert dengan pesan error
  session_start();
  $_SESSION['error'] = "Error: " . mysqli_error($conn) . "";
  header("Location: ../views/edit-data.php");
  exit();
}

mysqli_close($conn);