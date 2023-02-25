<?php
include 'koneksi.php';

//query untuk menghitung jumlah laki-laki dan perempuan
$jumlah_laki = mysqli_query($conn, "SELECT COUNT(*) AS total FROM mahasiswa WHERE jenis_kelamin='Laki-laki'");
$jumlah_perempuan = mysqli_query($conn, "SELECT COUNT(*) AS total FROM mahasiswa WHERE jenis_kelamin='Perempuan'");

//simpan hasil query ke dalam variabel
$laki_laki = mysqli_fetch_assoc($jumlah_laki)['total'];
$perempuan = mysqli_fetch_assoc($jumlah_perempuan)['total'];

//usia mahasiswa
$u18 = mysqli_query($conn, "SELECT COUNT(*) AS total FROM mahasiswa WHERE usia='18'");
$u19 = mysqli_query($conn, "SELECT COUNT(*) AS total FROM mahasiswa WHERE usia='19'");
$u20 = mysqli_query($conn, "SELECT COUNT(*) AS total FROM mahasiswa WHERE usia='20'");
$u21 = mysqli_query($conn, "SELECT COUNT(*) AS total FROM mahasiswa WHERE usia='21'");
$u22 = mysqli_query($conn, "SELECT COUNT(*) AS total FROM mahasiswa WHERE usia='22'");
$u23 = mysqli_query($conn, "SELECT COUNT(*) AS total FROM mahasiswa WHERE usia='23'");
$u24 = mysqli_query($conn, "SELECT COUNT(*) AS total FROM mahasiswa WHERE usia='24'");
$u25 = mysqli_query($conn, "SELECT COUNT(*) AS total FROM mahasiswa WHERE usia='25'");

$um18 = mysqli_fetch_assoc($u18)['total'];
$um19 = mysqli_fetch_assoc($u19)['total'];
$um20 = mysqli_fetch_assoc($u20)['total'];
$um21 = mysqli_fetch_assoc($u21)['total'];
$um22 = mysqli_fetch_assoc($u22)['total'];
$um23 = mysqli_fetch_assoc($u23)['total'];
$um24 = mysqli_fetch_assoc($u24)['total'];
$um25 = mysqli_fetch_assoc($u25)['total'];

// Query untuk mengambil data pendidikan
$pendidikan = mysqli_query($conn, "SELECT COUNT(*) as total, pendidikan FROM mahasiswa GROUP BY pendidikan");

// Memasukkan data ke dalam variabel
$labels = array();
$data = array();

while ($row = mysqli_fetch_assoc($pendidikan)) {
    array_push($labels, $row['pendidikan']);
    array_push($data, $row['total']);
}

// Menghitung total data
$total = array_sum($data);

// Menghitung persentase data
$percentages = array();
foreach ($data as $value) {
    $percentage = round(($value / $total) * 100);
    array_push($percentages, $percentage);
}
// Tutup koneksi ke database
$conn->close();
