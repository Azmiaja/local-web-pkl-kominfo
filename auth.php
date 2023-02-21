<?php

include_once('koneksi.php') ;

$username = $_POST['username'];
$password = $_POST['password'];

// Mengecek apakah username dan password cocok dengan data di database
$query = "SELECT * FROM users WHERE username='$username' AND BINARY password='$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
  // Jika login berhasil, redirect ke halaman home
  session_start();
  $_SESSION['username'] = $username;
  header("Location: index.php");
  exit();
} else {
  // Jika login gagal, set pesan error pada variabel session
  session_start();
  $_SESSION['error'] = "Username atau password salah";
  header("Location: login.php");
  exit();
}

// Menutup koneksi ke database
mysqli_close($conn);
?>