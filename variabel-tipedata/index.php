<?php
// aturan membuat variabel harus menggunakan ikon "$".
// $1salah
// $benar1
// $Mamam dan $mamam (variabel yang berbeda)

$mamam = "kocak 1";
$Mamam = "kocak 2";

echo $mamam . '<br>' . $Mamam . '<br>' . '<br>';


//tipe data ada string, integer, float, bolean

//string/text
$nama ='maimuna'; //text harus menggunakan kutip
echo $nama.'<br>';

//integer/bilangan bulat (1,2,3,4,5,6,7.....)
$umur =12; //angka tidak permu menggunakan kutip, kalau angkanya di kutip maka terbaca data bertipe string
echo "usia : $umur".'<br>';

//float/bilangan beranak (1.5, 2.5, 3.5, 4.5, dan seterusnya....)
$beratBadan =45.23;
echo "berat badan : $beratBadan" . '<br>';

//bolean (benar dan salah / TRUE & FALSE)
$statusMenikah= FALSE;
$sudahMakan = TRUE;

echo $nama . "belum menikah: $statusMenikah" . '<br>' . "$nama sudah makan ; $sudahMakan";