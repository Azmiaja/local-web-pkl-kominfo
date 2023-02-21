<?php
$get1 =mysqli_query($conn, "SELECT * FROM mahasiswa");
$coun1 = mysqli_num_rows($get1);
$get2 =mysqli_query($conn, "SELECT * FROM mahasiswa WHERE status = 'PNS'");
$coun2 = mysqli_num_rows($get2);
$get3 =mysqli_query($conn, "SELECT * FROM mahasiswa WHERE pendidikan = 'S1'");
$coun3 = mysqli_num_rows($get3);
?>
<div class="line-1">
    <div class="ovw">
        <a href="#">
            <span class="ov-title"><?=$coun1; ?></span>
            <span class="ov-nm">Jumlah Pegawai</span>
        </a>
    </div>
    <div class="ovw">
        <a href="#">
            <span class="ov-title"><?=$coun2;?></span>
            <span class="ov-nm">Jumlah PNS</span>
        </a>
    </div>
    <div class="ovw">
        <a href="#">
            <span class="ov-title"><?=$coun3; ?></span>
            <span class="ov-nm">Jumlah S1</span>
        </a>
    </div>
</div>