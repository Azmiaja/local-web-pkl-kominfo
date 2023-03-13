<?php
session_start();
include '../config/app.php';

include('../layout/header.php');

include('../config/overview.php');

$data_pegawai = select("SELECT * FROM tb_pegawai")

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
                <span class="ov-nm">Jumlah Karyawan</span>
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
              <a href="./statistics.php">
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
                <span class="ov-title-1"><?= $asn; ?></span>
                <span class="ov-nm-1">Jumlah ASN</span>
              </div>
            </div>
            <div class="card-3 ovw">
              <div class="tag-num-2">
                <span class="ov-title-2"><?= $diploma; ?></span>
                <span class="ov-nm-2">Jumlah DIPLOMA</span>
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
                <span class="ov-title-1"><?= $nonasn; ?></span>
                <span class="ov-nm-1">Jumlah NON ASN</span>
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
                <span class="ov-title-1"><?= $sma_smk; ?></span>
                <span class="ov-nm-1">Jumlah SMA/SMK</span>
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
        <h2 class="overview">Data Karyawan</h2>
      </div>
      <div class="container">
        <table id="example" class="display cell-border order-column">
          <thead class="">
            <tr>
              <th>NO.</th>
              <th>NAMA</th>
              <th>JENIS KELAMIN</th>
              <th>STATUS</th>
              <th>PENDIDIKAN</th>
              <th>ACTION</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data_pegawai as $data) : ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['jenis_kelamin']; ?></td>
                <td><?php echo $data['status']; ?></td>
                <td><?php echo $data['pendidikan']; ?></td>
                <td>
                  <div class="bt-eddt">
                    <a href="./edit-data.php?id=<?= $data['no_id']; ?>">
                      <i class="fa-solid fa-file-pen"></i>
                    </a>
                    <a href="../config/delete.php?id=<?= $data['no_id']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus <?= $data['nama']?> ?')">
                      <i class="fa-solid fa-trash"></i>
                    </a>
                  </div>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
          <tfoot>
            <tr>
              <th>NO.</th>
              <th>NAMA</th>
              <th>JENIS KELAMIN</th>
              <th>STATUS</th>
              <th>PENDIDIKAN</th>
              <th>ACTION</th>
            </tr>
          </tfoot>
        </table>
        <?php mysqli_close($conn); ?>
      </div>
    </section>
  </div>
</main>
<?php include '../layout/footer.php'; ?>