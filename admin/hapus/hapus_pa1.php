<?php
     require "../../connect.php";

          $id_pa1 = $_GET['id-pa1'];

          function hapus_mbkm($id_pa1){
               global $connection;
               mysqli_query($connection,"DELETE FROM pa1 WHERE id_pa1 = '$id_pa1'");
               return mysqli_affected_rows($connection);
          }
          if(hapus_mbkm($id_pa1) > 0)
          {
               header("location: ../proyek_akhir_1.php?aksi=hapus");
          }
     
     
