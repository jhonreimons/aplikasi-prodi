<?php
     require "../../connect.php";

          $id_mbkm = $_GET['id-mbkm'];

          function hapus_mbkm($id_mbkm){
               global $connection;
               mysqli_query($connection,"DELETE FROM data_mbkm WHERE id_mbkm = '$id_mbkm'");
               return mysqli_affected_rows($connection);
          }
          if(hapus_mbkm($id_mbkm) > 0)
          {
               header("location: ../data_mbkm.php?aksi=hapus");
          }
     

     
