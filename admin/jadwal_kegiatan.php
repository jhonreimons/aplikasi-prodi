<?php
require "../config.php";


?>

<!doctype html>
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />
    <style>
        #weatherWidget .currentDesc {
            color: #ffffff !important;
        }

        .traffic-chart {
            min-height: 335px;
        }

        #flotPie1 {
            height: 150px;
        }

        #flotPie1 td {
            padding: 3px;
        }

        #flotPie1 table {
            top: 20px !important;
            right: -10px !important;
        }

        .chart-container {
            display: table;
            min-width: 270px;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        #flotLine5 {
            height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }

        #cellPaiChart {
            height: 160px;
        }
    </style>
</head>

<body>
    <!-- Left Panel -->
    <?php include "dashboard.php"; ?>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./">
                        <h4>D3 Teknologi Komputer</h4>
                    </a>
                    <!-- <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a> -->
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="../images/admin1.jpg" alt="User Avatar">
                        </a>
                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>
                            <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <div class="row">
                    <div class="content">
                        <div class="d-flex justify-content-end mr-5">
                            <form action="tambah_rencana.php">
                                <button style="background-color:#A35AFF; color:#fff;" class="btn ml-5 pl-3 ">+ Tambah
                                    Rencana</button>
                            </form>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">Daftar Jadwal</strong>
                                </div>
                                <div class="card-body">

                                    <table id="bootstrap-data-table" class="table table-boredered">
                                        <thead>
                                            <tr><?php
                                                date_default_timezone_set("Asia/Jakarta");
                                                $daftar_hari = array(
                                                    'Sunday' => 'Minggu',
                                                    'Monday' => 'Senin',
                                                    'Tuesday' => 'Selasa',
                                                    'Wednesday' => 'Rabu',
                                                    'Thursday' => 'Kamis',
                                                    'Friday' => 'Jumat',
                                                    'Saturday' => 'Sabtu'
                                                );
                                                setlocale(LC_ALL, 'id_ID');
                                                $hari = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                                                $tgl_sekarang = date("Y-m-d");
                                                $date = "$tgl_sekarang";
                                                $namahari = date('l', strtotime($date));
                                                echo $daftar_hari[$namahari];
                                                ?>

                                                <?php if ($daftar_hari[$namahari] == "Senin") :
                                                    $limit_bawah = 0;
                                                    $limit_atas = 5;
                                                ?><?php for ($i = $limit_bawah; $i <= $limit_atas; $i++) : ?>
                                                <th><?php $besok = date('Y-m-d', strtotime("$i day", strtotime($tgl_sekarang)));
                                                        echo "($besok)"; ?></th>
                                            <?php endfor; ?>
                                        <?php endif; ?>
                                        <?php if ($daftar_hari[$namahari] == "Selasa") :
                                            $limit_bawah = -1;
                                            $limit_atas = 4;
                                        ?><?php for ($i = $limit_bawah; $i <= $limit_atas; $i++) : ?>
                                        <th><?php $besok = date('Y-m-d', strtotime("$i day", strtotime($tgl_sekarang)));
                                                echo "$besok"; ?></th>
                                    <?php endfor; ?>
                                <?php endif; ?>
                                <?php if ($daftar_hari[$namahari] == "Rabu") :
                                    $limit_bawah = -2;
                                    $limit_atas = -3;
                                ?><?php for ($i = $limit_bawah; $i <= $limit_atas; $i++) : ?>
                                <th><?php $besok = date('Y-m-d', strtotime("$i day", strtotime($tgl_sekarang)));
                                        echo "$besok"; ?></th>
                            <?php endfor; ?>
                        <?php endif; ?>
                        <?php if ($daftar_hari[$namahari] == "Kamis") :
                            $limit_bawah = -3;
                            $limit_atas = 2;
                        ?>
                            <?php for ($i = $limit_bawah; $i <= $limit_atas; $i++) : ?>
                                <th><?php $besok = date('d-m-y', strtotime("$i day", strtotime($tgl_sekarang)));
                                    echo date("$besok"); ?></th>
                            <?php endfor; ?>
                        <?php endif; ?>
                        <?php if ($daftar_hari[$namahari] == "Jumat") :
                            $limit_bawah = -4;
                            $limit_atas = 1;
                        ?><?php for ($i = $limit_bawah; $i <= $limit_atas; $i++) : ?>
                        <th><?php $besok = date('Y-m-d', strtotime("$i day", strtotime($tgl_sekarang)));
                                echo "$besok"; ?></th>
                    <?php endfor; ?>
                <?php endif; ?>
                <?php if ($daftar_hari[$namahari] == "Sabtu") :
                    $limit_bawah = -5;
                    $limit_atas = 0;
                ?><?php for ($i = $limit_bawah; $i <= $limit_atas; $i++) : ?>
                <th><?php $besok = date('Y-m-d', strtotime("$i day", strtotime($tgl_sekarang)));
                        echo "$besok"; ?></th>
            <?php endfor; ?>
        <?php endif; ?>
        <?php if ($daftar_hari[$namahari] == "Minggu") :
            $limit_bawah = -6;
            $limit_atas = -1;
        ?><?php for ($i = $limit_bawah; $i <= $limit_atas; $i++) : ?>
        <th><?php $besok = date('Y-m-d', strtotime("$i day", strtotime($tgl_sekarang)));
                echo "$besok"; ?></th>
    <?php endfor; ?>
<?php endif; ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if ($daftar_hari[$namahari] == "Jumat") :
                                                $limit_bawah = -4;
                                                $limit_atas = 1;
                                            ?><?php for ($i = $limit_bawah; $i <= $limit_atas; $i++) : $besok = date('Y-m-d', strtotime("$i day", strtotime($tgl_sekarang))); ?>
                                            <?php
                                                    $tabel = "SELECT * FROM jadwal_kegiatan WHERE tanggal = '$besok'";
                                                    $sqli = mysqli_query($conn, $tabel);
                                                    while ($row =  mysqli_fetch_assoc($sqli)) : ?>
                                                <tr>
                                                    <td>
                                                        <center>
                                                            <div class="d-flex justify-content-center">
                                                                <p><?php echo $row['nama_kegiatan']; ?></p><br>
                                                            </div>
                                                            <div style="background-color: #A35AFF; color:#ffffff" class="fs-6 badge">
                                                                <h6><?php echo $row['jam_mulai'];
                                                                    echo "-";
                                                                    echo $row['jam_selesai']; ?></h6>
                                                            </div>
                                                        </center>
                                                        <div style="text-align: justify; margin:5px 5px" class="d-block">
                                                            <span class="mb-5">Keterangan:<?php echo $row['keterangan']; ?></span><br>
                                                            <span class="text mt-5"></span>
                                                        </div>
                                                        <div class="fs-6 d-flex justify-content-end">
                                                            <!-- <div style="background-color: #FFD12E;" class="badge"><a style=" color:#ffffff" href="#">Ubah</a></div>
                                                            <div class="badge badge-danger ml-2"><a style=" color:#ffffff" href="#">hapus</a></div> -->
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endwhile; ?>
                                        <?php endfor; ?>
                                    <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- .animated -->
                    </div><!-- .content -->
                </div>
                <!-- .animated -->
            </div>
            <!-- /#right-panel -->
            <!-- Scripts -->
            <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
            <script src="../assets/js/main.js"></script>
            <!--  Chart js -->
            <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>
            <!--Chartist Chart-->
            <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
            <script src="../assets/js/init/weather-init.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
            <script src="../assets/js/init/fullcalendar-init.js"></script>
            <!--Local Stuff-->
</body>

</html>