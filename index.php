<?php include('koneksi.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <title>Data Pegawai Kominfo Kota Madiun</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="style-tabel.css">
  <link rel="stylesheet" type="text/css" href="css/datatables.min.css" />
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <?php include_once('nav/nav.php'); ?>
  <section id="page-content">
    <h2 class="overview">Overview</h2>
    <?php include('overview.php'); ?>
  </section>
  <section>
    <h2 class="overview">Data Pegawai</h2>
    <?php include_once('tabel.php'); ?>
  </section>
  <?php include_once('footer.php') ?>
</body>

</html>