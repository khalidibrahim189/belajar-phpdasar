<?php
//operator
//ada 6 jenis operator dalam php

//operator aritmatika -> untuk operasi aritmatikan 
// + - / * %


//operartor penugasa -> berfungsi memberikan penugasan pada variable

//operator increment + dan decrement -


echo "<fieldset><legend>Belajar Operator Aritmatika</legend>";

$a = 20;
$b = 10;

//penjumlahan

$hasil = $a + $b;
echo "$a + $b = $hasil";
echo "<hr>";


//pengurangan

$hasil = $a - $b;
echo "$a - $b = $hasil";
echo "<hr>";

//pembagian

$hasil = $a / $b;
echo "$a / $b = $hasil";
echo "<hr>";

//perkalian

$hasil = $a * $b;
echo "$a * $b = $hasil";
echo "<hr>";



echo "</fieldset>";


echo "<fieldset><legend>Belajar Operator Penugasan </legend>";

$jumlah = 50;
$jumlah = $jumlah + 10;
$jumlah += 10;
$jumlah -= 10;
$jumlah *= 2;

echo "Hasil jumlah =  ".$jumlah;



echo "</fieldset>";




echo "<fieldset><legend>Belajar Operator Decrement and Increment </legend>";

$jumlah = 2;
$jumlah++; //ditambah 1
$jumlah++; //ditambah 1
$jumlah--; //dikurangi 1

echo "Hasil dari ".$jumlah;



echo "</fieldset>";

echo "<fieldset><legend>Belajar Operator Relasi </legend>";

$a = 12;
$b = 6;

//menggunakann operator relasi 
$c = $a > $b;
echo "$a > $b = $c";
echo "<hr>"; 




echo "</fieldset>";
?>