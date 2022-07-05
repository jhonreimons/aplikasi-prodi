<?php
function update($data){
     global $connection;

     $id = $data['id'];
     $nama_dosen = $data['nama_dosen'];
     $nidn = $data['nidn'];
     $status = $data['status'];
     $jabatan_akademik = $data['jabatan_akademik'];
     $pascasarjana = $data['pascasarjana'];
     $universitas_s2 = $data['universitas'];
     $bidang_keahlian = $data['bidang_keahlian'];
     $FotoLama = $data['fotoLama'];
     if ($_FILES['foto']['error'] === 4) {
          $foto = $FotoLama;
     }
     else{
          $foto = upload();
     }

     $sql = "UPDATE m_dosen SET  nama_dosen = '$nama_dosen',
                                   nidn = '$nidn',
                                   status = '$status',
                                   jabatan_akademik = '$jabatan_akademik',
                                   universitas_s2 = '$universitas_s2',
                                   pascasarjana = '$pascasarjana',
                                   bidang_keahlian = '$bidang_keahlian',
                                   foto = '$foto'
                                   WHERE id_dosen  = '$id'";
                                   mysqli_query($connection,$sql);

                         return mysqli_affected_rows($connection);
          
}
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