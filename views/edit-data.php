<?php
include '../config/app.php';

include '../layout/header.php';


$result = selectdata($_GET['id']);
$dataArr = mysqli_fetch_assoc($result);


?>

<!-- function title -->
<script>
  window.addEventListener('load', function() {
    ubahTitle('Ubah Data Pegawai');
  });
</script>
<!-- main content  -->
<section>
    <div class="container-input">
        <form action="../config/edit.php" method="post">
            <h2>Edit Data Pegawai</h2>
            <input type="hidden" name="id" id="id" value="<?= $_GET['id']; ?>">
            <div class="input-data">
                <label for="nama">Nama Lengkap</label>
                <input type="text" name="nama" id="nama" required value="<?= $dataArr['nama']; ?>">
            </div>
            <div class="input-data">
                <label for="jenis-kelamin">Jenis Kelamin</label>
                <select name="jenis-kelamin" id="jenis-kelamin">" required>
                    <option value="" disabled selected>-- Pilih Jenis Kelamin --</option>
                    <option <?php if ($dataArr['jenis_kelamin'] == 'Laki - Laki') {
                                echo 'selected';
                            } ?> value="Laki - Laki">Laki - Laki</option>
                    <option <?php if ($dataArr['jenis_kelamin'] == 'Perempuan') {
                                echo 'selected';
                            } ?> value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="input-data">
                <label for="tanggal-lahir">Tanggal Lahir</label>
                <input type="date" name="tanggal-lahir" id="tanggal-lahir" required onchange="hitungUmur()" max="2005-12-31" value="<?= $dataArr['tanggal_lahir']; ?>">

            </div>
            <div class="input-data">
                <label for="usia">Usia</label>
                <input type="number" name="usia" id="usia" min="18" max="60" value="<?= $dataArr['usia']; ?>" required>
            </div>
            <div class="input-data">
                <label for="pendidikan">Pendidikan</label>
                <select name="pendidikan" id="pendidikan" required>
                    <option value="" disabled selected>-- Pilih Pendidikan --</option>
                    <option <?php if ($dataArr['pendidikan'] == 'SMA/SMK') {
                                echo 'selected';
                            } ?> value="SMA/SMK">SMA/SMK</option>
                    <option <?php if ($dataArr['pendidikan'] == 'D1') {
                                echo 'selected';
                            } ?> value="D1">D1</option>
                    <option <?php if ($dataArr['pendidikan'] == 'D2') {
                                echo 'selected';
                            } ?> value="D2">D2</option>
                    <option <?php if ($dataArr['pendidikan'] == 'D3') {
                                echo 'selected';
                            } ?> value="D3">D3</option>
                    <option <?php if ($dataArr['pendidikan'] == 'S1') {
                                echo 'selected';
                            } ?> value="S1">S1</option>
                    <option <?php if ($dataArr['pendidikan'] == 'S2') {
                                echo 'selected';
                            } ?> value="S2">S2</option>
                </select>
            </div>
            <div class="input-data">
                <label for="status">Status</label>
                <select name="status" id="status" required>
                    <option value="" disabled selected>-- Pilih Status --</option>
                    <option <?php if ($dataArr['status'] == 'PNS') {
                                echo 'selected';
                            } ?> value="PNS">PNS</option>
                    <option <?php if ($dataArr['status'] == 'NON PNS') {
                                echo 'selected';
                            } ?> value="NON PNS">NON PNS</option>
                    <option <?php if ($dataArr['status'] == 'Magang') {
                                echo 'selected';
                            } ?> value="Magang">Magang</option>
                </select>
            </div>
            <div class="button">
                <button  onclick="return confirm('Apakah data ini sudah benar ?')" type="submit" id="submit">Simpan</button>
                <!-- <button id="batal">Batal</button> -->
            </div>
        </form>
    </div>
</section>

<?php include '../layout/footer.php'; ?>