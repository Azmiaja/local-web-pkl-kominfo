<?php
include 'koneksi.php';

// Query untuk mengambil data dari tabel
$sql = "SELECT * FROM t_pegawai";

// Jalankan query
$result = $conn->query($sql);

// Buat array untuk menampung data
$data = array();

// Loop through setiap baris data dan tambahkan ke array
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        array_push($data, $row);
    }
}

// Return data dalam format JSON
echo json_encode($data);

// Tutup koneksi ke database
$conn->close();
?>
