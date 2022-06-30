<?
function update($data){
          global $connection;

          $id = $data['id'];
          $nama = $data['nama'];
          $nim = $data['nim'];
          $angkatan = $data['angkatan'];
          $semester = $data['semester'];
          $perusahaan = $data['perusahaan'];
          $tahun_ajaran = $data['tahun_ajaran'];
          $status = $data['status'];

          $sql = "UPDATE data_mbkm SET  nama = '$nama',
                                        nim = '$nim',
                                        angkatan = '$angkatan',
                                        perusahaan = '$perusahaan',
                                        semester = '$semester',
                                        tahun_ajaran = '$tahun_ajaran',
                                        status = '$status'
                                        WHERE id_mbkm  = '$id'";
                         mysqli_query($connection,$sql);

                              return mysqli_affected_rows($connection);
               
     }
?>