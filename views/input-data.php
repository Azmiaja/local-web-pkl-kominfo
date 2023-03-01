<?php
include '../config/app.php';

session_start();

if (isset($_SESSION['success'])) {
  echo "<script>alert('" . $_SESSION['success'] . "');</script>";
  unset($_SESSION['success']);
} elseif (isset($_SESSION['error'])) {
  echo "<script>alert('" . $_SESSION['error'] . "');</script>";
  unset($_SESSION['error']);
}


include '../layout/header.php';
?>

<!-- function title -->
<script>
  window.addEventListener('load', function() {
    ubahTitle('Tambah Data Baru');
  });
</script>

<section>
  <div class="container-input">
    <form action="../config/input.php" method="post">
      <h2>Input Data Pegawai</h2>
      <div class="input-data">
        <label for="nama">Nama Lengkap</label>
        <input type="text" name="nama" id="nama" required>
      </div>
      <div class="input-data">
        <label for="jenis-kelamin">Jenis Kelamin</label>
        <select name="jenis-kelamin" id="jenis-kelamin" required>
          <option value="" disabled selected>-- Pilih Jenis Kelamin --</option>
          <option value="Laki - Laki">Laki - Laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
      </div>
      <div class="input-data">
        <label for="tanggal-lahir">Tanggal Lahir</label>
        <input type="date" name="tanggal-lahir" id="tanggal-lahir" required onchange="hitungUmur()" max="2005-12-31">

      </div>
      <div class="input-data">
        <label for="usia">Usia</label>
        <input type="number" name="usia" id="usia" min="18" max="60" required>
      </div>
      <div class="input-data">
        <label for="pendidikan">Pendidikan</label>
        <select name="pendidikan" id="pendidikan" required>
          <option value="" disabled selected>-- Pilih Pendidikan --</option>
          <option value="SMA/SMK">SMA/SMK</option>
          <option value="D1">D1</option>
          <option value="D2">D2</option>
          <option value="D3">D3</option>
          <option value="S1">S1</option>
          <option value="S2">S2</option>
        </select>
      </div>
      <div class="input-data">
        <label for="status">Status</label>
        <select name="status" id="status" required>
          <option value="" disabled selected>-- Pilih Status --</option>
          <option value="PNS">PNS</option>
          <option value="NON PNS">NON PNS</option>
          <option value="Magang">Magang</option>
        </select>
      </div>
      <div class="button">
        <button type="submit" id="submit">Simpan</button>
        <!-- <button id="batal">Batal</button> -->
      </div>
    </form>
  </div>
</section>

<?php include '../layout/footer.php'; ?>