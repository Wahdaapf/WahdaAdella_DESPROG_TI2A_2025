<?php
$nilaiNumerik = 92;
if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;
while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";


$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;
for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";


$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;
foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}
echo "Total skor ujian adalah: $totalSkor";


$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}


$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilaiSiswa);
$nilaiTengah = array_slice($nilaiSiswa, 2, count($nilaiSiswa) - 4);
$totalNilai = array_sum($nilaiTengah);
$rataRata = $totalNilai / count($nilaiTengah);
echo "<br><br>Total nilai setelah buang 2 tertinggi & 2 terendah: $totalNilai <br>";
echo "Rata-rata nilai: $rataRata";

echo "<br><br>";

$harga = 120000;
if ($harga > 100000) {
    $diskon = 0.20 * $harga;
} else {
    $diskon = 0;
}
$hargaBayar = $harga - $diskon;
echo "Harga awal: Rp " . number_format($harga, 0, ',', '.') . "<br>";
echo "Diskon: Rp " . number_format($diskon, 0, ',', '.') . "<br>";
echo "Harga yang harus dibayar: Rp " . number_format($hargaBayar, 0, ',', '.');

echo "<br><br>";

$skor = 550;
echo "Total skor pemain adalah: $skor<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? " . ($skor > 500 ? "YA" : "TIDAK");
?>
