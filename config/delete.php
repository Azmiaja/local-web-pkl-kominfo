<?php
include './app.php';
$id = $_GET['id'];
// delete data
if (delete($id) == 1) {
    echo '<script>alert("Data berhasil dihapus!"); window.location.href = "../views/home.php";</script>';
    exit();
} else {
    echo '<script>alert("Data gagal dihapus!"); window.location.href = "../views/home.php";</script>';
    exit();
}
