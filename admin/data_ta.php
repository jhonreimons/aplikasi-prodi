<?php

require "../connect.php";
if (isset($_POST['submit'])) {
     $id_dosen_pembimbing1 = $_POST['dosen_pembimbing1'];
     $id_dosen_pembimbing2 = $_POST['dosen_pembimbing2'];
     $id_dosen_penguji_1 = $_POST['dosen_penguji_1'];
     $id_dosen_penguji_2 = $_POST['dosen_penguji_2'];
     $kelompok = $_POST['jumlah_mahasiswa'];
     $judul = $_POST['judul_tugas_akhir'];
     $tahun_ajaran = $_POST['tahun_ajaran'];

     $query = "INSERT INTO data_ta(id_data_ta,id_dosen_pembimbing1,id_dosen_pembimbing2,jumlah_yg_dibimbing,judul,id_dosen_penguji_1,id_dosen_penguji_2, tahun_ajaran)
          VALUE('','$id_dosen_pembimbing1','$id_dosen_pembimbing2','$kelompok','$judul','$id_dosen_penguji_1','$id_dosen_penguji_2','$tahun_ajaran')";
     mysqli_query($connection, $query);
}

?>

<!doctype html>
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Buat data tugas akhir</title>
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
               <?php $row = mysqli_affected_rows($connection);
               if ($row > 0) : ?>
                    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                         <span class="badge badge-pill badge-success">Success</span>
                         <span class="ml-4">Data berhasil dibuat</span>
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                         </button>
                    </div>
               <?php endif; ?>


               <!-- Animated -->
               <div class="animated fadeIn">
                    <!-- Widgets  -->
                    <div class="row">
                         <div class="content">
                              <div class="card-header">
                                   <strong class="card-title">Data Tugas Akhir</strong>
                              </div>
                              <div class="card-body">
                                   <div class="form-group">
                                        <form action="" method="post" class="pt-3">
                                             <label id="dosen_pembimbing1" for="dosen_pembimbing1" class="control-label mb-1">Dosen Pembimbing I</label>
                                             <select name="dosen_pembimbing1" id="dosen_pembimbing1" class="form-control">
                                                  <option value="0">Pilih Dosen Pembimbing</option>
                                                  <?php
                                                  $sql =  mysqli_query($connection, "SELECT * FROM m_dosen");
                                                  while ($row = mysqli_fetch_assoc($sql)) :
                                                  ?>
                                                       <option value="<?php echo $row['id_dosen']; ?>"><?php $row['id_dosen'];
                                                                                                         echo "$row[nama_dosen]"; ?></option>
                                                  <?php
                                                  endwhile;
                                                  ?>
                                             </select>
                                   </div>
                                   <div class="form-group">
                                        <form action="" method="post" class="pt-3">
                                             <label id="dosen_pembimbing2" for="dosen_pembimbing2" class="control-label mb-1">Dosen Pembimbing</label>
                                             <select name="dosen_pembimbing2" id="dosen_pembimbing2" class="form-control">
                                                  <option value="0">Pilih Dosen Pembimbing II</option>
                                                  <?php
                                                  $sql =  mysqli_query($connection, "SELECT * FROM m_dosen");
                                                  while ($row = mysqli_fetch_assoc($sql)) :
                                                  ?>
                                                       <option value="<?php echo $row['nama_dosen'];  ?>"><?php
                                                       echo "$row[nama_dosen]"; ?></option>
                                                  <?php
                                                  endwhile;
                                                  ?>
                                             </select>
                                   </div>

                                   <div class="form-group">
                                        <label for="Jumlah Mahasiswa" class="control-label mb-1">Jumlah Mahasiswa</label>
                                        <input id="Jumlah Mahasiswa" name="jumlah_mahasiswa" type="number" class="form-control" aria-required="true" aria-invalid="false">
                                   </div>
                                   <div class="form-group">
                                        <label for="tahun_ajaran" class="control-label mb-1">Tahun Ajaran</label>
                                        <select name="tahun_ajaran" id="tahun_ajaran" class="form-control">
                                             <option value="0">Pilih Tahun Ajaran</option>
                                             <?php
                                             $sql =  mysqli_query($connection, "SELECT * FROM r_tahun");
                                             while ($row = mysqli_fetch_assoc($sql)) :
                                             ?>
                                                  <option value="<?php echo $row['id_tahun']; ?>"><?php $row['id_tahun'];
                                                                                                    echo $row['tahun']; ?></option>
                                             <?php endwhile; ?>
                                        </select>
                                   </div>
                                   <div class="form-group">
                                        <label for="judul_tugas_akhir" class="control-label mb-1">Judul Tugas Akhir</label>
                                        <input id="Jumlah Mahasiswa" name="judul_tugas_akhir" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                   </div>
                                   <div class="form-group">
                                        <label id="dosen_penguji_1" for="dosen_penguji_1" class="control-label mb-1">Dosen Penguji I</label>
                                        <select name="dosen_penguji_1" id="dosen_penguji_1" class="form-control">
                                             <option value="0">Pilih Dosen Penguji</option>
                                             <?php
                                             $sql =  mysqli_query($connection, "SELECT * FROM m_dosen");
                                             while ($row = mysqli_fetch_assoc($sql)) :
                                             ?>
                                                  <option value="<?php echo $row['id_dosen']; ?>"><?php $row['id_dosen'];
                                                                                                    echo $row['nama_dosen']; ?></option>
                                             <?php endwhile; ?>
                                        </select>
                                   </div>
                                   <div class="form-group">
                                        <label id="dosen_penguji_2" for="dosen_penguji_2" class="control-label mb-1">Dosen Penguji II</label>
                                        <select name="dosen_penguji_2" id="dosen_penguji_2" class="form-control">
                                             <option value="0">Pilih Dosen Penguji</option>
                                             <?php
                                             $sql =  mysqli_query($connection, "SELECT * FROM m_dosen");
                                             while ($row = mysqli_fetch_assoc($sql)) :
                                             ?>
                                                  <option value="<?php echo $row['id_dosen']; ?>"><?php $row['id_dosen'];
                                                                                                    echo $row['nama_dosen']; ?></option>
                                             <?php endwhile; ?>
                                        </select>
                                   </div>
                                   <div>
                                        <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-primary btn-block">Buat Data</button>
                                   </div>
                                   </form>
                              </div><!-- .animated -->
                         </div><!-- .content -->
                    </div>
                    <!-- .animated -->
               </div>
               <!-- /.content -->
               <div class="clearfix"></div>
               <!-- Footer -->
               <footer class="site-footer">
                    <div class="footer-inner bg-white">
                         <div class="row">
                              <div class="col-sm-6"> Copyright &copy; 2022 Kel 05 </div>
                              <div class="col-sm-6 text-right"> Designed by <a href="https://colorlib.com">Kel 05</a>
                              </div>
                         </div>
                    </div>
               </footer>
               <!-- /.site-footer -->
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