<?php
include('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Data Statistik Pegawai</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/style-chart.css" />
    <script src="js/chart.js"></script>
    <script src="js/statistics.js"></script>

</head>

<body>
    <?php include_once('nav/nav.php'); ?>
    <section>
        <?php include('koneksi.php'); ?>
        <div class="container">
            <?php include 'data.php'; ?>
            <div class="chart-1">
                <canvas id="chart"></canvas>
                <script>
                    const ctx = document.getElementById('chart').getContext('2d');
                    const chart = new Chart(ctx, {
                        type: 'doughnut',
                        data: {
                            labels: ['Laki-Laki', 'Perempuan'],
                            datasets: [{
                                label: 'Jumlah',
                                data: [<?php echo $laki_laki; ?>, <?php echo $perempuan; ?>],
                                backgroundColor: [
                                    '#6096B4',
                                    '#E96479'
                                ],
                                hoverBorderWidth: 5,
                            }],
                        },
                        options: {
                            aspectRatio: 1 | 1,
                            layout: {
                                padding: 50
                            },
                            plugins: {
                                title: {
                                    display: true,
                                    text: 'Grafik Jumlah Mahasiswa Laki - Laki dan Perempuan',
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
                                        padding: 20
                                    },
                                },
                                
                            },
                            maintainAspectRatio: false,
                        }
                    });
                </script>
            </div>
            <div class="chart-1">
                <canvas id="chart2"></canvas>
                <script>
                    const ctt = document.getElementById('chart2').getContext('2d');
                    const chart2 = new Chart(ctt, {
                        type: 'bar',
                        data: {
                            labels: [''],
                            datasets: [{
                                label: 'Usia 18',
                                data: [<?php echo $um18; ?>],
                                backgroundColor: '#FF6384'
                            }, {
                                label: 'Usia 19',
                                data: [<?php echo $um19; ?>],
                                backgroundColor: '#36A2EB'
                            }, {
                                label: 'Usia 20',
                                data: [<?php echo $um20; ?>],
                                backgroundColor: '#FFCE56'
                            }, {
                                label: 'Usia 21',
                                data: [<?php echo $um21; ?>],
                                backgroundColor: '#E7E9ED'
                            }, {
                                label: 'Usia 22',
                                data: [<?php echo $um22; ?>],
                                backgroundColor: '#FF8A80'
                            }, {
                                label: 'Usia 23',
                                data: [<?php echo $um23; ?>],
                                backgroundColor: '#DCE775'
                            }, {
                                label: 'Usia 24',
                                data: [<?php echo $um24; ?>],
                                backgroundColor: '#FFF176'
                            }, {
                                label: 'Usia 25',
                                data: [<?php echo $um25; ?>],
                                backgroundColor: '#FFB74D'
                            }],
                        },
                        options: {
                            barThickness: 30,
                            maxBarThickness: 20,
                            height: 400,
                            layout: {
                                padding: {
                                    top: 50,
                                    bottom: 50,
                                    right: 100,
                                    left: 100
                                }
                            },
                            plugins: {
                                title: {
                                    display: true,
                                    text: 'Grafik Usia Mahasiswa',
                                    color: '#1e1e1e',
                                    font: {
                                        size: 16
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
                                        padding: 20
                                    },
                                },
                            },
                            scales: {
                                y: {
                                    title: {
                                        display: true,
                                        text: 'Jumlah Mahasiswa',
                                    },
                                },
                                x: {
                                    title: {
                                        display: true,
                                        text: 'Usia Mahasiswa',
                                    },
                                }
                            },
                            maintainAspectRatio: false
                        }
                    });
                </script>

            </div>
            <div class="chart-1">
                <canvas id="chart3"></canvas>
                <script>
                    const ctc = document.getElementById('chart3').getContext('2d');
                    const chart3 = new Chart(ctc, {
                        type: 'pie',
                        data: {
                            labels: ['D1', 'S1', 'S2', 'SMA'],
                            datasets: [{
                                label: 'Prosentase',
                                data: <?php echo json_encode($percentages); ?>,
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.7)',
                                    'rgba(54, 162, 235, 0.7)',
                                    'rgba(255, 206, 86, 0.7)',
                                    'rgba(75, 192, 192, 0.7)'
                                ],
                                hoverBorderWidth: 5,
                            }]
                        },
                        options: {
                            aspectRatio: 1 | 1,
                            maintainAspectRatio: false,
                            layout: {
                                padding: 50
                            },
                            plugins: {
                                title: {
                                    display: true,
                                    text: 'Prosentase Pendidikan Mahasiswa',
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
                                        padding: 20
                                    },
                                },
                                // tooltip: {
                                //     callbacks: {
                                //         label: function(context) {
                                //             return context.label + ': ' + context.parsed + '%';
                                //         }
                                //     }
                                // }

                            }
                        }
                    });
                </script>
            </div>

        </div>

    </section>
    <?php include_once('footer.php') ?>
</body>


</html>