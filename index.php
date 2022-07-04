<?php
session_start();
require "connect.php";

?>
<!doctype html>
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
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

</head>

<body>
    <div class="d-flex justify-content-center">
        <div class="col-lg-4 pt-5 mt-5">
            <div class="card pt-5">
                <center>
                    <h2>D3 Teknologi Komputer</h2><br><br>
                    <p class="login-box-msg">
                        <img src="images/logo.jpg" width="70px">
                    </p>
                </center>
                <div class="card-body card-block">
                    <form action="" method="post" class="pt-3">
                        <div class="form-group">
                            <label for="username" class="control-label mb-1">Username</label>
                            <input id="username" name="username" type="text" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="password" class="control-label mb-1">Password</label>
                            <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                        </div>
                        <?php
                        if (isset($_POST['submit'])) {
                            $username = $_POST["username"];
                            $password = $_POST["password"];
                        
                            $admin = mysqli_query($connection, "SELECT * FROM admin WHERE username = '$username' AND password ='$password'");
                            mysqli_num_rows($admin);
                            if (mysqli_num_rows($admin) == 1) {
                                $_SESSION['username'] = $username;
                                $_SESSION['password'] = $password;
                        
                                header("Location: admin");
                                exit;
                            } elseif (mysqli_num_rows($admin) == 0) {
                                $dosen = mysqli_query($connection, "SELECT * FROM dosen WHERE username = '$username' AND password = '$password'");
                                mysqli_num_rows($dosen);
                                if (mysqli_num_rows($dosen) == 1) {
                                    $_SESSION['username'] = $username;
                                    $_SESSION['password'] = $password;
                                    header("Location: admin");
                                    exit;
                                } else {
                                    echo "<div>
                                    <p class='text-white bg-danger d-flex justify-content-center'>Username dan passowrd salah!</p>
                                </div>";
                                }
                            }
                        }
                        
                        ?>
                        <div class="form-group pt-3">
                            <button id="submit" type="submit" name="submit" class="col-12 btn btn-primary">Login</button>
                        </div>
                    </form>
                    <p class="login-box-msg">Belum memiliki akun?
                        <a href="register.php">Daftar disini</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
</body>

</html>