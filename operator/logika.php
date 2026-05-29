<?php
//logika
// Simbol,  Nama,       Cara Kerja (Logika Sederhana)
// &&,      AND (Dan),  Akan true JIKA KEDUANYA true. (Ibarat syarat mutlak).
// ||,      OR (Atau),  Akan true JIKA SALAH SATU saja true. (Ibarat jalur alternatif).
// !,       NOT (Bukan),"Membalikkan fakta. Jika true diubah jadi false, dan sebaliknya."


//AND, &&
// ==========================================
// KASUS 1: LOGIN SISTEM (Menggunakan && - AND)
// ==========================================
$username="koak";
$pass="ucup";
//syarat login
$cekLogin = ($username=="kocak") && ($pass="ucup");
//cek login
if ($cekLogin) {
    echo "Status: Login Berhasil! Selamat datang.\n";
} else {
    echo "Status: Login Gagal! Cek kembali username/password.\n";
}
echo "<br>";

//OR, ||
// ==========================================
// KASUS 2: DISKON BELANJA (Menggunakan || - OR)
// ==========================================

$kartuMember = true;
$totalBelanja = 50000;

$cekDiskon = ($kartuMember==true) || ($totalBelanja > 100000);

if ($cekDiskon) {
    echo "kamu mendapatkan diskon.\n";
} else {
    echo "belanja lagi untuk mendapatkan diskon.\n";
}
echo "<br>";


// EXCLUSIVE OR, xor (tidak boleh memilih keduanya)
// ==========================================
// KASUS 3: MENU PAKET MAKAN (Menggunakan xor - EXCLUSIVE OR)
// ==========================================

$keinginan1 = false;
$keinginan2 = true;

$memilih = $keinginan1 xor $keinginan2;

if ($memilih) {
    echo "kamu tidak boleh memilih lebih dari 1.\n";
} else {
    echo "kamu mendapatkan nya.\n";
}
echo "<br>";

// ==========================================
// KASUS 4: SISTEM BLOKIR (Menggunakan ! - NOT)
// ==========================================
echo "=== KASUS: CEK STATUS AKUN ===\n";
$akunDiblokir = false;
echo "<br>";

if (!$akunDiblokir) {
    echo "akun kamu tidak di blokir.\n";
    
} else {
    echo "akun kamu di blokir\n";
}
echo "<br>";




