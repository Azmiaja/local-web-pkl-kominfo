// jquery data tables
$(document).ready(function () {
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
        scrollY: '50vh', // menambahkan scroll dengan tinggi 50% dari viewport
        scrollCollapse: true, // mengaktifkan fitur scrollCollapse untuk menghilangkan space kosong di bawah tabel
        paging: true, // menampilkan pagination
        lengthChange: true, // mengaktifkan dropdown untuk mengganti jumlah row yang ditampilkan
        displayLength: 20, // mengatur nilai awal dropdown length menu
    });
});
// mengecek apakah nilai dropdown length menu adalah 50, jika iya maka aktifkan scrollY
$('#example_length select').on('change', function () {
    if ($(this).val() == '50') {
        table.settings()[0].oScroll.sY = '50vh';
        table.draw();
    } else {
        table.settings()[0].oScroll.sY = null;
        table.draw();
    }
});


//delete data
$(document).on('click', '.delete-btn', function () {
    var table = $('#example').DataTable();
    var row = $(this).closest('tr');
    table.row(row).remove().draw();
});

// fungsi hitung usia
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

// function title
function ubahTitle(judul) {
    document.title = judul;
}

// function nav scroll
const isScrolling = () => {
    const headerEl = document.querySelector('.primary-header')
    let windowPosition = window.scrollY > 20
    headerEl.classList.toggle('active', windowPosition)
}
window.addEventListener('scroll', isScrolling)
