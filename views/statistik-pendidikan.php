<?php
include '../config/app.php';

include '../layout/header.php';
?>

<!-- function title -->
<script>
    window.addEventListener('load', function() {
        ubahTitle('Satistik Pendidikan');
    });
</script>

<main>
    <div class="title">
        <h1>Statistik Pendidikan</h1>
        <ul>
            <li>
                <a href="../views/home.php">Beranda
                    <i class="fa-solid fa-angle-left"></i>
                </a>
            </li>
            <li>
                <a href="../views/statistik-pendidikan.php"> Statistik Pendidikan</a>
            </li>
        </ul>
    </div>
</main>

<?php
include '../layout/footer.php';
?>