<div class="div">
    <table class="tabel-1" border="1px">
        <?php
        $sql = "SELECT COUNT(id) FROM t_pegawai";
        $result = mysqli_query($conn, $sql);
        ?>
        <?php
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <tr style="height: 50px; margin: 0;">
                    <th style="font-size: 36px;"><?php echo $row["COUNT(id)"]; ?></th>
                    <th style="font-size: 36px;"><?php echo $row["COUNT(id)"]; ?></th>
                    <th style="font-size: 36px;"><?php echo $row["COUNT(id)"]; ?></th>
                </tr>
                <tr>
                    <th class="dt-ov">Jumlah Pegawai</th>
                    <th class="dt-ov">Jumlah Pegawai</th>
                    <th class="dt-ov">Jumlah Pegawai</th>
                </tr>
            <?php }
        } else {
            ?>
            <tr>
                <th><?php echo 00; ?></th>
                <th>Jumlah Pegawai</th>
            </tr>

        <?php } ?>
    </table>
</div>