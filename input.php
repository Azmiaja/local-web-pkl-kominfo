<?php
include 'koneksi.php';

// Mendapatkan nilai input dari form
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis-kelamin'];
$tanggal_lahir = $_POST['tanggal-lahir'];
$usia = $_POST['usia'];
$pendidikan = $_POST['pendidikan'];
$status = $_POST['status'];

// Validasi input
if (empty($nama) || empty($jenis_kelamin) || empty($tanggal_lahir) || empty($usia) || empty($pendidikan) || empty($status)) {
    // Jika ada input yang kosong, tampilkan pesan error
    session_start();
        $_SESSION['error'] = "Semua field harus diisi!";
        header("Location: input-data.php");
        exit();
    echo "Semua field harus diisi!";
} else {
    // Jika semua input sudah diisi, simpan data ke database

    // Koneksi ke database
    

    // Membuat query untuk menyimpan data ke database
    $sql = "INSERT INTO mahasiswa (nama, jenis_kelamin, tanggal_lahir, usia, pendidikan, status)
          VALUES ('$nama', '$jenis_kelamin', '$tanggal_lahir', '$usia', '$pendidikan', '$status')";

    if (mysqli_query($conn, $sql)) {
        // Jika data berhasil disimpan, munculkan alert dengan pesan sukses
        session_start();
        $_SESSION['success'] = "Data berhasil disimpan!";
        header("Location: input-data.php");
        exit();
    } else {
        // Jika terjadi kesalahan dalam menyimpan data, munculkan alert dengan pesan error
        session_start();
        $_SESSION['error'] = "Error: " . $sql . "<br>" . mysqli_error($conn) . "";
        header("Location: input-data.php");
        exit();
    }

    mysqli_close($conn);
}
