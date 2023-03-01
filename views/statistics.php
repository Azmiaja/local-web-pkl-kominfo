<?php
include('../config/app.php');

include('../layout/header.php');

include('../config/data.php');
?>

<!-- fungsi judul -->
<script>
  window.addEventListener('load', function() {
    ubahTitle('Statistik Pegawai');
  });
</script>

<section>
    <div class="container-chart">

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
                                '#AEC8CA',
                                '#F4AEC5'
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
            <canvas id="chart4"></canvas>
            <script>
                const cat = document.getElementById('chart4').getContext('2d');
                const chart4 = new Chart(cat, {
                    type: 'bar',
                    data: {
                        labels: [''],
                        datasets: [{
                            label: 'PNS',
                            data: [<?php echo $pns; ?>],
                            backgroundColor: '#B39EB5'
                        }, {
                            label: 'NON-PNS',
                            data: [<?php echo $non_pns; ?>],
                            backgroundColor: '#F2E98B'
                        },{
                            label: 'Magang',
                            data: [<?php echo $magang; ?>],
                            backgroundColor: '#F2A97D'
                        }],

                    },
                    options: {
                        barThickness: 50,
                        // barPercentage: 0.2,
                        maxBarThickness: 40,
                        height: 400,
                        layout: {
                            padding: {
                                top: 50,
                                bottom: 50,
                                right: 130,
                                left: 130
                            }
                        },
                        plugins: {
                            title: {
                                display: true,
                                text: 'Status Pegawai',
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
                                    text: 'Status',
                                },
                            }
                        },
                        maintainAspectRatio: false
                    }
                })
            </script>
        </div>
        <div class="chart-1">
            <canvas id="chart3"></canvas>
            <script>
                const ctc = document.getElementById('chart3').getContext('2d');
                const chart3 = new Chart(ctc, {
                    type: 'pie',
                    data: {
                        labels: <?php echo json_encode($labels); ?>,
                        datasets: [{
                            label: 'Prosentase',
                            data: <?php echo json_encode($percentages); ?>,
                            backgroundColor: [
                                '#F7C4D0',
                                '#B1D4B0',
                                '#B0C4D4',
                                '#FDE2A7',
                                '#F2E98B',
                                '#B39EB5'

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
        </div>

    </div>

</section>

<?php include('../layout/footer.php'); ?>