<?php include('koneksi.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <title>Data Pegawai Kominfo Kota Madiun</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" type="text/css" href="style-tabel.css">
  <link rel="stylesheet" type="text/css" href="css/datatables.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" rel="stylesheet">
</head>

<body>
  <?php include('nav/nav.php'); ?>
  <section id="page-content">
    <h2 class="overview">Overview</h2>
    <?php include('coba.php'); ?>
  </section>
  <section>
    <h2 class="overview">Data Pegawai</h2>
    <?php include('tabel.php'); ?>
  </section>
  <footer>
    <span>Dinas Komunikasi dan Informatika Kota Madiun.©2023</span>
  </footer>
</body>

</html>