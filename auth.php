<?php
include_once('koneksi.php');
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM users WHERE username='$username' AND BINARY password='$password'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) == 1) {
  $_SESSION['username'] = $username;
  header("Location: index.php");
  exit();
} else {
  $_SESSION['error'] = "Username atau password salah";
  header("Location: login.php");
  exit();
}
mysqli_close($conn);
