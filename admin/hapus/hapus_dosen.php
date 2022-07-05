<?php
          require "../../connect.php";
     $id_dosen = $_GET['id-dosen'];

     function hapus_dosen($id_dosen){
          global $connection;
          mysqli_query($connection,"DELETE FROM t_pengajaran WHERE nama_dosen = '$id_dosen'");
          mysqli_query($connection,"DELETE FROM data_ta WHERE id_dosen_pembimbing1 = '$id_dosen'");
          mysqli_query($connection,"DELETE FROM data_ta WHERE id_dosen_penguji_1 = '$id_dosen'");
          mysqli_query($connection,"DELETE FROM data_ta WHERE id_dosen_penguji_2 = '$id_dosen'");
          mysqli_query($connection,"DELETE FROM m_penelitian WHERE id_dosen = '$id_dosen'");
          mysqli_query($connection,"DELETE FROM pa1 WHERE id_dosen_pembimbing = '$id_dosen' OR id_dosen_penguji1 = '$id_dosen' OR id_dosen_penguji2 = '$id_dosen'");
          mysqli_query($connection,"DELETE FROM pa2 WHERE id_dosen_pembimbing = '$id_dosen' OR id_dosen_penguji1 = '$id_dosen' OR id_dosen_penguji2 = '$id_dosen'");
          mysqli_query($connection,"DELETE FROM m_dosen WHERE id_dosen = '$id_dosen'");
          
          return mysqli_affected_rows($connection);
     }
     if(hapus_dosen($id_dosen) > 0)
     {
          header("location: ../data_dosen.php?aksi=hapus");
     }

?>