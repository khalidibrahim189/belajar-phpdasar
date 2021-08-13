<?php

function pembukaan(){
    echo "Halo selamat pagi, <br>";
    echo "Kami dari tim suport woowa, <br>";
    echo "<hr>";
}

//tampilkan

    pembukaan();

    //tampilkan kembali
    pembukaan();


    // menggunakan sebuah function dari nilai kedalam function

    // function pesan($salam, $nama){
    //     echo $salam.",<br>";
    //     echo "Halo mas ".$nama.", sedang mencoba produk baru ya  <br>";
    //     echo "<hr>";
    // }

    // pesan("Halo selamat pagi", "Khalid");

    function pesan($salam, $nama){
        echo $salam."<br>";
        echo "Halo apa kabar ".$nama, ", lagi mencoba produk dari woowa ya? <br>";
    }

    pesan('Halo selamat pagi, tim suport', 'Khalid ibrahim');
    echo "<hr>";
    //rilai dengan return

    function hitungUmur($tahun_lahir){
        $umur = date('Y') - $tahun_lahir;
        return $umur;
    }

    echo "Umur saya adalah ".hitungUmur(1999)." tahun";
    echo "<hr>";


    function biodata($nama, $gender, $jurusan){
        echo "Nama Lengkap  : ".$nama."<br>";
        echo "Jenis Kelamin : ".$gender."<br>";
        echo "Jurusan Kuliah : ".$jurusan."<br>";
    }

    biodata("Khalid Ibrahim", "Laki-laki", "Rekayasa Perangkat Lunak");
?>

