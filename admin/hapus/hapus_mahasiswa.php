<?php
require "../../connect.php";

$id_mahasiswa = $_GET['id-mahasiswa'];

function hapus_mbkm($id_mahasiswa){
     global $connection;
     mysqli_query($connection,"DELETE FROM mahasiswa_keluar WHERE id_mahasiswa_keluar = '$id_mahasiswa'");
     return mysqli_affected_rows($connection);
}
if(hapus_mbkm($id_mahasiswa) > 0)
{
     header("location: ../data_mahasiswa.php?aksi=hapus");
}
