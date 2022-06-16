<?php
require "../config.php";

function insert($data){
     global $conn;
          $judul = $data['judul'];
          $keterangan=  $data['keterangan'];
          $tangal = $data['tanggal'];
          $jam_mulai = $data['jam_mulai'];
          $ijam_selesai = $data['jam_selesai'];
          $sql = "INSERT INTO jadwal_kegiatan (nama_kegiatan,keterangan,tanggal,jam_mulai,jam_selesai)
          VALUES ('$judul','$keterangan','$tangal','$jam_mulai','$ijam_selesai')";
          mysqli_query($conn,$sql);
          
          $rows = mysqli_affected_rows($conn);
          return $rows;
}