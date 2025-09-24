<?php
$a=10;
$b=5;

$hasilTambah=$a+$b;
$hasilKurang=$a-$b;
$hasilKali=$a*$b;
$hasilBagi=$a/$b;
$sisaBagi=$a%$b;
$pangkat=$a**$b;

echo "Nilai a = {$a} <br>";
echo "Nilai b = {$b} <br><br>";

echo "Hasil Penjumlahan: {$hasilTambah} <br>";
echo "Hasil Pengurangan: {$hasilKurang} <br>";
echo "Hasil Perkalian: {$hasilKali} <br>";
echo "Hasil Pembagian: {$hasilBagi} <br>";
echo "Sisa Bagi: {$sisaBagi} <br>";
echo "Pangkat: {$pangkat} <br><br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Apakah a sama dengan b? ";
var_dump($hasilSama);
echo "<br>";
echo "Apakah a tidak sama dengan b? ";
var_dump($hasilTidakSama);
echo "<br>";
echo "Apakah a lebih kecil dari b? ";
var_dump($hasilLebihKecil);
echo "<br>";
echo "Apakah a lebih besar dari b? ";
var_dump($hasilLebihBesar);
echo "<br>";
echo "Apakah a lebih kecil atau sama dengan b? ";
var_dump($hasilLebihKecilSama);
echo "<br>";
echo "Apakah a lebih besar atau sama dengan b? ";
var_dump($hasilLebihBesarSama);

echo "<br><br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil AND: ";
var_dump($hasilAnd);
echo "<br>";
echo "Hasil OR: ";
var_dump($hasilOr);
echo "<br>";
echo "Hasil NOT A: ";
var_dump($hasilNotA);
echo "<br>";
echo "Hasil NOT B: ";
var_dump($hasilNotB);
echo "<br>";

echo "<br>Operator Penugasan: <br>";
$a += $b;
echo "a += b = {$a} <br>";
$a -= $b;
echo "a -= b = {$a} <br>";
$a *= $b;
echo "a *= b = {$a} <br>";
$a /= $b;
echo "a /= b = {$a} <br>";
$a %= $b;
echo "a %= b = {$a} <br><br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Apakah a identik dengan b? "; var_dump($hasilIdentik); echo "<br>";
echo "Apakah a tidak identik dengan b? "; var_dump($hasilTidakIdentik); echo "<br><br>";

$totalKursi = 45;
$kursiTerisi = 28;
$kursiKosong = $totalKursi - $kursiTerisi;
$persenKosong = ($kursiKosong / $totalKursi) * 100;

echo "Total kursi: {$totalKursi} <br>";
echo "Kursi terisi: {$kursiTerisi} <br>";
echo "Kursi kosong: {$kursiKosong} <br>";
echo "Persentase kursi kosong: {$persenKosong}% <br>";

?>