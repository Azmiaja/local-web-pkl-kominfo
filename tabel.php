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
      <?php
      $no = 1;
      $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
      while ($row = mysqli_fetch_array($result)) {
      ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $row['nama']; ?></td>
          <td><?php echo $row['jenis_kelamin']; ?></td>
          <td><?php echo $row['tanggal_lahir']; ?></td>
          <td><?php echo $row['usia']; ?></td>
          <td><?php echo $row['pendidikan']; ?></td>
          <td><?php echo $row['status']; ?></td>
          <td>
            <button>Edit</button>
            <button>Delete</button>
          </td>
        </tr>
      <?php } ?>
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

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"></script>
  <script>
    $(document).ready(function() {
      var table = $('#example').DataTable({
        order: [
          [3, 'desc']
        ],
        lengthMenu: [
          [10, 25, 50, -1],
          [10, 25, 50, 'All']
        ],
        pageLength: 10,
        searching: true,

      });
      

    });

  </script>

</div>