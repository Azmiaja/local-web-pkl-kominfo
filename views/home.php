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
      <div class="container-ov">
        <div class="page-title">
          <h2 class="overview">Overview</h2>
        </div>
        <div class="container-card">
          <!-- CARD SATU -->
          <div class="card-1 ovw">
            <div class="in-card-1">
              <div class="circle">
                <i class="fa-solid fa-users"></i>
              </div>
            </div>
            <div class="in-2-card-1">
              <div class="ovw-1">
                <span class="ov-title"><?= $total; ?></span>
                <span class="ov-nm">Jumlah Pegawai</span>
              </div>
              <div class="ovw-2">
                <div class="view-jk">
                  <span class="jml"><?= $jk_laki; ?></span>
                  <span class="jk">Laki - Laki</span>
                </div>
                <div class="view-jk">
                  <span class="jml"><?= $jk_p; ?></span>
                  <span class="jk">Permpuan</span>
                </div>
              </div>
            </div>
            <div class="bt-card-1">
              <a href="./statistik-usia.php">
                <button>View</button>
              </a>
            </div>
          </div>
          <!-- CARD DUA DAN TIGA -->
          <div class="card-2-3">
            <div class="card-2 ovw">
              <div class="tag-pg">
                <i class="fa-solid fa-pen-nib"></i>
              </div>
              <div class="tag-num">
                <span class="ov-title-1"><?= $pns; ?></span>
                <span class="ov-nm-1">Jumlah PNS</span>
              </div>
            </div>
            <div class="card-3 ovw">
              <div class="tag-num-2">
                <span class="ov-title-2"><?= $d3; ?></span>
                <span class="ov-nm-2">Jumlah D3</span>
              </div>
              <div class="tag-pg-2">
                <i class="fa-solid fa-file-lines"></i>
              </div>
            </div>
          </div>
          <!-- CARD DUA DAN TIGA -->
          <div class="card-2-3">
            <div class="card-2 ovw">
              <div class="tag-pg">
                <i class="fa-solid fa-envelope"></i>
              </div>
              <div class="tag-num">
                <span class="ov-title-1"><?= $nopns; ?></span>
                <span class="ov-nm-1">Jumlah NON-PNS</span>
              </div>
            </div>
            <div class="card-3 ovw">
              <div class="tag-num-2">
                <span class="ov-title-2"><?= $s1; ?></span>
                <span class="ov-nm-2">Jumlah S1</span>
              </div>
              <div class="tag-pg-2">
                <i class="fa-solid fa-book"></i>
              </div>
            </div>
          </div>
          <!-- CARD DUA DAN TIGA -->
          <div class="card-2-3">
            <div class="card-2 ovw">
              <div class="tag-pg">
                <i class="fa-solid fa-paperclip"></i>
              </div>
              <div class="tag-num">
                <span class="ov-title-1"><?= $magang; ?></span>
                <span class="ov-nm-1">Jumlah Magang</span>
              </div>
            </div>
            <div class="card-3 ovw">
              <div class="tag-num-2">
                <span class="ov-title-2"><?= $s2; ?></span>
                <span class="ov-nm-2">Jumlah S2</span>
              </div>
              <div class="tag-pg-2">
                <i class="fa-solid fa-briefcase"></i>
              </div>
            </div>
          </div>
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
              <th>Jenis Kelamin</th>
              <th>Tanggal Lahir</th>
              <th>Usia</th>
              <th>Pendidikan</th>
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