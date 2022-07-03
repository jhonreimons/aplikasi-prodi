<?php
     require "../../connect.php";

          $id_pa1 = $_GET['id-pa2'];

          function hapus_mbkm($id_pa2){
               global $connection;
               mysqli_query($connection,"DELETE FROM pa2 WHERE id_pa2 = '$id_pa2'");
               return mysqli_affected_rows($connection);
          }
          if(hapus_mbkm($id_pa1) > 0)
          {
               header("location: ../proyek_akhir_2.php?aksi=hapus");
          }
     
     
