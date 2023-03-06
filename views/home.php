<?php
session_start();
include '../config/app.php';

include('../layout/header.php');

include('../config/overview.php');

$data_pegawai = select("SELECT * FROM data_pegawai")

?>

<!-- fungsi judul -->
<script>
  window.addEventListener('load', function() {
    ubahTitle('Data Pegawai Dinas Kominfo Kota Madiun');
  });
</script>

<main>
  <!-- overview -->
  <div class="container">
    <section>
      <div class="page-title">
        <h2 class="overview">Overview</h2>
      </div>
      <div class="line-1">
        <div class="ovw">
          <a href="#">
            <span class="ov-title"><?= $coun1; ?></span>
            <span class="ov-nm">Jumlah Pegawai</span>
          </a>
        </div>
        <div class="ovw">
          <a href="#">
            <span class="ov-title"><?= $coun2; ?></span>
            <span class="ov-nm">Jumlah PNS</span>
          </a>
        </div>
        <div class="ovw">
          <a href="#">
            <span class="ov-title"><?= $coun3; ?></span>
            <span class="ov-nm">Jumlah S1</span>
          </a>
        </div>
      </div>
    </section>

    <!-- data tabel -->
    <section>
      <div class="page-title">
        <h2 class="overview">Data Pegawai</h2>
      </div>
      <div class="container">
        <table id="example" class="display cell-border order-column">
          <thead class="">
            <tr>
              <th>No.</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Tanggal Lahir</th>
              <th>Usia</th>
              <th>Pendidikan</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data_pegawai as $data) : ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['jenis_kelamin']; ?></td>
                <td><?php echo $data['tanggal_lahir']; ?></td>
                <td><?php echo $data['usia']; ?></td>
                <td><?php echo $data['pendidikan']; ?></td>
                <td><?php echo $data['status']; ?></td>
                <td>
                  <div class="bt-eddt">
                    <a href="./edit-data.php?id=<?= $data['id']; ?>">
                      <i class="fa-solid fa-file-pen"></i>
                    </a>
                    <a href="../config/delete.php?id=<?= $data['id']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')">
                      <i class="fa-solid fa-trash"></i>
                    </a>
                  </div>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
          <tfoot>
            <tr>
              <th>No.</th>
              <th>Nama</th>
              <th>Usia</th>
              <th>Jenis Kelamin</th>
              <th>Pendidikan</th>
              <th>Jabatan</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </tfoot>
        </table>
        <?php mysqli_close($conn); ?>
      </div>
    </section>
  </div>
</main>
<?php include '../layout/footer.php'; ?>