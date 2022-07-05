<?php
     require "../../connect.php";

          $id_penelitian = $_GET['id-penelitian'];

          function hapus_mbkm($id_penelitian){
               global $connection;
               mysqli_query($connection,"DELETE FROM m_penelitian WHERE id_penelitian = '$id_penelitian'");
               return mysqli_affected_rows($connection);
          }
          if(hapus_mbkm($id_penelitian) > 0)
          {
               header("location: ../data_penelitian_dosen.php?aksi=hapus");
          }
     
     
