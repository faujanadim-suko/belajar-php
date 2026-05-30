<?php
// Bayangkan fungsi itu seperti Mesin Pembuat Kopi otomatis.
    // Kamu memasukkan biji kopi dan air ke dalam mesin (Input / Parameter).
    // Mesin menggiling, memasak, dan memproses kopi tersebut (Proses).
    // Mesin mengeluarkan secangkir kopi hangat untukmu (Output / Return Value).

// fungsi sederhana 
function menyapa(){
    echo "halo kocak!!!!! <br>";
}

menyapa();

//fungsi dengan parameter
function dikali($a, $b){
    echo "hasil kali dari $a X $b = " . $a*$b . "<br>";
}
dikali(12, 2);

//contoh lain

function tukangNyapa ($nama, $waktu){
    echo "$waktu $nama, mau kemana? <br>";
}

tukangNyapa("asep","pagi");

//Menggunakan return (Output)
    //echo itu cuma mencetak teks ke layar saat itu juga.
    //return itu mengembalikan nilai dari dalam fungsi ke kode luar, sehingga nilainya bisa kita simpan ke dalam variabel lain atau kita utak-atik lagi.

    function totalBelanja ($belanja){
        $diskon = $belanja * 0.1;
        return $diskon;
    }

    $hitungDiskon = totalBelanja(200000);

    echo "total sikon kamu hari ini adalah $hitungDiskon dari total belanja 200.000 <br>";



//Default Parameter (Nilai Cadangan)
    // bisa memberikan nilai bawaan jika si pengguna fungsi lupa memasukkan input.

    function pesanMinum ($minuman = "air putih"){ //air putih merupakan nilai devaul dari parameter dan bisa di ubah
        echo "saya memesan $minuman saja <br>";
    }

    pesanMinum();
    pesanMinum("kopi pahit");


// Type Hinting (Pembatasan Tipe Data)
// kode tidak gampang error karena salah memasukkan jenis data (misal: harusnya angka tapi malah diisi teks), kamu bisa mengunci tipe datanya.

function hitungluasPersegi (int $sisi):int{

    return $sisi * $sisi;
}

echo hitungluasPersegi(100). "<br>";

//kasusss
// Mengaktifkan mode ketat agar tipe data terjaga
declare(strict_types=1);

function cekLulus (string $nama, int $nilai): string{
    if ($nilai >=75){
        return "$nama nilai kamu $nilai, kamu dinyatakan lulus";
    } else {
        return "$nama nilai kamu $nilai, kamu dinyata kan tidak lulus, ayo belajar lagi bodoh";
    }
}

echo cekLulus("pala kau", 60). "<br>";


