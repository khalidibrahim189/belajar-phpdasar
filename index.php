<?php 
///print atau echo untuk menampilkan hasil ke layar atau browser
// print "Halo selamat datang";
// echo 'Belajar php';

//variable 
//harus diawali dolar ($) untuk menghubungkannama lebih bisa dengan (_)
//contoh : $nama_lengkap = "fulan";

#untuk menghubungkan String dengan variable dapat menggunakan titik (.)


$nik = "193.2211.1999";
$nama_lengkap = "Khalid Ibrahim";
$umur = 22;

$tugas = 80;
$quis = 90;
$uts = 85;
$uas = 96;


$nilai = ($tugas + $quis + $uts + $uas) / 4;


echo "Nama : ".$nama_lengkap;
echo " <br> nik : ".$nik;
echo " <br> umur: ".$umur;
echo "<br> Quis: ".$quis;
echo "<br> UTS: ".$uts;
echo "<br> UAS: ".$uas;
echo "<br> Hasil Nilai =  ".$nilai;


?>