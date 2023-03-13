<?php
include('../config/app.php');

include('../layout/header.php');

include('../config/data.php');
?>

<!-- fungsi judul -->
<script>
    window.addEventListener('load', function() {
        ubahTitle('Statistik Karyawan');
    });
</script>


<main>
    <div class="title">
        <h1>Statistik Karyawan</h1>
        <ul>
            <li>
                <a href="../views/home.php">Beranda
                    <i class="fa-solid fa-angle-left"></i>
                </a>
            </li>
            <li>
                <a href="../views/statistik-usia.php">Statistik Karyawan</a>
            </li>
        </ul>
    </div>
    <section>
        <div class="container-chart">
            <div class="box-chart">
                <div class="title-chart">
                    <h1>Grafik Karyawan Berdasarkan <span>Jenis Kelamin</span></h1>
                </div>
                <div class="box-row">
                    <div class="chart chart-1" style="display: none;">
                        <canvas id="jk1"></canvas>
                    </div>
                    <div class="chart chart-2">
                        <canvas id="jk"></canvas>
                    </div>
                    <div class="ct-persen">
                        <button>
                            <i class="fa-solid fa-chart-pie"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="box-chart">
                <div class="title-chart">
                    <h1>Grafik <span>Status</span> Karyawan</h1>
                </div>
                <div class="box-row">
                    <div class="chart chart-1" style="display: none;">
                        <canvas id="st1"></canvas>
                    </div>
                    <div class="chart chart-2">
                        <canvas id="st"></canvas>
                    </div>
                    <div class="ct-persen">
                        <button id="persen">
                            <i class="fa-solid fa-chart-pie">
                            </i></button>
                    </div>
                </div>
            </div>
            <div class="box-chart">
                <div class="title-chart">
                    <h1>Grafik <span>Pendidikan</span> Karyawan</h1>
                </div>
                <div class="box-row">
                    <div class="chart chart-1" style="display: none;">
                        <canvas id="pen1"></canvas>
                    </div>
                    <div class="chart chart-2">
                        <canvas id="pen"></canvas>
                    </div>
                    <div class="ct-persen">
                        <button><i class="fa-solid fa-chart-pie"></i></button>
                    </div>
                </div>
            </div>

        </div>
    </section>
</main>
<script>
    // chart 1
    // chart bar jenis kelamin //BAR
    const ctxr = document.getElementById('jk').getContext('2d');
    const jk = new Chart(ctxr, {
        type: 'bar',
        data: {
            labels: ['Jenis Kelamin'],
            datasets: [{
                label: 'Laki-laki',
                data: [<?php echo $laki_laki; ?>],
                backgroundColor: '#95ceff'
            }, {
                label: 'Perempuan',
                data: [<?php echo $perempuan; ?>],
                backgroundColor: '#5c5c61'
            }],
        },
        options: {
            categoryPercentage: 0.5,
            layout: {
                padding: {
                    top: 50,
                    bottom: 10,
                    right: 50,
                    left: 50
                }
            },

            plugins: {
                legend: {
                    position: 'bottom',
                    display: true,
                    labels: {
                        color: '#1e1e1e',
                        usePointStyle: true,
                        padding: 20,
                        font: {
                            size: 14,
                            weight: 'bold',
                        }
                    },
                },
                tooltip: {
                    enabled: true,
                    backgroundColor: 'rgb(248, 248, 242, .6)',
                    borderColor: '#DFD3C3',
                    borderWidth: 1.5,
                    bodyFont: {
                        size: 14,
                    },
                    bodyColor: '#1e1e1e',
                    cornerRadius: 3,
                    yAlign: 'bottom',
                    titleColor: '#1e1e1e',
                    titleFont: {
                        size: 14,
                    },
                    padding: 10,
                    caretPadding: 8,
                },

            },
            scales: {
                y: {
                    title: {
                        display: true,
                        text: 'Jumlah Karyawan',
                        font: {
                            size: 16
                        }
                    },
                },
                x: {
                    title: {
                        display: false,
                        text: 'Jenis Kelamin',
                        font: {
                            size: 16
                        }
                    },
                    ticks: {
                        padding: 5,
                        font: {
                            size: 16
                        }
                    }
                },
            },
            maintainAspectRatio: false,
        }
    });

    // PIE
    const ctx = document.getElementById('jk1').getContext('2d');
    const jk1 = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: ['Prosentase'],
                data: [<?php echo $persen_laki_laki; ?>, <?php echo $persen_perempuan; ?>],
                backgroundColor: ['#95ceff', '#5c5c61']
            }],
        },
        options: {
            // categoryPercentage: 0.5,
            layout: {
                padding: {
                    top: 50,
                    bottom: 10,
                    right: 50,
                    left: 50
                }
            },

            plugins: {
                legend: {
                    position: 'bottom',
                    display: true,
                    labels: {
                        color: '#1e1e1e',
                        usePointStyle: true,
                        padding: 20,
                        font: {
                            size: 14,
                            weight: 'bold',
                        }
                    },
                },
                tooltip: {
                    enabled: true,
                    backgroundColor: 'rgb(248, 248, 242, .6)',
                    borderColor: '#DFD3C3',
                    borderWidth: 1.5,
                    bodyFont: {
                        size: 14,
                    },
                    bodyColor: '#1e1e1e',
                    cornerRadius: 3,
                    yAlign: 'bottom',
                    titleColor: '#1e1e1e',
                    titleFont: {
                        size: 14,
                    },
                    padding: 10,
                    caretPadding: 8,
                    caretSize: 0,
                    callbacks: {
                        label: function(context) {
                            return 'Prosentase' + ': ' + context.parsed + '%';
                        }
                    }
                },
            },
            maintainAspectRatio: false,
        }
    });
