<?php
     require "../../connect.php";

          $id_publikasi = $_GET['id-publikasi'];

          function hapus_mbkm($id_publikasi){
               global $connection;
               mysqli_query($connection,"DELETE FROM m_publikasi WHERE id_publikasi = '$id_publikasi'");
               return mysqli_affected_rows($connection);
          }
          if(hapus_mbkm($id_publikasi) > 0)
          {
               header("location: ../data_publikasi_dosen.php?aksi=hapus");
          }
     
     
