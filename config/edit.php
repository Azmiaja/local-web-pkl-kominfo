<?php
include './app.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis-kelamin'];
$tanggal_lahir = $_POST['tanggal-lahir'];
$usia = $_POST['usia'];
$pendidikan = $_POST['pendidikan'];
$status = $_POST['status'];

// if (isset($_POST['ubah'])) {
//   session_start();
//   if (edit($_POST) > 0) {
//     // Jika data berhasil disimpan, munculkan alert dengan pesan sukses

//   } else {
//     // Jika terjadi kesalahan dalam menyimpan data, munculkan alert dengan pesan error


//   }

//   mysqli_close($conn);
// }

$dataArr = array(
  'id' => $id,
  'nama' => $nama,
  'jenis-kelamin' => $jenis_kelamin,
  'tanggal-lahir' => $tanggal_lahir,
  'usia' => $usia,
  'pendidikan' => $pendidikan,
  'status' => $status
);

if (updatedata($dataArr) == 1) {
  echo '<script>alert("Data berhasil diubah!"); window.location.href = "../views/home.php";</script>';
  exit();
} else {
  echo '<script>alert("Data gagal diubah!"); window.location.href = "../views/edit-data.php";</script>';
  exit();
}