</script>
<script>
    //chart 2
    const st = document.getElementById('st').getContext('2d');
    const status = new Chart(st, {
        type: 'bar',
        data: {
            labels: ['Status'],
            datasets: [{
                label: 'ASN',
                data: [<?php echo $asn; ?>],
                backgroundColor: '#90ed7d',
            }, {
                label: 'NON ASN',
                data: [<?php echo $nonasn; ?>],
                backgroundColor: '#2b908f',
            }],

        },
        options: {
            categoryPercentage: 0.5,
            layout: {
                padding: {
                    top: 50,
                    bottom: 10,
                    right: 50,
                    left: 50
                }
            },

            plugins: {
                legend: {
                    position: 'bottom',
                    display: true,
                    labels: {
                        color: '#1e1e1e',
                        usePointStyle: true,
                        padding: 20,
                        font: {
                            size: 14,
                            weight: 'bold',
                        }
                    },
                },
                tooltip: {
                    enabled: true,
                    backgroundColor: 'rgb(248, 248, 242, .6)',
                    borderColor: '#DFD3C3',
                    borderWidth: 1.5,
                    bodyFont: {
                        size: 14,
                    },
                    bodyColor: '#1e1e1e',
                    cornerRadius: 3,
                    yAlign: 'bottom',
                    titleColor: '#1e1e1e',
                    titleFont: {
                        size: 14,
                    },
                    padding: 10,
                    caretPadding: 8,
                },

            },
            scales: {
                y: {
                    title: {
                        display: true,
                        text: 'Jumlah Karyawan',
                        font: {
                            size: 16
                        }
                    },
                },
                x: {
                    title: {
                        display: false,
                        text: 'Jenis Kelamin',
                        font: {
                            size: 16
                        }
                    },
                    ticks: {
                        padding: 5,
                        font: {
                            size: 16
                        }
                    }
                },
            },
            maintainAspectRatio: false,
        }
    });

    // PIE
    const st1 = document.getElementById('st1').getContext('2d');
    const status1 = new Chart(st1, {
        type: 'pie',
        data: {
            labels: ['ASN', 'NON ASN'],
            datasets: [{
                label: ['Prosentase'],
                data: [<?php echo $persen_asn; ?>, <?php echo $persen_nonasn; ?>],
                backgroundColor: ['#90ed7d', '#2b908f']
            }],
        },
        options: {
            // categoryPercentage: 0.5,
            layout: {
                padding: {
                    top: 50,
                    bottom: 10,
                    right: 50,
                    left: 50
                }
            },

            plugins: {
                legend: {
                    position: 'bottom',
                    display: true,
                    labels: {
                        color: '#1e1e1e',
                        usePointStyle: true,
                        padding: 20,
                        font: {
                            size: 14,
                            weight: 'bold',
                        }
                    },
                },
                tooltip: {
                    enabled: true,
                    backgroundColor: 'rgb(248, 248, 242, .6)',
                    borderColor: '#DFD3C3',
                    borderWidth: 1.5,
                    bodyFont: {
                        size: 14,
                    },
                    bodyColor: '#1e1e1e',
                    cornerRadius: 3,
                    yAlign: 'bottom',
                    titleColor: '#1e1e1e',
                    titleFont: {
                        size: 14,
                    },
                    padding: 10,
                    caretPadding: 8,
                    caretSize: 0,
                    callbacks: {
                        label: function(context) {
                            return 'Prosentase' + ': ' + context.parsed + '%';
                        }
                    }
                },
            },
            maintainAspectRatio: false,
        }
    });
