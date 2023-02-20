<div class="tabel1">
    <div class="containr1">
        <label for="">Show <input type="number" name="show-tabel" id="show-table-input" onchange="updateTable()"></label>
        <button onclick="printTable()">Cetak</button>
    </div>
    <div class="containr2">
        <table id="data-tabel" class="dt-pegawai" border="1px" id="myTable">
            <tr style="text-align: left;">
                <th>No.</th>
                <th>Nama Lengkap</th>
                <th>Usia</th>
                <th>Jenis Kelamin</th>
                <th>Pendidikan</th>
                <th>Jabatan</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            <?php
            $no = 1;
            $result = mysqli_query($conn, "SELECT * FROM t_pegawai");
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <tr class="tr">
                    <td style="text-align: center;"><?php echo $no++; ?></td>
                    <td><?php echo $row['Nama Lengkap']; ?></td>
                    <td><?php echo $row['Usia']; ?></td>
                    <td><?php echo $row['Pendidikan']; ?></td>
                    <td><?php echo $row['Jabatan']; ?></td>
                    <td>
                        <button>Edit</button>
                        <button>Delete</button>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <div class="container3">
        <button id="prevBtn" onclick="prevPage()">&laquo; Prev</button>
        <div class="page-number" id="pageNumber">1</div>
        <button id="nextBtn" onclick="nextPage()">Next &raquo;</button>
    </div>

    <?php mysqli_close($conn); ?>
</div>