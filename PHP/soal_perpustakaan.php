<?php
echo "<h3>Perhitungan Persentase Rak Buku Kosong</h3>";

// Variabel yang Diketahui
$total_rak = 120;
$rak_terisi = 85;

// Proses Perhitungan
// 1. Menghitung jumlah rak yang kosong
$rak_kosong = $total_rak - $rak_terisi;

// 2. Menghitung persentase rak kosong
$persentase_kosong = ($rak_kosong / $total_rak) * 100;

// Menampilkan Hasil
echo "Total rak buku di perpustakaan: {$total_rak} <br>";
echo "Rak buku yang sudah terisi: {$rak_terisi} <br>";
echo "Jumlah rak buku yang masih kosong: {$rak_kosong} <br>";
echo "<hr>";

// Menggunakan fungsi round() untuk membulatkan hasil menjadi 2 angka di belakang koma
echo "<b>Persentase rak buku yang masih kosong adalah: "
. round($persentase_kosong, 2) . "%</b>";
?>