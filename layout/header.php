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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
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

        // function active memu nav bar
        // Ambil elemen menu dan tautan di dalamnya
        $(document).ready(function() {
  // Ambil URL saat ini dan tambahkan kelas "active" ke tautan yang sesuai
  var url = window.location.pathname;
  $('.nav a').filter(function() {
    return this.href == url;
  }).addClass('active');
});

    </script>
</head>

<body>
    <header class="primary-header active">
        <nav id="nav" class="navbar">
            <div class="logo">
                <img src="../img/kominfo-seeklogo.png" alt="" />
                <img src="../img/logo-kota-madiun.png" alt="" />
            </div>
            <ul class="menu">
                <li><a class="nav-li" href="../views/home.php">Home</a></li>
                <li><a class="nav-li" href="../views/statistics.php">Statitics</a></li>
                <li><a class="nav-li" href="../views/input-data.php">Insert Data</a></li>
                <form action="../config/logout.php" method="post" class="con-logout">
                    <button class="btn" onclick="return confirm('Apakah anda yakin ingin keluar ?')">
                        <span class="btn-text-one">Login</span>
                        <span class="btn-text-two">Logout</span>
                    </button>
                </form>
            </ul>
        </nav>
    </header>