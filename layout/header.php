<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="shortcut icon" href="../img/kominfo-seeklogo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../css/datatables.min.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/style-input.css" />
    <link rel="stylesheet" href="../css/style-chart.css" />
    <link rel="stylesheet" href="../css/style-statistik.css" />
    <link rel="stylesheet" href="../fontawesome-free-6.3.0-web/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../js/script.js"></script>
</head>

<body>
    <header class="primary-header active">
        <nav id="nav" class="navbar">
            <div class="logo">
                <img src="../img/kominfo-seeklogo.png" alt="" />
                <img src="../img/logo-kota-madiun.png" alt="" />
            </div>
            <ul class="menu">
                <li><a class="nav-li" href="../views/home.php">Beranda</a></li>
                <li>
                    <div class="dropdown">
                        <a class="nav-li" href="../views/statistics.php">Statistik
                            <!-- <i class="fa-solid fa-chevron-down"></i> -->
                        </a>
                        <!-- <div class="menu2">
                            <a href="../views/statistik-usia.php">Usia</a>
                            <a href="../views/statistik-pendidikan.php">Pendidikan</a>
                            <a href="../views/statistik-status.php">Status</a>
                        </div> -->
                    </div>
                </li>
                <li><a class="nav-li" href="../views/input-data.php">Tambah</a></li>

            </ul>
            <form action="../config/logout.php" method="post" class="con-logout">
                <button class="btn" onclick="return confirm('Apakah anda yakin ingin keluar ?')">
                    <span class="btn-text-one">Login</span>
                    <span class="btn-text-two">Logout</span>
                </button>
            </form>
        </nav>
    </header>