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
<main>
    <div class="title">
        <h1>Edit Data</h1>
        <ul>
            <li>
                <a href="../views/home.php">Beranda
                    <i class="fa-solid fa-angle-left"></i>
                </a>
            </li>
            <li>
                <a href="../views/edit-data.php"> Edit Data</a>
            </li>
        </ul>
    </div>
    <section>
        <div class="container-input">
            <form action="../config/edit.php" method="post">
                <h2>Edit Data Karyawan</h2>
                <input type="hidden" name="id" id="id" value="<?= $_GET['id']; ?>">
                <div class="input-data">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama" required value="<?= $dataArr['nama']; ?>">
                </div>
                <div class="input-data">
                    <label for="jenis-kelamin">Jenis Kelamin</label>
                    <select name="jenis-kelamin" id="jenis-kelamin">" required>
                        <option value="" disabled selected>-- Pilih Jenis Kelamin --</option>
                        <option <?php if ($dataArr['jenis_kelamin'] == 'LAKI LAKI') {
                                    echo 'selected';
                                } ?> value="LAKI LAKI">LAKI LAKI</option>
                        <option <?php if ($dataArr['jenis_kelamin'] == 'PEREMPUAN') {
                                    echo 'selected';
                                } ?> value="PEREMPUAN">PEREMPUAN</option>
                    </select>
                </div>
                <!-- <div class="input-data">
                    <label for="tanggal-lahir">Tanggal Lahir</label>
                    <input type="date" name="tanggal-lahir" id="tanggal-lahir" required onchange="hitungUmur()" max="2005-12-31" value="<?= $dataArr['tanggal_lahir']; ?>">

                </div>
                <div class="input-data">
                    <label for="usia">Usia</label>
                    <input type="number" name="usia" id="usia" min="18" max="60" value="<?= $dataArr['usia']; ?>" required>
                </div> -->
                <div class="input-data">
                    <label for="pendidikan">Pendidikan</label>
                    <select name="pendidikan" id="pendidikan" required>
                        <option value="" disabled selected>-- Pilih Pendidikan --</option>
                        <option <?php if ($dataArr['pendidikan'] == 'SMA/SMK') {
                                    echo 'selected';
                                } ?> value="SMA/SMK">SMA/SMK</option>
                        <option <?php if ($dataArr['pendidikan'] == 'DIPLOMA') {
                                    echo 'selected';
                                } ?> value="DIPLOMA">DIPLOMA</option>
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
                        <option <?php if ($dataArr['status'] == 'ASN') {
                                    echo 'selected';
                                } ?> value="ASN">ASN</option>
                        <option <?php if ($dataArr['status'] == 'NON ASN') {
                                    echo 'selected';
                                } ?> value="NON PNS">NON ASN</option>
                    </select>
                </div>
                <div class="button">
                    <button onclick="return confirm('Apakah data ini sudah benar ?')" type="submit" id="submit">Ubah</button>
                    <!-- <button id="batal">Batal</button> -->
                </div>
            </form>
        </div>
    </section>
</main>

<?php include '../layout/footer.php'; ?>