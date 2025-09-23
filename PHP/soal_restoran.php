<?php
echo "<h3>Penyelesaian Soal Cerita Persentase Kursi Kosong</h3>";

// Variabel yang Diketahui
$total_kursi = 45;
$kursi_terisi = 28;

// Proses Perhitungan
// 1. Menghitung jumlah kursi yang kosong
$kursi_kosong = $total_kursi - $kursi_terisi;

// 2. Menghitung persentase kursi kosong
$persentase_kosong = ($kursi_kosong / $total_kursi) * 100;

// Menampilkan Hasil
echo "Total kursi di restoran: {$total_kursi} <br>";
echo "Kursi yang telah ditempati: {$kursi_terisi} <br>";
echo "Jumlah kursi yang masih kosong: {$kursi_kosong} <br>";
echo "<hr>";

// Menggunakan fungsi round() untuk membulatkan hasil menjadi 2 angka di belakang koma
echo "<b>Persentase kursi yang masih kosong adalah: " . round($persentase_kosong, 2) . "%</b>";
?>