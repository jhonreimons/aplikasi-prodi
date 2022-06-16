<?php 
     require "config.php";
     if(isset($_POST['submit']))
     {
          $status  = $_POST['status'];
          $nama = $_POST['nama'];
          $email = $_POST['email'];
          $username  = $_POST['username'];
          $password = $_POST['password'];
          
          if($status == "Mahasiswa")
          {
               $query = "INSERT INTO mahasiswa(id_mahasiswa,nama_mahasiswa,email,username,password)
               VALUE('','$nama','$email','$username','$password')";
               mysqli_query($conn,$query);
               echo "<script>alert('Anda berhasil mendaftar');
               window.location = register.php;</script>";
          }
          else if($status == "Dosen")
          {    
               $query = "INSERT INTO dosen(id_dosen,nama_dosen,email,username,password)
               VALUE('','$nama','$email','$username','$password')";
               mysqli_query($conn,$query);
               echo "<script>confirm('Anda berhasil mendaftar');
               window.location = ;register.php;</script>";
          }
          else
          {
               echo "<script>confirm('Register gagal');
               window.location = register.php;</script>";
          }
     }


?>
<!doctype html>
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Register</title>
     <meta name="description" content="Ela Admin - HTML5 Admin Template">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
     <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
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
     <div class="d-flex justify-content-center">
          <div class="col-lg-4 pt-5 mt-5">
               <div class="card pt-5 ">
                    <center>
                         <h2>D3 Teknik Komputer</h2><br><br>
                         <p class="login-box-msg">
                              <img src="images/logo.jpg" width="70px">
                         </p>
                         <p class="login-box-msg">Sudah memiliki akun? <a href="../pa2_05/">masuk disini</a>
                         </p>
                         <strong>Daftar</strong><hr>
                    </center>
                    <div class="card-body card-block">
                         <form action="#" method="post" class="pt-2">
                              <div class="form-group">
                                   <div class="form-group">
                                        <label for="Nama" class="control-label mb-1">nama</label>
                                        <input id="Nama" name="nama" type="text" class="form-control"
                                             aria-required="true" aria-invalid="false" placeholder="Nama">
                                   </div>
                                   <div class="form-group">
                                        <label for="email" class="control-label mb-1">Email</label>
                                        <input id="email" name="email" type="email" class="form-control"
                                             aria-required="true" aria-invalid="false" placeholder="email@example.com">
                                   </div>
                                   <div class="form-group">
                                        <label id="status" for="status" class="control-label mb-1">Status</label>
                                             <select name="status" id="status" class="form-control">
                                                  <option value="#">Status Anda Saat ini</option>
                                                  <option value="Mahasiswa">Mahasiswa</option>
                                                  <option value="Dosen">Dosen</option>
                                             </select>
                                   </div>
                                        <div class="form-group">
                                             <label for="username" class="control-label mb-1">Username</label>
                                             <input id="username" name="username" type="text" class="form-control"
                                                  aria-required="true" aria-invalid="false" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                             <label for="password" class="control-label mb-1">Password</label>
                                             <input id="password" name="password" type="password" class="form-control"
                                                  aria-required="true" aria-invalid="false" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                             <label for="password" class="control-label mb-1">Konfirmasi Password</label>
                                             <input id="password" name="password" type="password" class="form-control"
                                                  aria-required="true" aria-invalid="false" placeholder="Konfirmasi Paswword">
                                        </div>
                                        <div class="form-group pt-5">
                                             <button type="submit" name="submit" class="col-12 btn btn-primary">Submit</button>
                                        </div>
                         </form>
                    </div>
               </div>
          </div>
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