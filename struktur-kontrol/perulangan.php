<?php
// PERULANGAN (Looping)
// 1. for (Perulangan yang Jumlahnya Pasti)
// 2. while (Selama Kondisi Benar, Sikat Terus!)
// 3. do-while (Tabrak Dulu, Baru Tanya)

// PERULANGAN FOR
// Mulai dari 1 ($i = 1); Ulangi selama kurang dari atau sama dengan 5 ($i <= 5); Setiap selesai, tambah 1 ($i++)
for ($i = 1; $i <= 5; $i++) {
    echo "Ini perulangan ke-$i <br>";
}


//PERULANGAN FOR
$langkah= 5;

while($langkah>0){
    echo "mundur $langkah langkah <br>";
    $langkah--;

}

//PERULANGAN DO
$bensin = 0;
do {
    echo "mobil di paksa jalan 1 meter <br>";
} while ($bensin>0);


echo "<br>";
echo "<br>";
echo "<br>";

for ($b=1; $b<=15; $b++){
    if ($b % 3 == 0 && $b % 5 == 0){
        echo "FIZZ dan BUZS <br>";
    } elseif ($b % 3 == 0){
        echo "FIZZ <br>";
    } elseif ($b % 5 == 0){
        echo "BUZZ <br>";
    } else {
        echo $b . "<br>";
    }
}