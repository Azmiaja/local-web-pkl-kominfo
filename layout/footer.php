    <footer>
        <span>Dinas Komunikasi dan Informatika Kota Madiun.©2023</span>
    </footer>
    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable({
                order: [
                    [0, 'asc'],
                ],
                lengthMenu: [
                    [10, 25, 50, -1],
                    [10, 25, 50, 'All']
                ],
                pageLength: 10,
                searching: true,

            });


        });

        //delete data
        $(document).on('click', '.delete-btn', function() {
            var table = $('#example').DataTable();
            var row = $(this).closest('tr');
            table.row(row).remove().draw();
        });
    </script>
    <script>
        function hitungUmur() {
            var tanggalLahir = new Date(document.getElementById("tanggal-lahir").value);
            var today = new Date();
            var age = today.getFullYear() - tanggalLahir.getFullYear();
            var month = today.getMonth() - tanggalLahir.getMonth();
            if (month < 0 || (month === 0 && today.getDate() < tanggalLahir.getDate())) {
                age--;
            }
            document.getElementById("usia").value = age;
        }
    </script>

    </body>

    </html>