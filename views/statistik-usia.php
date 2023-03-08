<?php
include '../config/app.php';

include '../layout/header.php';

include '../config/data.php';
?>
<!-- function title -->
<script>
  window.addEventListener('load', function() {
    ubahTitle('Satistik Usia');
  });
</script>

<main>
    <div class="title">
        <h1>Statistik Usia</h1>
        <ul>
            <li>
                <a href="../views/home.php">Beranda
                    <i class="fa-solid fa-angle-left"></i>
                </a>
            </li>
            <li>
                <a href="../views/statistik-usia.php"> Statistik Usia</a>
            </li>
        </ul>
    </div>
    <div class="container-usia">

        <div class="row-chart">
            <div class="title-chart">
                <h1>Jumlah <span>Pegawai</span> Berdasarkan Jenis Kelamin</h1>
            </div>
            <div class="chart-usia">
                <canvas id="usia-3"></canvas>
            </div>
            <div class="title-chart">
                <h1>Jumlah <span>Pegawai</span> Berdasarkan Usia</h1>
            </div>
            <div class="chart-usia">
                <canvas id="usia-1"></canvas>
            </div>
            <div class="title-chart">
                <h1>Prosentase Usia <span>Pegawai</span></h1>
            </div>
            <div class="chart-usia">
                <canvas id="usia-2"></canvas>
            </div>
        </div>
    </div>
</main>

<script>
    // chart bar jenis kelamin
    const ctxr = document.getElementById('usia-3').getContext('2d');
    const usia3 = new Chart(ctxr, {
        type: 'bar',
        data: {
            labels: [''],
            datasets: [{
                label: 'Laki - Laki',
                data: [<?php echo $laki_laki; ?>],
                backgroundColor: '#AEC8CA'
            }, {
                label: 'Perempuan',
                data: [<?php echo $perempuan; ?>],
                backgroundColor: '#F4AEC5'
            }],
        },
        options: {
            // aspectRatio: 1 | 1,
            // barPercentage: 0.6,
            categoryPercentage: 0.6,
            // maxBarThickness: 250,
            // barThickness: 200,

            layout: {
                padding: 10
            },
            plugins: {
                title: {
                    display: false,
                    text: 'Grafik Jumlah Pegawai Laki - Laki dan Perempuan',
                    color: '#1e1e1e',
                    font: {
                        size: 16
                    },
                    padding: {
                        bottom: 20,
                    }
                },
                legend: {
                    position: 'bottom',
                    display: true,
                    labels: {
                        color: '#1e1e1e',
                        usePointStyle: true,
                        padding: 35,
                        font: {
                            size: 16,
                            weight: 'bold',
                        }
                    },
                },

            },
            scales: {
                y: {
                    title: {
                        display: true,
                        text: 'Jumlah Pegawai',
                        font: {
                            size: 20
                        }
                    },
                },
                x: {
                    title: {
                        display: true,
                        text: 'Jenis Kelamin',
                        font: {
                            size: 20
                        }
                    },
                }
            },
            maintainAspectRatio: false,
        }
    });
    // chart bar usia 
    const ctt = document.getElementById('usia-1').getContext('2d');
    const usia1 = new Chart(ctt, {
        type: 'bar',
        data: {
            labels: [''],
            datasets: [{
                label: 'Usia 18',
                data: [<?php echo $um18; ?>],
                backgroundColor: '#7F7FBB'
            }, {
                label: 'Usia 19',
                data: [<?php echo $um19; ?>],
                backgroundColor: '#D46A6A'
            }, {
                label: 'Usia 20',
                data: [<?php echo $um20; ?>],
                backgroundColor: '#6CA69E'
            }, {
                label: 'Usia 21',
                data: [<?php echo $um21; ?>],
                backgroundColor: '#F2E98B'
            }, {
                label: 'Usia 22',
                data: [<?php echo $um22; ?>],
                backgroundColor: '#B39EB5'
            }, {
                label: 'Usia 23',
                data: [<?php echo $um23; ?>],
                backgroundColor: '#F7A16C'
            }, {
                label: 'Usia 24',
                data: [<?php echo $um24; ?>],
                backgroundColor: '#BDBDBD'
            }, {
                label: 'Usia 25',
                data: [<?php echo $um25; ?>],
                backgroundColor: '#FF6961'
            }],
        },
        options: {
            // aspectRatio: 1 | 1,
            maxBarThickness: 80,
            layout: {
                padding: 10
            },
            plugins: {
                title: {
                    display: false,
                    text: 'Grafik Usia Pegawai',
                    color: '#1e1e1e',
                    font: {
                        size: 30
                    },
                    padding: {
                        bottom: 20
                    }
                },
                legend: {
                    display: true,
                    position: 'bottom',
                    labels: {
                        color: '#1e1e1e',
                        usePointStyle: true,
                        padding: 35,
                        font: {
                            size: 16,
                            weight: 'bold',
                        },
                    },
                },
            },
            scales: {
                y: {
                    title: {
                        display: true,
                        text: 'Jumlah Pegawai',
                        font: {
                            size: 20
                        }
                    },
                },
                x: {
                    title: {
                        display: true,
                        text: 'Usia Pegawai',
                        font: {
                            size: 20
                        }
                    },
                }
            },
            maintainAspectRatio: false
        }
    });

    // chart prosentase usia
    var usia = <?php echo json_encode($usia); ?>; // mengambil data usia dari PHP dan mengkonversi menjadi JSON

    var ctx = document.getElementById('usia-2').getContext('2d');
    var usia2 = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Usia 18', 'Usia 19', 'Usia 20', 'Usia 21', 'Usia 22', 'Usia 23', 'Usia 24', 'Usia 25'],
            datasets: [{
                label: 'Usia Pegawai',
                data: Object.values(usia),
                backgroundColor: [
                    '#7F7FBB',
                    '#D46A6A',
                    '#6CA69E',
                    '#F2E98B',
                    '#B39EB5',
                    '#F7A16C',
                    '#BDBDBD',
                    '#FF6961',
                ],
                borderWidth: 1,
                hoverBorderWidth: 5,
            }]
        },
        options: {
            layout: {
                padding: 10
            },
            maintainAspectRatio: false,
            title: {
                display: true,
                text: 'Usia Pegawai'
            },
            plugins: {
                title: {
                    display: false,
                    text: 'Prosentase Usia Pegawai',
                    color: '#1e1e1e',
                    font: {
                        size: 30
                    },
                    padding: {
                        bottom: 20,
                    }
                },
                legend: {
                    position: 'bottom',
                    display: true,
                    labels: {
                        color: '#1e1e1e',
                        usePointStyle: true,
                        padding: 35,
                        font: {
                            size: 16,
                            weight: 'bold',
                        },
                    },
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return 'Prosentase' + ': ' + context.parsed + '%';
                        }
                    }
                }

            }
        }
    });
</script>

<?php
include '../layout/footer.php';
?>