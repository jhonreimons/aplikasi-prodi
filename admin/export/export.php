<?php

$koneksi = mysqli_connect("localhost","root","","operasional_prodi");
// mysqli_select_db("penjualan");

// nama file
$filename="data-mahasiswa".".csv";

//header info for browser
header("Content-Type: application/vnd-ms-excel"); 
header('Content-Disposition: attachment; filename="' . $filename . '";');

   //menampilkan data sebagai array dari tabel produk
$out=array();
$sql=mysqli_query($koneksi,"SELECT * FROM mahasiswa_keluar");
while($data=mysqli_fetch_assoc($sql)) $out[]=$data;

$show_coloumn = false;
foreach($out as $record) {
if(!$show_coloumn) {
//menampilkan nama kolom di baris pertama
echo implode("\t", array_keys($record)) . "\n";
$show_coloumn = true;
}
// looping data dari database
echo implode("\t", array_values($record)) . "\n";
} 
exit;