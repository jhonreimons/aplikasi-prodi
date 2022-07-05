<?php
require "../connect.php";

$id  = $_GET['id'];

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
                                   <a class="nav-link" href="../"><i class="fa fa-power -off"></i>Logout</a>
                              </div>
                         </div>
                    </div>
               </div>
          </header>
          <!-- /#header -->
          <!-- Content -->
          <div class="content">
               <div class="col-md-12">
                    <aside class="profile-nav alt">
                         <section class="card">
                              <div class="w-auto">
                                   <div class="card">
                                        <div class="card-header">
                                             <strong class="card-title">Profile</strong>
                                        </div>
                                        <div class="card-body col-12">
                                             <table class="table table-striped col-6">
                                                  <?php
                                                  $sql  = mysqli_query($connection, "SELECT * FROM m_dosen 
                                                  INNER JOIN r_status_dosen ON m_dosen.status = r_status_dosen.id_status
                                                  INNER JOIN r_jabatan_akademik ON m_dosen.jabatan_akademik = r_jabatan_akademik.id_jabatan_akademik
                                                  WHERE id_dosen ='$id'
                                                  ");
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
                                                                 <td>Status</td>
                                                                 <td><?php echo $data['status']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                 <td>Jabatan Akademik</td>
                                                                 <td><?php echo $data['nama_jabatan']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                 <td>Bidang Keahlian</td>
                                                                 <td><?php echo $data['bidang_keahlian']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                 <td>S2</td>
                                                                 <td><?php //$foto =  $data['foto'];
                                                                      echo "$data[pascasarjana], $data[universitas_s2]"; ?></td>
                                                            </tr>
                                                       </tbody>
                                                  <?php endwhile; ?>
                                                  <!-- <img class="card-img-right col-2" src="../images/Foto Dosen/<?php //echo $data1['foto']; ?>"align="right" alt="Card image cap"> -->
                                             </table>
                                        </div>
                                   </div>
                              </div>
                         </section>
                    </aside>
               </div>
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
                                        <th>Tahun Ajaran</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <tr>
                                        <?php $i = 1;
                                        $sql2 = mysqli_query($connection, "SELECT * FROM t_pengajaran WHERE nama_dosen = '$id'");
                                        while ($data1 = mysqli_fetch_assoc($sql2)) :
                                             $matakuliah = $data1['matakuliah'];
                                             $tahun = $data1['tahun_ajaran'];
                                             $sql3 = mysqli_query($connection, "SELECT * FROM m_matakuliah WHERE id_matakuliah = '$matakuliah'");
                                             $data3 = mysqli_fetch_assoc($sql3);
                                             $sql4 = mysqli_query($connection, "SELECT * FROM r_tahun WHERE id_tahun = '$tahun'");
                                             $data4 = mysqli_fetch_assoc($sql4);
                                        ?>
                                             <td><?php echo $i; ?>.</td>
                                             <td><?php echo $data3['kode_matakuliah']; ?></td>
                                             <td><?php echo $data3['nama_matakuliah']; ?></td>
                                             <td><?php echo $data3['sks']; ?></td>
                                             <td><?php echo $data1['semester']; ?></td>
                                             <td><?php echo $data4['tahun_ajaran']; ?></td>
                                   </tr>
                              <?php $i++;
                                        endwhile; ?>
                              </tbody>
                         </table>
                    </div>
                    <!-- .animated -->
               </div>
               <div class="card">
                    <div class="card-header">
                         <strong class="card-title">Tugas Akhir</strong>
                    </div>
                    <div class="card-body">
                         <table id="bootstrap-data-table" class="table table-striped table-bordered">
                              <thead>
                                   <tr>
                                        <th>No.</th>
                                        <th>Dosen Pembimbing I</th>
                                        <th>Dosen Pembimbing II</th>
                                        <th>Yang di bimbing</th>
                                        <th>Dosen Penguji 1</th>
                                        <th>Dosen Penguji 2</th>
                                        <th>Tahun Ajaran</th>
                                        <th>Judul PA</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <?php $i = 1;
                                   $query1 =  "SELECT * FROM data_ta WHERE id_dosen_pembimbing1 = '$id'";
                                   $sql1 = mysqli_query($connection, $query1);
                                   while ($data = mysqli_fetch_assoc($sql1)) :
                                        $pembimbing1 = $data['id_dosen_pembimbing1'];
                                        $penguji1 = $data['id_dosen_pembimbing1'];
                                        $penguji2 = $data['id_dosen_pembimbing1'];
                                        $tahun = $data['tahun_ajaran'];
                                        $sql2 = mysqli_query($connection, "SELECT * FROM m_dosen WHERE id_dosen = '$pembimbing1'");
                                        $data2 = mysqli_fetch_assoc($sql2);
                                        $sql3 = mysqli_query($connection, "SELECT * FROM m_dosen WHERE id_dosen = '$penguji1'");
                                        $data3 = mysqli_fetch_assoc($sql3);
                                        $sql4 = mysqli_query($connection, "SELECT * FROM m_dosen WHERE id_dosen = '$penguji2'");
                                        $data4 = mysqli_fetch_assoc($sql4);
                                        $sql5 = mysqli_query($connection, "SELECT * FROM r_tahun WHERE id_tahun = '$tahun'");
                                        $data5 = mysqli_fetch_assoc($sql5);
                                   ?>
                                        <tr>
                                             <td><?php echo $i; ?>.</td>
                                             <td><?php echo $data2['nama_dosen']; ?></td>
                                             </td>
                                             <td><?php echo $data['id_dosen_pembimbing2']; ?></td>
                                             </td>
                                             <td><?php echo $data['jumlah_yg_dibimbing']; ?></td>
                                             <td><?php echo $data3['nama_dosen']; ?><br>
                                             </td>
                                             <td><?php echo $data4['nama_dosen']; ?> <br>
                                             </td>
                                             <td><?php echo $data5['tahun']; ?></td>
                                             <td><?php echo $data['judul'] ?></td>
                                        </tr>
                                   <?php $i++;
                                   endwhile; ?>
                              </tbody>
                         </table>
                    </div>
                    <div class="card">
                         <div class="card-header">
                              <strong class="card-title">Proyek Akhir II</strong>
                         </div>
                         <div class="card-body">
                              <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                   <thead>
                                        <tr>
                                             <th>No.</th>
                                             <th>Dosen Pembimbing</th>
                                             <th>Yang di bimbing</th>
                                             <th>Dosen Penguji I</th>
                                             <th>Dosen Penguji II</th>
                                             <th>Tahun Ajaran</th>
                                             <th>Judul PA</th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                        <tr>
                                             <?php $i = 1;
                                             $query1 =  "SELECT * FROM pa2 
                                             INNER JOIN m_dosen ON pa2.id_dosen_pembimbing = m_dosen.id_dosen 
                                             AND  pa2.id_dosen_penguji1  = m_dosen.id_dosen WHERE pa2.id_dosen_pembimbing = '$id'
                                             ";
                                             $sql1 = mysqli_query($connection, $query1);
                                             while ($data1 = mysqli_fetch_assoc($sql1)) :
                                             ?>
                                                  <td><?php echo $i; ?>.</td>
                                                  <td><?php echo $data1['nama_dosen']; ?></td>
                                                  </td>
                                                  <td><?php echo $data1['jumlah_yg_dibimbing']; ?></td>
                                                  <td><?php echo $data1['id_dosen_penguji1']; ?></td>
                                                  <td><?php echo $data1['id_dosen_penguji2']; ?></td>
                                                  <td><?php echo $data1['tahun_ajaran']; ?></td>
                                                  <td><?php echo $data1['judul_pa']; ?></td>
                                        </tr>
                                   <?php $i++;
                                             endwhile; ?>
                                   </tbody>
                              </table>
                         </div>
                         <div class="card-header">
                              <strong class="card-title">Proyek Akhir I</strong>
                         </div>
                         <div class="card-body">
                              <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                   <thead>
                                        <tr>
                                             <th>No.</th>
                                             <th>Dosen Pembimbing</th>
                                             <th>Yang di bimbing</th>
                                             <th>Dosen Penguji I</th>
                                             <th>Dosen Penguji II</th>
                                             <th>Tahun Ajaran</th>
                                             <th>Judul PA</th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                        <tr>
                                             <?php $i = 1;
                                             $query2 =  "SELECT * FROM pa1 
                                             INNER JOIN m_dosen ON pa1.id_dosen_pembimbing = m_dosen.id_dosen
                                             WHERE id_dosen_pembimbing = '$id'";
                                             $sql2 = mysqli_query($connection, $query2);
                                             while ($data1 = mysqli_fetch_assoc($sql2)) :
                                             ?>
                                                  <td><?php echo $i; ?>.</td>
                                                  <td><?php echo $data2['nama_dosen']; ?></td>
                                                  </td>
                                                  <td><?php echo $data1['jumlah_yg_dibimbing']; ?></td>
                                                  <td><?php echo $data3['nama_dosen']; ?></td>
                                                  <td><?php echo $data4['nama_dosen']; ?></td>
                                                  <td><?php echo $data1['tahun_ajaran']; ?></td>
                                                  <td><?php echo $data1['judul_pa']; ?></td>
                                        </tr>
                                   <?php $i++;
                                             endwhile; ?>
                                   </tbody>
                              </table>
                         </div>
                         <div class="card-header mt-3">
                                   <strong class="card-title">Data Penelitian Dosen</strong>
                              </div>
                              <div class="card-body">
                                   <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                        <thead>
                                             <tr>
                                                  <th>No.</th>
                                                  <th>Nama Dosen</th>
                                                  <th>Tahun</th>
                                                  <!-- <th>Jenis Peneltian</th> -->
                                                  <th>Judul Penelitian</th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                             <?php $i = 1;
                                             $sql = "SELECT * FROM m_penelitian INNER JOIN m_dosen
                                             ON m_penelitian.id_dosen = m_dosen.id_dosen";
                                             $data = mysqli_query($connection,$sql);
                                             while ($row = mysqli_fetch_assoc($data)) :
                                                  $id_dosen = $row['id_dosen'];
                                                  $tahun_ajaran = $row['tahun_ajaran'];
                                                  $sql2 = "SELECT * FROM r_tahun WHERE id_tahun = '$tahun_ajaran'";
                                                  $qury2 = mysqli_query($connection,$sql2); 
                                                  $data2 = mysqli_fetch_assoc($qury2);
                                                  $tahun_ajaran = $row['tahun_ajaran'];
                                                  $sql3 = "SELECT * FROM m_dosen WHERE id_dosen  = '$id_dosen'";
                                                  $qury3 = mysqli_query($connection,$sql3); 
                                                  $data3 = mysqli_fetch_assoc($qury3);
                                             ?>
                                                  <tr>
                                                       <td><?php echo $i; ?>.</td>
                                                       <td><?php echo $data3['nama_dosen']; ?></td>
                                                       </td>
                                                       <td><?php echo $data2['tahun']; ?></td>
                                                       <!-- <td><?php //echo $row['jenis_peneltian']; ?> <br> -->
                                                       </td>
                                                       <td><?php echo $row['judul_penelitian']; ?><br>
                                                       </td>
                                                  </tr>
                                             <?php $i++;
                                             endwhile; ?>
                                        </tbody>
                                   </table>
                              </div>
                         <!-- .animated -->
                    </div><!-- .content -->

                    <!-- .animated -->
               </div><!-- .content -->
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