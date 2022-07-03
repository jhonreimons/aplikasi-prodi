<?php

require "../../connect.php";
if (isset($_POST['submit'])) {
     $nama_dosen = $_POST['nama_dosen'];
     $nidn = $_POST['nidn'];
     $status = $_POST['status'];
     $jabatan_akademik = $_POST['jabatan_akademik'];
     $pascasarjana = $_POST['pascasarjana'];
     $universitas = $_POST['universitas'];
     $bidang_keahlian = $_POST['bidang_keahlian'];
     $query = "INSERT INTO m_dosen(id_dosen
     ,nama_dosen,nidn,status,
     jabatan_akademik,pascasarjana,universitas_s2,bidang_keahlian)
          VALUE('','$nama_dosen','$nidn',
          '$status','$jabatan_akademik','$pascasarjana','$universitas',
          '$bidang_keahlian')";
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
     <title>Buat data dosen</title>
     <meta name="description" content="Ela Admin - HTML5 Admin Template">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
     <link rel="stylesheet" href="../../assets/css/cs-skin-elastic.css">
     <link rel="stylesheet" href="../../assets/css/style.css">
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
                                   <img class="user-avatar rounded-circle" src="../../images/admin1.jpg" alt="User Avatar">
                              </a>
                              <div class="user-menu dropdown-menu">
                                   <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>
                                   <a class="nav-link" href="../../"><i class="fa fa-power -off"></i>Logout</a>
                              </div>
                         </div>
                    </div>
               </div>
          </header>
          <!-- /#header -->
          
          <!-- Content -->
<?php
     function update($data){
     global $connection;

     $id = $data['id'];
     $nama_dosen = $data['nama_dosen'];
     $nidn = $data['nidn'];
     $status = $data['status'];
     $jabatan_akademik = $data['jabatan_akademik'];
     $pascasarjana = $data['pascasarjana'];
     $universitas_s2 = $data['universitas'];
     $bidang_keahlian = $data['bidang_keahlian'];

     $sql = "UPDATE m_dosen SET  nama_dosen = '$nama_dosen',
                                   nidn = '$nidn',
                                   status = '$status',
                                   jabatan_akademik = '$jabatan_akademik',
                                   universitas_s2 = '$universitas_s2',
                                   pascasarjana = '$pascasarjana',
                                   bidang_keahlian = '$bidang_keahlian'
                                   WHERE id_dosen  = '$id'";
                    mysqli_query($connection,$sql);

                         return mysqli_affected_rows($connection);
          
}
               if(isset($_POST['submit'])):
               if (update($_POST) > 0) : ?>
                    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                         <span class="badge badge-pill badge-success">Success</span>
                         <span class="ml-4">Data berhasil di Ubah</span>
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                         </button>
                    </div>
               <?php endif; ?>
               <?php endif; ?>

          <div class="content">
               <!-- Animated -->
               <div class="animated fadeIn">
                    <!-- Widgets  -->
                    <div class="row">
                         <div class="content">
                              <div class="card-header">
                                   <strong class="card-title">Ubah Data Dosen</strong>
                              </div>
                              <div class="card-body">
                                   <?php 
                                   $id = $_GET['id-dosen'];
                                   $query = mysqli_query($connection, "SELECT * FROM m_dosen");
                                   $data = mysqli_fetch_assoc($query);
                                   ?>
                                   <form action="" method="post" novalidate="novalidate">
                                        <div class="form-group">
                                             <label for="nama_dosen" class="control-label mb-1">Nama Dosen</label>
                                             <input id="nama_dosen" name="nama_dosen" value="<?php echo $data['nama_dosen']; ?> "type="text" class="form-control" aria-required="true" placeholder="Nama Lengkap beserta gelar" aria-invalid="false">
                                             <input id="id" name="id" value="<?php echo $data['id_dosen']; ?> "type="hidden" class="form-control">
                                        </div>
                                        <div class="form-group">
                                             <label for="nidn" class="control-label mb-1">NIDN</label>
                                             <input id="nidn" name="nidn" type="text" value="<?php echo $data['nidn']; ?>" class="form-control" aria-required="true" aria-invalid="false" PLACEholder="Contoh: 0108098301">
                                        </div>
                                        <div class="form-group">
                                             <label for="status" class="control-label mb-1">status</label>
                                             <select name="status" id="status" class="form-control">
                                             <?php
                                             $sql =  mysqli_query($connection, "SELECT * FROM r_status_dosen");
                                             while ($row = mysqli_fetch_assoc($sql)) :
                                             ?>
                                                  <option value="<?php echo $row['id_status']; ?>"><?php $row['id_status'];
                                                  echo $row['status']; ?></option>
                                             <?php endwhile; ?>
                                        </select>
                                        </div>
                                        <div class="form-group">
                                             <label for="jabatan_akademik" class="control-label mb-1">Jabatan Akademik</label>
                                             <select name="jabatan_akademik" id="jabatan_akademik" class="form-control">
                                             <?php
                                             $sql =  mysqli_query($connection, "SELECT * FROM r_jabatan_akademik");
                                             while ($row = mysqli_fetch_assoc($sql)) :
                                             ?>
                                                  <option value="<?php echo $row['id_jabatan_akademik']; ?>"><?php $row['id_jabatan_akademik'];
                                                  echo $row['nama_jabatan']; ?></option>
                                             <?php endwhile; ?>
                                        </select>
                                        </div>
                                        <div class="form-group">
                                             <label for="pascasarjana" class="control-label mb-1">Pascasarjana</label><br>
                                             <input id="pascasarjana" name="pascasarjana" value="<?php echo $data['pascasarjana']; ?>" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Jurusan Pascasarjana">
                                        </div>
                                        <div class="form-group">
                                             <label for="universitas" class="control-label mb-1">Universitas</label>
                                             <input id="universitas" name="universitas" value="<?php echo $data['universitas_s2']; ?>" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Universitas">
                                        </div>
                                        <div class="form-group">
                                             <label for="bidang_keahlian" class="control-label mb-1">Bidang Keahlian</label>
                                             <input id="bidang_keahlian" name="bidang_keahlian" value="<?php echo $data['bidang_keahlian']; ?>" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Bidang Keahlian">
                                        </div>
                                        <div>
                                             <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-primary btn-block">Ubah Data</button>
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
          <script src="../../assets/js/main.js"></script>
          <!--  Chart js -->
          <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>
          <!--Chartist Chart-->
          <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
          <script src="./../assets/js/init/weather-init.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
          <script src="../../assets/js/init/fullcalendar-init.js"></script>
          <!--Local Stuff-->
</body>

</html>