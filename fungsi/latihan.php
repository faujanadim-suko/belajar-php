<?php

declare(strict_types=1);

// ========================================================
// 1. FUNGSI UTAMA (Mesin Penghitung Diskon)
// ========================================================
function hitungPotonganHarga(int $total_belanja, bool $is_member): float {
    // Kombinasi OPERATOR LOGIKA & PERCABANGAN
    if ($total_belanja >= 200000 && $is_member === true) {
        return $total_belanja * 0.15; // Diskon 15% untuk member setia yang belanja banyak
    } elseif ($total_belanja >= 100000 || $is_member === true) {
        return $total_belanja * 0.05; // Diskon 5% jika belanja cukup banyak ATAU dia member
    }
    return 0.0; // Tidak dapat diskon jika tidak memenuhi syarat
}

// ========================================================
// 2. FUNGSI DEKORASI (Mesin Perulangan Pembuat Garis Struk)
// ========================================================
function cetakGarisPembatas(int $panjang_garis): void {
    // Menggunakan PERULANGAN untuk mencetak karakter "=" otomatis
    for ($i = 1; $i <= $panjang_garis; $i++) {
        echo "=";
    }
    echo "<br>"; // Pindah baris baru
}

// ========================================================
// 3. PROGRAM UTAMA (Simulasi Transaksi)
// ========================================================

// Input Data Menggunakan VARIABEL & TIPE DATA
$nama_pelanggan = "Rian";
$nama_barang    = "Sepatu Running Sport";
$harga_satuan   = 120000; 
$jumlah_beli    = 2;      
$apakah_member  = true;   

// Proses Perhitungan Menggunakan OPERATOR ARITMATIKA
$total_awal     = $harga_satuan * $jumlah_beli;
$potongan       = hitungPotonganHarga($total_awal, $apakah_member);
$total_akhir    = $total_awal - $potongan;

// ========================================================
// 4. OUTPUT (Mencetak Struk Belanja ke Layar)
// ========================================================
cetakGarisPembatas(35);
echo "         TOKO MAJU JAYA          <br>";
cetakGarisPembatas(35);

echo "Pelanggan : $nama_pelanggan<br>";
echo "Barang    : $nama_barang<br>";
echo "Jumlah    : $jumlah_beli pcs (Rp $harga_satuan/pcs)<br>";

cetakGarisPembatas(35);
echo "Total Kotor : Rp $total_awal<br>";
echo "Diskon      : Rp $potongan<br>";
cetakGarisPembatas(35);
echo "TOTAL BAYAR : Rp $total_akhir<br>";
cetakGarisPembatas(35);
echo "    Terima Kasih Telah Belanja!   <br>";
cetakGarisPembatas(35);

?>