</script>
<script>
    //chart 3
    const pp = document.getElementById('pen').getContext('2d');
    const pendidikan = new Chart(pp, {
        type: 'bar',
        data: {
            labels: ['Pendidikan'],
            datasets: [{
                label: 'SMA/SMK',
                data: [<?php echo $sma; ?>],
                backgroundColor: '#e4d354'
            }, {
                label: 'Diploma',
                data: [<?php echo $diploma; ?>],
                backgroundColor: '#90ed7d'
            }, {
                label: 'S1',
                data: [<?php echo $s1; ?>],
                backgroundColor: '#7cb5ec'
            }, {
                label: 'S2',
                data: [<?php echo $s2; ?>],
                backgroundColor: '#f7a35c'
            }],

        },
        options: {
            categoryPercentage: 0.4,
            layout: {
                padding: {
                    top: 50,
                    bottom: 10,
                    right: 50,
                    left: 50
                }
            },

            plugins: {
                legend: {
                    position: 'bottom',
                    display: true,
                    labels: {
                        color: '#1e1e1e',
                        usePointStyle: true,
                        padding: 20,
                        font: {
                            size: 14,
                            weight: 'bold',
                        }
                    },
                },
                tooltip: {
                    enabled: true,
                    backgroundColor: 'rgb(248, 248, 242, .6)',
                    borderColor: '#DFD3C3',
                    borderWidth: 1.5,
                    bodyFont: {
                        size: 14,
                    },
                    bodyColor: '#1e1e1e',
                    cornerRadius: 3,
                    yAlign: 'bottom',
                    titleColor: '#1e1e1e',
                    titleFont: {
                        size: 14,
                    },
                    padding: 10,
                    caretPadding: 8,
                },

            },
            scales: {
                y: {
                    title: {
                        display: true,
                        text: 'Jumlah Karyawan',
                        font: {
                            size: 16
                        }
                    },
                },
                x: {
                    title: {
                        display: false,
                        text: 'Jenis Kelamin',
                        font: {
                            size: 16
                        }
                    },
                    ticks: {
                        padding: 5,
                        font: {
                            size: 16
                        }
                    }
                },
            },
            maintainAspectRatio: false,
        }
    });

    // PIE
    const pp1 = document.getElementById('pen1').getContext('2d');
    const pendidikan1 = new Chart(pp1, {
        type: 'pie',
        data: {
            labels: ['SMA/SMK', 'Diploma', 'S1', 'S2'],
            datasets: [{
                label: ['Prosentase'],
                data: [<?php echo $persen_sma; ?>, <?php echo $persen_diploma; ?>, <?php echo $persen_s1; ?>, <?php echo $persen_s2; ?>],
                backgroundColor: ['#e4d354', '#90ed7d', '#7cb5ec', '#f7a35c']
            }],
        },
        options: {
            // categoryPercentage: 0.5,
            layout: {
                padding: {
                    top: 50,
                    bottom: 10,
                    right: 50,
                    left: 50
                }
            },

            plugins: {
                legend: {
                    position: 'bottom',
                    display: true,
                    labels: {
                        color: '#1e1e1e',
                        usePointStyle: true,
                        padding: 20,
                        font: {
                            size: 14,
                            weight: 'bold',
                        }
                    },
                },
                tooltip: {
                    enabled: true,
                    backgroundColor: 'rgb(248, 248, 242, .6)',
                    borderColor: '#DFD3C3',
                    borderWidth: 1.5,
                    bodyFont: {
                        size: 14,
                    },
                    bodyColor: '#1e1e1e',
                    cornerRadius: 3,
                    yAlign: 'bottom',
                    titleColor: '#1e1e1e',
                    titleFont: {
                        size: 14,
                    },
                    padding: 10,
                    caretPadding: 8,
                    caretSize: 0,
                    callbacks: {
                        label: function(context) {
                            return 'Prosentase' + ': ' + context.parsed + '%';
                        }
                    }
                },
            },
            maintainAspectRatio: false,
        }
    });
</script>
<script>
    //button function
    const chart1 = document.querySelectorAll('.chart-1');
    const chart2 = document.querySelectorAll('.chart-2');
    const btnProsentase = document.querySelectorAll('.ct-persen button');

    btnProsentase.forEach((button, index) => {
        button.addEventListener('click', () => {
            if (chart1[index].style.display === 'none') {
                chart1[index].style.display = 'block';
                chart2[index].style.display = 'none';
            } else {
                chart1[index].style.display = 'none';
                chart2[index].style.display = 'block';
            }
            button.classList.toggle('active');
        });
    });
</script>

<?php include('../layout/footer.php'); ?>