<?php
include 'app.php';



session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM users WHERE username='$username' AND BINARY password='$password'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) == 1) {
  $_SESSION['username'] = $username;
  header("Location:../views/home.php");
  exit();
} else {
  $_SESSION['error'] = "Username atau password salah";
  header("Location: ../views/login.php");
  exit();
}
mysqli_close($conn);
