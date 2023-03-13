<?php
// jumlah pegawai
$jml =mysqli_query($conn, "SELECT * FROM tb_pegawai");
$total = mysqli_num_rows($jml);
// jumlah pegawai asn
$jml_asn =mysqli_query($conn, "SELECT * FROM tb_pegawai WHERE status = 'ASN'");
$asn = mysqli_num_rows($jml_asn);
// jumlah pegawai non-asn
$jml_nonasn =mysqli_query($conn, "SELECT * FROM tb_pegawai WHERE status = 'NON ASN'");
$nonasn = mysqli_num_rows($jml_nonasn);
// jumlah pegawai magang
$jml_smak =mysqli_query($conn, "SELECT * FROM tb_pegawai WHERE pendidikan = 'SMA/SMK'");
$sma_smk = mysqli_num_rows($jml_smak);
// jumlah pegawai D3
$jml_diploma =mysqli_query($conn, "SELECT * FROM tb_pegawai WHERE pendidikan = 'DIPLOMA'");
$diploma = mysqli_num_rows($jml_diploma);
// jumlah pegawai S1
$jml_s1 =mysqli_query($conn, "SELECT * FROM tb_pegawai WHERE pendidikan = 'S1'");
$s1 = mysqli_num_rows($jml_s1);
// jumlah pegawai S2
$jml_s2 =mysqli_query($conn, "SELECT * FROM tb_pegawai WHERE pendidikan = 'S2'");
$s2 = mysqli_num_rows($jml_s2);
//jumlah laki - laki
$get4 =mysqli_query($conn, "SELECT * FROM tb_pegawai WHERE jenis_kelamin = 'LAKI LAKI'");
$jk_laki = mysqli_num_rows($get4);
// jumlah perempuan
$get5 =mysqli_query($conn, "SELECT * FROM tb_pegawai WHERE jenis_kelamin = 'PEREMPUAN'");
$jk_p = mysqli_num_rows($get5);