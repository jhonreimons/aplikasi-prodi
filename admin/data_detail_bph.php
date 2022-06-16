<?php
require "../config.php";

$id  = $_GET['id'];
$sql  = mysqli_query($conn, "SELECT * FROM dosen WHERE id_dosen ='$id'");

?>
<!doctype html>
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Data Dosen</title>
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
               <div class="col-md-10">
                    <aside class="profile-nav alt">
                         <section class="card">
                              <div class="w-auto">
                                   <div class="card">
                                        <div class="card-header">
                                             <strong class="card-title">Profile</strong>
                                        </div>
                                        <div class="card-body">
                                             <table class="table table-striped col-4">
                                                  <?php
                                                  while ($data = mysqli_fetch_assoc($sql)) : ?>
                                                       <thead>
                                                            <tr>
                                                                 <td>Nama</td>
                                                                 <td><?php echo $data['nama_dosen']; ?></td>
                                                            </tr>
                                                       </thead>
                                                       <tbody>
                                                            <tr>
                                                                 <td>NIDN</td>
                                                                 <td><?php echo $data['nidn']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                 <td>No Telepone</td>
                                                                 <td><?php echo $data['no_telepon']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                 <td>email</td>
                                                                 <td><?php echo $data['email']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                 <td>S2</td>
                                                                 <td><?php echo "$data[jurusan], $data[lulusan]"; ?></td>
                                                            </tr>
                                                       </tbody>
                                                  <?php endwhile; ?>
                                             </table>
                                             <div class="text-center">
                                                  <img src="/images/Foto Dosen/Ahmad_Zatnika_ITDel.png" class="img-fluid" alt="...">
                                             </div>
                                        </div>
                                   </div>

                              </div>
                         </section>
                    </aside>
                    <div class="card">
                         <div class="card-header">
                              <strong class="card-title">Matakuliah Yang diberikan</strong>
                         </div>
                         <div class="card-body">
                              <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                   <thead>
                                        <tr>
                                             <th>No.</th>
                                             <th>Kode Matakuliah</th>
                                             <th>Matakuliah</th>
                                             <th>SKS</th>
                                             <th>Semester</th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                        <tr>
                                             <?php $i = 1;
                                             $sql2 = mysqli_query($conn, "SELECT * FROM  dosen INNER JOIN mtk_dosen INNER JOIN matakuliah WHERE dosen.id_dosen = '$id' AND mtk_dosen.id_matakuliah  = matakuliah.id_matakuliah");
                                             while ($data1 = mysqli_fetch_assoc($sql2)) :
                                             ?>
                                                  <td><?php echo $i; ?>.</td>
                                                  <td><?php echo $data1['kode_matakuliah']; ?></td>
                                                  <td><?php echo $data1['matakuliah']; ?></td>
                                                  <td><?php echo $data1['sks']; ?></td>
                                                  <td><?php echo $data1['semester']; ?></td>
                                        </tr>
                                   <?php $i++;
                                             endwhile; ?>
                                   </tbody>
                              </table>
                         </div>
                         <!-- .animated -->
                    </div>
               </div>
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