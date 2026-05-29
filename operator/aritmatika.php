<?php
    //operator aritmatika:
    // (+)	 Penjumlahan	Menambahkan angka	$a = 5 + 3;	 8
    // (-)	Pengurangan	Mengurangi angka	$a = 10 - 2;	8
    // (*)	Perkalian	Mengalikan angka (pakai bintang, bukan x)	$a = 4 * 2;	8
    // (/)	Pembagian	Membagi angka (pakai garis miring)	$a = 16 / 2;	8
    // (**)	Pangkat	Memangkatkan angka	$a = 2 ** 3;	8
    // (%)	Modulo	Sisa dari hasil pembagian	$a = 10 % 3;	1

    //penjumlahan
    $sepatu = 20000000; //patokan
    $baju= 30000000;

    $totalHarga= $sepatu+$baju;
    echo "total harga $totalHarga <br>";

    //pengurangan
    $diskon=  200000;
    $totalDiskon = $sepatu-$diskon;
    echo"diskon jadi : $totalDiskon <br>";

    //perkalian
    $pembeli=5;
    $totalPembelian = $sepatu*$pembeli;
    echo"total pembelian sepatu ini mencapai : $totalPembelian <br>";

    //pembagian
    $keuntungan = $totalPembelian;
    $gajiKaryawan = 2000000;
    $penggajian = $keuntungan / $gajiKaryawan;

    echo"keuntungan $keuntungan bisa untuk menggaji karyawan sebanyak : $penggajian kali <br>";

    //pangkat
    $a = 7**3; //hasil 343
    // echo "$a <br>";

    //modulo
    $sisaBagi = $keuntungan % $gajiKaryawan;

    echo "jadi sisa untukku adalah $sisaBagi";



