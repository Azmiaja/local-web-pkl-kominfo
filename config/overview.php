<?php
$get1 =mysqli_query($conn, "SELECT * FROM mahasiswa");
$coun1 = mysqli_num_rows($get1);
$get2 =mysqli_query($conn, "SELECT * FROM mahasiswa WHERE status = 'PNS'");
$coun2 = mysqli_num_rows($get2);
$get3 =mysqli_query($conn, "SELECT * FROM mahasiswa WHERE pendidikan = 'S1'");
$coun3 = mysqli_num_rows($get3);
?>
