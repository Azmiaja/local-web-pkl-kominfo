<?php

//query data jenis kelamin mahasiswa
$jumlah_laki = mysqli_query($conn, "SELECT COUNT(*) AS total FROM tb_pegawai WHERE jenis_kelamin='LAKI LAKI'");
$jumlah_perempuan = mysqli_query($conn, "SELECT COUNT(*) AS total FROM tb_pegawai WHERE jenis_kelamin='PEREMPUAN'");

$laki_laki = mysqli_fetch_assoc($jumlah_laki)['total'];
$perempuan = mysqli_fetch_assoc($jumlah_perempuan)['total'];

// Hitung total pegawai
$total_pegawai = $laki_laki + $perempuan;

$persen_laki_laki = round(($laki_laki / $total_pegawai) * 100, 1);
$persen_perempuan = round(($perempuan / $total_pegawai) * 100, 1);



//query data pendidikan
$jml_sma = mysqli_query($conn, "SELECT COUNT(*) AS total FROM tb_pegawai WHERE pendidikan='SMA/SMK'");
$jml_diploma = mysqli_query($conn, "SELECT COUNT(*) AS total FROM tb_pegawai WHERE pendidikan='DIPLOMA'");
$jml_s1 = mysqli_query($conn, "SELECT COUNT(*) AS total FROM tb_pegawai WHERE pendidikan='S1'");
$jml_s2 = mysqli_query($conn, "SELECT COUNT(*) AS total FROM tb_pegawai WHERE pendidikan='s2'");

$sma = mysqli_fetch_assoc($jml_sma)['total'];
$diploma = mysqli_fetch_assoc($jml_diploma)['total'];
$s1 = mysqli_fetch_assoc($jml_s1)['total'];
$s2 = mysqli_fetch_assoc($jml_s2)['total'];

// Hitung total pegawai
$total_pegawai = $laki_laki + $perempuan;

$persen_sma = round(($sma / $total_pegawai) * 100, 1);
$persen_diploma = round(($diploma / $total_pegawai) * 100, 1);
$persen_s1 = round(($s1 / $total_pegawai) * 100, 1);
$persen_s2 = round(($s2 / $total_pegawai) * 100, 1);


//query data status
$st_asn = mysqli_query($conn, "SELECT COUNT(*) AS total FROM tb_pegawai WHERE status='ASN'");
$st_nonasn = mysqli_query($conn, "SELECT COUNT(*) AS total FROM tb_pegawai WHERE status='NON ASN'");

$asn = mysqli_fetch_assoc($st_asn)['total'];
$nonasn = mysqli_fetch_assoc($st_nonasn)['total'];

$total_pegawai = $asn + $nonasn;

$persen_asn = round(($asn / $total_pegawai) * 100, 1);
$persen_nonasn = round(($nonasn / $total_pegawai) * 100, 1);

// //prosentase usia
// $total_pegawai = mysqli_query($conn, "SELECT COUNT(*) AS total FROM tb_pegawai");
// $result = mysqli_fetch_assoc($total_pegawai);
// $total = $result['total'];

// $usia = array(); // inisialisasi array usia
// for($i = 18; $i <= 25; $i++) {
//   $query = mysqli_query($conn, "SELECT COUNT(*) AS total FROM tb_pegawai WHERE usia='$i'");
//   $result = mysqli_fetch_assoc($query);
//   $usia[$i] = number_format(($result['total']/$total)*100, 2); // menghitung prosentase dan menyimpan ke dalam array usia dengan format 1 digit di belakang koma
// }




$conn->close();
