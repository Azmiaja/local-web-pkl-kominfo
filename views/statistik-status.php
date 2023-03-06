<?php
include '../config/app.php';

include '../layout/header.php';
?>

<!-- function title -->
<script>
    window.addEventListener('load', function() {
        ubahTitle('Satistik Status');
    });
</script>

<main>
    <div class="title">
        <h1>Statistik Status</h1>
        <ul>
            <li>
                <a href="../views/home.php">Beranda
                    <i class="fa-solid fa-angle-left"></i>
                </a>
            </li>
            <li>
                <a href="../views/statistik-status.php"> Statistik Status</a>
            </li>
        </ul>
    </div>
</main>

<?php
include '../layout/footer.php';
?>