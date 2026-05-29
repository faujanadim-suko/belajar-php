<?php
// if, elseif, dan else


// if (Jika): Kondisi pertama yang dicek.

// elseif (Atau Jika): Jalur alternatif kalau kondisi pertama salah.

// else (Selain itu / Pilihan Terakhir): Kalau semua kondisi di atas salah, jalur ini yang pasti dilewati.

$nilai=75;
if ($nilai>=85){
    echo "nilai kamu A";
} elseif ($nilai>=75){
    echo "nilai kamu B";
} elseif ($nilai>=65){
    echo "nilai kamu C";
} elseif ($nilai>=55){
    echo "nilai kamu D";
} else {
    echo "kamu sangat bodoh, kamu tidak LULUS";
}
//output B


//  switch-case
// switch-case digunakan kalau kamu mau mengecek satu variabel yang punya banyak pilihan nilai yang pasti/spesifik. Tampilannya lebih rapi dibanding if yang bercabang terlalu banyak.

// Contoh Kasus: Lampu Lalu Lintas

$lampu = "";

switch ($lampu){
    case "merah":
        echo "berhenti, jwangan lanjut";
        break; //break untuh mencegah mengeksekusi case di bawahnya
    case "hijau":
        echo "maju, maju, maju";
        break;
    case "kuning":
        echo "bersediaaa, siap.....";
        break;
    default:
        echo "berhenti";

} //hasil default/ "berhenti"