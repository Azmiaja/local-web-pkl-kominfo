<?php 
include('koneksi.php'); 

session_start();

if (isset($_SESSION['success'])) {
    echo "<script>alert('" . $_SESSION['success'] . "');</script>";
    unset($_SESSION['success']);
} elseif (isset($_SESSION['error'])) {
    echo "<script>alert('" . $_SESSION['error'] . "');</script>";
    unset($_SESSION['error']);
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <title>Data Pegawai Kominfo Kota Madiun</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style-input.css">
</head>

<body>
  <?php include_once('nav/nav.php') ?>
  <section>
    <div class="container">
      <form action="input.php" method="post">
        <h2>Input Data Pegawai</h2>
        <div class="input-data">
          <label for="nama">Nama Lengkap</label>
          <input type="text" name="nama" id="nama">
        </div>
        <div class="input-data">
          <label for="jenis-kelamin">Jenis Kelamin</label>
          <div class="radio-button">
            <div class="laki-laki">
              <input type="radio" name="jenis-kelamin" id="laki-laki" value="Laki - Laki" checked>
              <label for="laki-laki">Laki - Laki</label>
            </div>
            <div class="perempuan">
              <input type="radio" name="jenis-kelamin" id="perempuan" value="Perempuan">
              <label for="perempuan">Perempuan</label>
            </div>
          </div>
        </div>
        <div class="input-data">
          <label for="tanggal-lahir">Tanggal Lahir</label>
          <input type="date" name="tanggal-lahir" id="tanggal-lahir" onchange="hitungUmur()">
        </div>
        <div class="input-data">
          <label for="usia">Usia</label>
          <input type="text" name="usia" id="usia">
        </div>
        <div class="input-data">
          <label for="pendidikan">Pendidikan</label>
          <input type="text" name="pendidikan" id="pendidikan">
        </div>
        <div class="input-data">
          <label for="status">Status</label>
          <input type="text" name="status" id="status">
        </div>
        <div class="button">
          <button type="submit" id="submit">Simpan</button>
          <!-- <button id="batal">Batal</button> -->
        </div>
      </form>
      <script>
        function hitungUmur() {
          var tanggalLahir = new Date(document.getElementById("tanggal-lahir").value);
          var today = new Date();
          var age = today.getFullYear() - tanggalLahir.getFullYear();
          var month = today.getMonth() - tanggalLahir.getMonth();
          if (month < 0 || (month === 0 && today.getDate() < tanggalLahir.getDate())) {
            age--;
          }
          document.getElementById("usia").value = age;
        }
      </script>
    </div>
  </section>
  <?php include_once('footer.php') ?>
</body>


</html>