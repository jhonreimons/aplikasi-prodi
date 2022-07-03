<?php
     require "../../connect.php";

          $id_ta = $_GET['id-ta'];

          function hapus_mbkm($id_ta){
               global $connection;
               mysqli_query($connection,"DELETE FROM data_ta WHERE id_data_ta = '$id_ta'");
               return mysqli_affected_rows($connection);
          }
          if(hapus_mbkm($id_ta) > 0)
          {
               header("location: ../tugas_akhir.php?aksi=hapus");
          }
     
     
