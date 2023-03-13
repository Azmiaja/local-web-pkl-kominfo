<?php
include './app.php';

$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis-kelamin'];
$status = $_POST['status'];
$pendidikan = $_POST['pendidikan'];

// Validasi input

if (empty($nama) || empty($jenis_kelamin) || empty($status) || empty($pendidikan) ) {
    // Jika ada input yang kosong, tampilkan pesan error
    session_start();
    $_SESSION['error'] = "Semua field harus diisi!";
    header("Location: ../views/input-data.php");
    exit();
    echo "Semua field harus diisi!";
} else {

    if (input($_POST) > 0) {
        // Jika data berhasil disimpan, munculkan alert dengan pesan sukses
        session_start();
        $_SESSION['success'] = "Data berhasil ditambahkan!";
        header("Location: ../views/input-data.php");
        exit();
    } else {
        // Jika terjadi kesalahan dalam menyimpan data, munculkan alert dengan pesan error
        session_start();
        $_SESSION['error'] = "Error: " . mysqli_error($conn) . "";
        header("Location: ../views/input-data.php");
        exit();
    }

    mysqli_close($conn);
}
