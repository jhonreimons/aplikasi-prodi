<?php
     require "../../connect.php";
          $id_matakuliaih = $_GET['id-matakuliah'];
          function hapus_mbkm($id_matakuliaih){
               global $connection;
               mysqli_query($connection,"DELETE FROM m_matakuliah WHERE id_matakuliah = '$id_matakuliaih'");
               return mysqli_affected_rows($connection);
          }
          if(hapus_mbkm($id_matakuliaih) > 0)
          {
               header("location: ../data/data_matakuliah.php?aksi=hapus");
          }
     