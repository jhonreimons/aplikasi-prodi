<?php
require "../connect.php";


?>
<!doctype html>
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Data Mahasiswa Keluar</title>
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
          <?php
          if (isset($_GET['aksi']) == "hapus" ) : ?>
                    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                         <span class="badge badge-pill badge-success">Success</span>
                         <span class="ml-4">Data berhasil dihapus</span>
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                         </button>
                    </div>
               <?php endif; ?>
               <!-- Animated -->
               <div class="animated fadeIn">
                    <!-- Widgets  -->

                    <div class="d-flex justify-content-end">
                         <form method="post" action="export/export.php">
                              <button class="btn btn-success ml-5 pl-3" onclick="myFunction1()">Export Data Ke Exel</button>
                         </form>
                         <button class="btn btn-success ml-5 pl-3 " onclick="myFunction()">+ Tambah Data</button>
                    </div>
                    <div class="row">
                         <div class="content">
                              <div class="card">
                                   <div class="card-header">
                                        <strong class="card-title">Data Mahasiswa Keluar</strong>
                                   </div>
                                   <div class="card-body">
                                        <table id="bootstrap-data-table" class="table table-striped">
                                             <thead>
                                                  <tr>
                                                       <th class="serial">No.</th>
                                                       <th class="avatar">NIM</th>
                                                       <th>Nama</th>
                                                       <th>Tanggal Keluar</th>
                                                       <th>Status</th>
                                                       <th>Edit</th>
                                                       <th>Hapus</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <?php $i = 1;
                                                  $query = "SELECT * FROM mahasiswa_keluar INNER JOIN
                                                  status_mahasiswa ON 
                                                  mahasiswa_keluar.status = status_mahasiswa.id_status_mahasiswa
                                                  ";
                                                  $sql = mysqli_query($connection, $query);
                                                  while ($data = mysqli_fetch_assoc($sql)) : ?>
                                                       <tr>
                                                            <td class="serial"><?php echo $i; ?>.</td>
                                                            <td><?php echo $data['nim']; ?></td>
                                                            </td>
                                                            <td> <?php echo $data['nama_mahasiswa']; ?></td>
                                                            <td><?php echo $data['tanggal_keluar'] ?></td>
                                                            <td><?php echo $data['status'] ?></td>
                                                            <td><a href="ubah/update_mahasiswa.php?id-mahasiswa=<?php echo $data['id_mahasiswa_keluar']; ?>"><button class="btn btn-warning">Edit</button></td>
                                                            <td><a href="hapus/hapus_mahasiswa.php?id-mahasiswa=<?php echo $data['id_mahasiswa_keluar']; ?>"><button class="btn btn-danger">Hapus</button></td>
                                                       </tr>
                                                  <?php $i++;
                                                  endwhile; ?>
                                             </tbody>
                                        </table>
                                   </div>
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
                         $('#bootstrap-data-table').DataTable();
                    });
               </script>
               <script>
                    function myFunction() {
                         location.replace("buat_data_mahasiswa.php")
                    }
               </script>
               <script>
                    function myFunction1() {
                         location.replace("export/export.php")
                    }
               </script>
</body>

</html>