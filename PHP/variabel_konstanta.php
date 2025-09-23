<?php
// Bagian pertama: Variabel Angka dan Operasi Aritmatika
$angka1 = 10;
$angka2 = 5;
$hasil = $angka1 + $angka2;
echo "Hasil penjumlahan $angka1 dan $angka2 adalah $hasil.";

echo "<br>"; // Menambahkan baris baru untuk keterbacaan

// Bagian kedua: Variabel Boolean
$benar = true;
$salah = false;
echo "Variabel benar: $benar, Variabel salah: $salah";

echo "<br>"; // Menambahkan baris baru untuk keterbacaan

// Bagian ketiga: Konstanta
// Mendefinisikan konstanta untuk nilai tetap
define("NAMA_SITUS", "WebsiteKu.com");
define("TAHUN_PENDIRIAN", 2023);

echo "Selamat datang di " . NAMA_SITUS . ", situs yang didirikan pada tahun " . TAHUN_PENDIRIAN . ".";
?>