<?php

//belakar array

//aray kosong
$buat = array();
$hobi = [];


//buat array sekaligus isi
$minuman = array('Es teh', 'Kopi', 'Susu');
$makanan = ['Soto', 'Nasi Goreng', 'Bakso'];

//buat array dengan isi index

$anggota[0] = 'Khalid';
$anggota[1] = 'Farid';
$anggota[3] = 'Berama';


//array tipe berbeda

$data = ['Khalid', 123, 122.2, true];


//tampilkan nilai
echo "Nama Pembeli: ".$anggota[0]."<br>";
echo "Makanan yang dipesan: ".$makanan[1]."<br>";
echo "Minuman yang sudah dipesan: ".$minuman[0]."<br>";

echo "<hr>";

//array assosiatif
$artikel = [
    "judul" => "Belajar pemrograman PHP",
    "penulis" => "Khalid Ibrahim",
    "view" => 1990
];


//cetak hasil
echo "Judul :".$artikel["judul"]."<br>";
echo "Penulis :".$artikel["penulis"]."<br>";
echo "View :".$artikel["view"];

?>