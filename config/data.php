<?php

//query data jenis kelamin mahasiswa
$jumlah_laki = mysqli_query($conn, "SELECT COUNT(*) AS total FROM data_pegawai WHERE jenis_kelamin='Laki - Laki'");
$jumlah_perempuan = mysqli_query($conn, "SELECT COUNT(*) AS total FROM data_pegawai WHERE jenis_kelamin='Perempuan'");

$laki_laki = mysqli_fetch_assoc($jumlah_laki)['total'];
$perempuan = mysqli_fetch_assoc($jumlah_perempuan)['total'];

//query data usia data_pegawai
$u18 = mysqli_query($conn, "SELECT COUNT(*) AS total FROM data_pegawai WHERE usia='18'");
$u19 = mysqli_query($conn, "SELECT COUNT(*) AS total FROM data_pegawai WHERE usia='19'");
$u20 = mysqli_query($conn, "SELECT COUNT(*) AS total FROM data_pegawai WHERE usia='20'");
$u21 = mysqli_query($conn, "SELECT COUNT(*) AS total FROM data_pegawai WHERE usia='21'");
$u22 = mysqli_query($conn, "SELECT COUNT(*) AS total FROM data_pegawai WHERE usia='22'");
$u23 = mysqli_query($conn, "SELECT COUNT(*) AS total FROM data_pegawai WHERE usia='23'");
$u24 = mysqli_query($conn, "SELECT COUNT(*) AS total FROM data_pegawai WHERE usia='24'");
$u25 = mysqli_query($conn, "SELECT COUNT(*) AS total FROM data_pegawai WHERE usia='25'");
$u28 = mysqli_query($conn, "SELECT COUNT(*) AS total FROM data_pegawai WHERE usia='28'");
$u37 = mysqli_query($conn, "SELECT COUNT(*) AS total FROM data_pegawai WHERE usia='37'");

$um18 = mysqli_fetch_assoc($u18)['total'];
$um19 = mysqli_fetch_assoc($u19)['total'];
$um20 = mysqli_fetch_assoc($u20)['total'];
$um21 = mysqli_fetch_assoc($u21)['total'];
$um22 = mysqli_fetch_assoc($u22)['total'];
$um23 = mysqli_fetch_assoc($u23)['total'];
$um24 = mysqli_fetch_assoc($u24)['total'];
$um25 = mysqli_fetch_assoc($u25)['total'];
$um28 = mysqli_fetch_assoc($u28)['total'];
$um37 = mysqli_fetch_assoc($u37)['total'];


//query data pendidikan
$pendidikan = mysqli_query($conn, "SELECT COUNT(*) as total, pendidikan FROM data_pegawai GROUP BY pendidikan");

$labels = array();
$data = array();

while ($row = mysqli_fetch_assoc($pendidikan)) {
    array_push($labels, $row['pendidikan']);
    array_push($data, $row['total']);
}

$total = array_sum($data);

$percentages = array();
foreach ($data as $value) {
    $percentage = round(($value / $total) * 100);
    array_push($percentages, $percentage);
}


//query data status
$status_pns = mysqli_query($conn, "SELECT COUNT(*) AS total FROM data_pegawai WHERE status='PNS'");
$status_nonpns = mysqli_query($conn, "SELECT COUNT(*) AS total FROM data_pegawai WHERE status='NON PNS'");
$status_magang = mysqli_query($conn, "SELECT COUNT(*) AS total FROM data_pegawai WHERE status='Magang'");

$pns = mysqli_fetch_assoc($status_pns)['total'];
$non_pns = mysqli_fetch_assoc($status_nonpns)['total'];
$magang = mysqli_fetch_assoc($status_magang)['total'];

//prosentase usia
$total_pegawai = mysqli_query($conn, "SELECT COUNT(*) AS total FROM data_pegawai");
$result = mysqli_fetch_assoc($total_pegawai);
$total = $result['total'];

$usia = array(); // inisialisasi array usia
for($i = 18; $i <= 25; $i++) {
  $query = mysqli_query($conn, "SELECT COUNT(*) AS total FROM data_pegawai WHERE usia='$i'");
  $result = mysqli_fetch_assoc($query);
  $usia[$i] = number_format(($result['total']/$total)*100, 2); // menghitung prosentase dan menyimpan ke dalam array usia dengan format 1 digit di belakang koma
}




$conn->close();
