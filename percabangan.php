<?php

//belajar percabangan 
// if (kondisi/ ekspresi)
// switch (variable) {case "kondisi"}
//Tenary "kondisi  ? benar : salah"
/// percabangan bersarang if dalam if


echo "<fieldset><legend>Belajar Percabangan | MasukBootcamp </legend>";

$total_belanja = 1500000;

if ($total_belanja > 100000) {
    echo "<h3> Pendaftaran Bootcamp KitaBisa.com!</h3>";
}


$umur = 22;

if ($umur < 25) {
    echo "Kamu berumur $umur tahun , dan nilai + grade anda lumayan bagus";
} else {
    echo "Kamu berumur $umur tahun, tidak bisa bergabung";
}


$nilai_saya = 80;

if ($nilai_saya > 90) {
    $grade = "A";
} elseif ($nilai_saya > 80) {
    $grade = "AB";
} elseif ($nilai_saya > 70) {
    $grade = "B";
} elseif ($nilai_saya > 60) {
    $grade = "BC";
} elseif ($nilai_saya > 50) {
    $grade = "C";
} else {
    $grade = "E";
}

echo "<br> Nilai = " . $nilai_saya;
echo "<br> Grade = " . $grade;

echo "</fieldset>";


echo "<fieldset><legend>Belajar Percabangan Switch </legend>";

$bulan = 1;
switch ($bulan) {
    case 1:
        echo "bulan: Januari";
        break;
    case 2:
        echo "bulan: Febuari";
        break;
    case 3:
        echo "bulan:   Maret";
        break;
    case 4:
        echo "bulan: April";
        break;
}



echo "</fieldset>";

echo "<fieldset><legend>Belajar Percabangan Ternary </legend>";

$dika = 2;

echo $dika == 1 ? "Dika adalah  Laki-Laki" : "Dika adalah Perempuan";



echo "</fieldset>";


echo "<fieldset><legend>Belajar Percabangan Bersarang </legend>";

$umur = 21;
$dewasa = true;
if($umur > 20){
   if($dewasa){
       echo "Selamat datang dan bergabung kak!";
   }else{
       echo "Bisa dicoba lagi tahun depan ya!!";
   }
}else{
    echo "Mohon maaf kak, pendaftaran anda tidak memenuhi syarat";
}



echo "</fieldset>";

?>
