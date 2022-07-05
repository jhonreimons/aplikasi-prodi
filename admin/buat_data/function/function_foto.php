<?php

function upload()
{
     $ekstesni_true = ['jpg','jpeg','png'];
     $nama = $_FILES['foto']['name'];
     $size = $_FILES['foto']['size'];
     $temp = $_FILES['foto']['tmp_name'];
     $ekstensi = explode(".",$nama);
     $ekstensi =   strtolower(end($ekstensi));
     if (!in_array($ekstensi,$ekstesni_true)) {
          echo "<script>
                    alert('Format file yang anda masukkan tidak sesuai !');
               </script>";
               if($size > 1000000){
                    echo "<script>
                    alert('Anda harus memasukkan file lebih kecil dari 1 MB !');
                    </script>";
               }
          }
          $NamaBaru = uniqid();
          $NamaBaru .= '.';
          $NamaBaru .= $ekstensi;

          move_uploaded_file($temp,"../../images/foto".$NamaBaru);
          return $NamaBaru;
}