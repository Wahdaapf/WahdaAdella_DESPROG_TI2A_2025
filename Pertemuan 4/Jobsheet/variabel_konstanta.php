<?php
$angka1=10;
$angka2=5;
$hasil=$angka1+$angka2;
echo "Hasil Penjumlahan $angka1 dan $angka2 adalah $hasil <br>";

$benar=true;
$salah=false;
echo "Variabel benar: $benar Variable salah: $salah <br>";

define("Nama_situs", "WebsiteKu.com");
define("Tahun_pendirian", 2023);
echo "Selamat datang di " . Nama_situs . ", Situs yang didirikan pada tahun " . Tahun_pendirian . ".";
?>