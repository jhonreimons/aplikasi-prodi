<?php
     require "../../connect.php";

          $id_tugas = $_GET['id-tugas'];

          function hapus_mbkm($id_tugas){
               global $connection;
               mysqli_query($connection,"DELETE FROM t_pengajaran WHERE id_pengajaran = '$id_tugas'");
               return mysqli_affected_rows($connection);
          }
          if(hapus_mbkm($id_tugas) > 0)
          {
               header("location: ../view_data_tugas.php?aksi=hapus&id=$id_tugas");
          }
     
     
