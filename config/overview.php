<?php
// jumlah pegawai
$jml =mysqli_query($conn, "SELECT * FROM data_pegawai");
$total = mysqli_num_rows($jml);
// jumlah pegawai pns
$jml_pns =mysqli_query($conn, "SELECT * FROM data_pegawai WHERE status = 'PNS'");
$pns = mysqli_num_rows($jml_pns);
// jumlah pegawai non-pns
$jml_nopns =mysqli_query($conn, "SELECT * FROM data_pegawai WHERE status = 'NON PNS'");
$nopns = mysqli_num_rows($jml_nopns);
// jumlah pegawai magang
$jml_magang =mysqli_query($conn, "SELECT * FROM data_pegawai WHERE status = 'Magang'");
$magang = mysqli_num_rows($jml_magang);
// jumlah pegawai D3
$jml_d3 =mysqli_query($conn, "SELECT * FROM data_pegawai WHERE pendidikan = 'D3'");
$d3 = mysqli_num_rows($jml_d3);
// jumlah pegawai S1
$jml_s1 =mysqli_query($conn, "SELECT * FROM data_pegawai WHERE pendidikan = 'S1'");
$s1 = mysqli_num_rows($jml_s1);
// jumlah pegawai S2
$jml_s2 =mysqli_query($conn, "SELECT * FROM data_pegawai WHERE pendidikan = 'S2'");
$s2 = mysqli_num_rows($jml_s2);
//jumlah laki - laki
$get4 =mysqli_query($conn, "SELECT * FROM data_pegawai WHERE jenis_kelamin = 'Laki - Laki'");
$jk_laki = mysqli_num_rows($get4);
// jumlah perempuan
$get5 =mysqli_query($conn, "SELECT * FROM data_pegawai WHERE jenis_kelamin = 'Perempuan'");
$jk_p = mysqli_num_rows($get5);