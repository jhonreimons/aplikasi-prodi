<?php

require "../config.php";
$query1 =  "SELECT * FROM bph_kpu";
$sql1 = mysqli_query($conn, $query1);




?>

<!doctype html>
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Data KPU Himpunan</title>
     <meta name="description" content="Ela Admin - HTML5 Admin Template">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
     <link rel="stylesheet" href="../assets/css/cs-skin-elastic.css">
     <link rel="stylesheet" href="../assets/css/lib/datatable/dataTables.bootstrap.min.css">
     <link rel="stylesheet" href="../assets/css/style.css">
     <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
     <!-- Left Panel -->
     <aside id="left-panel" class="left-panel">
          <nav class="navbar navbar-expand-sm navbar-default">
               <div id="main-menu" class="main-menu collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                         <li class="active">
                              <a href="../admin"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                         </li>
                         <li class="menu-title">Data Mahasiswa </li><!-- /.menu-title -->
                         <li>
                              <a href="data_mahasiswa.php"> <i class="menu-icon fa fa-user-md"></i>Data mahasiswa</a>
                         </li>
                         <li>
                              <a href="data_mbkm.php"> <i class="menu-icon fa fa-user-md"></i>MBKM</a>
                         </li>
                         <li class="menu-title">Data Dosen</li><!-- /.menu-title -->
                         <li>
                              <a href="data_dosen.php"> <i class="menu-icon ti-user"></i>Data dosen</a>
                         </li>
                         <li class="data-toggle">
                              <a href="tugas_akhir.php" class=" data-toggle" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Tugas Akhir</a>
                         </li>
                         <li class="menu-item-has-children dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Proyek Akhir</a>
                              <ul class="sub-menu children dropdown-menu">
                                   <li><i class="fa fa-table"></i><a href="proyek_akhir_1.php">Proyek Akhir I</a></li>
                                   <li><i class="fa fa-table"></i><a href="proyek_akhir_2.php">Proyek Akhir II</a></li>
                              </ul>
                         </li>
                         <li>
                              <a href="data_publikasi_dosen.php"> <i class="menu-icon fa fa-area-chart"></i>Publikasi Dosen</a>
                         </li>
                         <li class="menu-title">Data Kegiatan</li>
                         <li>
                              <a href="jadwal_kegiatan.php"> <i class="menu-icon fa fa-bar-chart"></i>Jadwal Kegiatan</a>
                         </li>

                         <li>
                              <a href="data_penelitian_dosen.php"> <i class="menu-icon fa fa-area-chart"></i>Penelitian Dosen</a>
                         </li>
                         <li>
                              <a href="penugasan_dosen.php"> <i class="menu-icon fa fa-area-chart"></i>Penugasan Dosen</a>
                         </li>
                         <li class="menu-title">HIMPUNAN MAHASISWA</li>
                         <li>
                              <a href="visi_misi.php"> <i class="menu-icon fa fa-bar-chart"></i>Visi Misi</a>
                         </li>
                         <li>
                              <a href="bph_himpunan.php"> <i class="menu-icon fa fa-bar-chart"></i>BPH Himpunan</a>
                         </li>
                         <li>
                              <a href="divisi_himpunan.php"> <i class="menu-icon fa fa-bar-chart"></i>Divisi Himpunan</a>
                         </li>
                         <li>
                              <a href="kpu_himpunan.php"> <i class="menu-icon fa fa-bar-chart"></i>KPU Himpunan</a>
                         </li>
                    </ul>
               </div><!-- /.navbar-collapse -->
          </nav>
     </aside>
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
                    <div class="d-flex justify-content-end">
                         <button class="btn btn-success ml-5 pl-3" onclick="myFunction()">+ Tambah Data</button>
                    </div>
                    <div class="row">
                         <div class="content">
                              <div class="card">
                                   <div class="card-header">
                                        <strong class="card-title">Pengurusan KPU Himpunan</strong>
                                   </div>
                                   <div class="card-body">
                                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                             <thead>
                                                  <tr>
                                                       <th>No.</th>
                                                       <th>Ketua</th>
                                                       <th>Wakil Ketua</th>
                                                       <th>Sekretaris</th>
                                                       <th>Tahun Menjabat</th>
                                                       <th>Tahun Selesai Menjabat</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <?php $i = 1;
                                                  while ($data1 = mysqli_fetch_assoc($sql1)) :
                                                  ?>
                                                       <tr>
                                                            <td><?php echo $i; ?>.</td>
                                                            <td><?php echo $data1['nama_ketua']; ?></td>
                                                            </td>
                                                            <td><?php echo $data1['wakil_ketua']; ?></td>
                                                            <td><?php echo $data1['skretaris']; ?></td>
                                                            <td><?php echo $data1['tahun_menjabat']; ?> <br>
                                                            </td>
                                                            <td><?php echo $data1['tahun_selesai']; ?></td>
                                                       </tr>
                                                  <?php $i++;
                                                  endwhile; ?>
                                             </tbody>
                                        </table>
                                   </div>
                                   <!-- .animated -->
                              </div><!-- .content -->

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
                    <script src="../assets/js/lib/data-table/datatables.min.js"></script>
                    <script src="../assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
                    <script src="../assets/js/lib/data-table/dataTables.buttons.min.js"></script>
                    <script src="../assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
                    <script src="../assets/js/lib/data-table/jszip.min.js"></script>
                    <script src="../assets/js/lib/data-table/vfs_fonts.js"></script>
                    <script src="../assets/js/lib/data-table/buttons.html5.min.js"></script>
                    <script src="../assets/js/lib/data-table/buttons.print.min.js"></script>
                    <script src="../assets/js/lib/data-table/buttons.colVis.min.js"></script>
                    <script src="../assets/js/init/datatables-init.js"></script>
                    <script type="text/javascript">
                         $(document).ready(function() {
                              $('#bootstrap-data-table-export').DataTable();
                         });
                    </script>
                    <script type="text/javascript">
                         $(document).ready(function() {
                              $('#bootstrap-data-table-export').DataTable();
                         });
                    </script>
                    <script>
                         function myFunction() {
                              location.replace("buat_data_kpu.php")
                         }
                    </script>
                    <!--Local Stuff-->
</body>

</html>