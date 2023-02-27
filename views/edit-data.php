<?php 
include '../config/app.php';

if (isset($_SESSION['success'])) {
    echo "<script>alert('" . $_SESSION['success'] . "');</script>";
    unset($_SESSION['success']);
} elseif (isset($_SESSION['error'])) {
    echo "<script>alert('" . $_SESSION['error'] . "');</script>";
    unset($_SESSION['error']);
}

$id = (int)$_GET['id'];
$datamhs = select("SELECT * FROM mahasiswa WHERE id=$id")[0];

include '../layout/header.php';
?>

<section>
    <div class="container-input">
        <form action="../config/edit.php" method="post">
            <h2>Edit Data Pegawai</h2>
            <input type="hidden" name="id" id="id" value="<?= $id['id'] ?>">
            <div class="input-data">
                <label for="nama">Nama Lengkap</label>
                <input type="text" name="nama" id="nama" value="<?php echo $datamhs['nama']; ?>">
            </div>
            <div class="input-data">
                <label for="jenis-kelamin">Jenis Kelamin</label>
                <div class="radio-button">
                    <div class="laki-laki">
                        <input type="radio" name="jenis-kelamin" id="laki-laki" value="Laki - Laki" <?php if ($datamhs['jenis_kelamin'] === 'Laki-Laki') echo 'checked'; ?>>
                        <label for="laki-laki">Laki - Laki</label>
                    </div>
                    <div class="perempuan">
                        <input type="radio" name="jenis-kelamin" id="perempuan" value="Perempuan" <?php if ($datamhs['jenis_kelamin'] === 'Perempuan') echo 'checked'; ?>>
                        <label for="perempuan">Perempuan</label>
                    </div>
                </div>
            </div>

            <div class="input-data">
                <label for="tanggal-lahir">Tanggal Lahir</label>
                <input type="date" name="tanggal-lahir" id="tanggal-lahir" onchange="hitungUmur()" value="<?php echo $datamhs['tanggal_lahir']; ?>">
            </div>
            <div class="input-data">
                <label for="usia">Usia</label>
                <input type="text" name="usia" id="usia" value="<?php echo $datamhs['usia']; ?>">
            </div>
            <div class="input-data">
                <label for="pendidikan">Pendidikan</label>
                <input type="text" name="pendidikan" id="pendidikan" value="<?php echo $datamhs['pendidikan']; ?>">
            </div>
            <div class="input-data">
                <label for="status">Status</label>
                <input type="text" name="status" id="status" value="<?php echo $datamhs['status']; ?>">
            </div>
            <div class="button">
                <button type="submit" id="ubah">Ubah</button>
                <!-- <button id="batal">Batal</button> -->
            </div>
        </form>
    </div>
</section>

<?php include '../layout/footer.php'; ?>