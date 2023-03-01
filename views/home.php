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

<!-- overview -->
<div class="container">
  <section id="page-content">
    <h2 class="overview">Overview</h2>
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
    <h2 class="overview">Data Pegawai</h2>
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
                    <button>
                      <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 3.99997H6C4.89543 3.99997 4 4.8954 4 5.99997V18C4 19.1045 4.89543 20 6 20H18C19.1046 20 20 19.1045 20 18V12M18.4142 8.41417L19.5 7.32842C20.281 6.54737 20.281 5.28104 19.5 4.5C18.7189 3.71895 17.4526 3.71895 16.6715 4.50001L15.5858 5.58575M18.4142 8.41417L12.3779 14.4505C12.0987 14.7297 11.7431 14.9201 11.356 14.9975L8.41422 15.5858L9.00257 12.6441C9.08001 12.2569 9.27032 11.9013 9.54951 11.6221L15.5858 5.58575M18.4142 8.41417L15.5858 5.58575" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </button>
                  </a>
                  <a href="../config/delete.php?id=<?= $data['id']; ?>">
                    <button  onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')">
                      <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 11V17" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M14 11V17" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M4 7H20" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6 7H12H18V18C18 19.6569 16.6569 21 15 21H9C7.34315 21 6 19.6569 6 18V7Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </button>
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
<?php include '../layout/footer.php'; ?>