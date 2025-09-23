<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

// Menampilkan hasil dengan rapi
echo "Nilai a = {$a} <br>";
echo "Nilai b = {$b} <br>";
echo "<hr>";
echo "Hasil Penjumlahan (a + b) = {$hasilTambah} <br>";
echo "Hasil Pengurangan (a - b) = {$hasilKurang} <br>";
echo "Hasil Perkalian (a * b) = {$hasilKali} <br>";
echo "Hasil Pembagian (a / b) = {$hasilBagi} <br>";
echo "Sisa Bagi (a % b) = {$sisaBagi} <br>";
echo "Hasil Pangkat (a ** b) = {$pangkat} <br>";

// Bagian 2: Operator Perbandingan
echo "<h3>Operator Perbandingan</h3>";
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

// Menampilkan hasil perbandingan
echo "Apakah a == b ? ";
var_dump($hasilSama);
echo "<br>";

echo "Apakah a != b ? ";
var_dump($hasilTidakSama);
echo "<br>";

echo "Apakah a < b ? ";
var_dump($hasilLebihKecil);
echo "<br>";

echo "Apakah a > b ? ";
var_dump($hasilLebihBesar);
echo "<br>";

echo "Apakah a <= b ? ";
var_dump($hasilLebihKecilSama);
echo "<br>";

echo "Apakah a >= b ? ";
var_dump($hasilLebihBesarSama);
echo "<br>";

// Bagian 3: Operator Logika
echo "<h3>Operator Logika</h3>";
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

// Menampilkan hasil logika
echo "Hasil a && b : ";
var_dump($hasilAnd);
echo "<br>";

echo "Hasil a || b : ";
var_dump($hasilOr);
echo "<br>";

echo "Hasil !a : ";
var_dump($hasilNotA);
echo "<br>";

echo "Hasil !b : ";
var_dump($hasilNotB);
echo "<br>";

// Bagian 4: Operator Penugasan
echo "<h3>Operator Penugasan</h3>";
$a = 10;
$b = 5;
echo "Nilai awal a = {$a}, Nilai b = {$b} <br>";
echo "------------------------------------<br>";

$a += $b; // a menjadi 10 + 5 = 15
echo "Setelah a += b, nilai a sekarang: {$a} <br>";

$a -= $b; // a menjadi 15 - 5 = 10
echo "Setelah a -= b, nilai a sekarang: {$a} <br>";

$a *= $b; // a menjadi 10 * 5 = 50
echo "Setelah a *= b, nilai a sekarang: {$a} <br>";

$a /= $b; // a menjadi 50 / 5 = 10
echo "Setelah a /= b, nilai a sekarang: {$a} <br>";

$a %= $b; // a menjadi 10 % 5 = 0
echo "Setelah a %= b, nilai a sekarang: {$a} <br>";

// Bagian 5: Operator Identitas
echo "<h3>Operator Identitas</h3>";
$x = 5;      // Tipe data integer
$y = "5";    // Tipe data string
echo "Nilai x (integer) = 5 <br>";
echo "Nilai y (string) = \"5\" <br>";
echo "------------------------------------<br>";

$hasilIdentik = $x === $y;
$hasilTidakIdentik = $x !== $y;
$hasilSama = $x == $y; // Ini adalah operator perbandingan (==) sebagai pembanding

echo "Apakah x === y (identik)? ";
var_dump($hasilIdentik); // Hasil: false, karena tipe data berbeda
echo "<br>";

echo "Apakah x !== y (tidak identik)? ";
var_dump($hasilTidakIdentik); // Hasil: true, karena tipe data berbeda
echo "<br>";

echo "Sebagai perbandingan, apakah x == y (sama dengan)? ";
var_dump($hasilSama); // Hasil: true, karena nilainya dianggap sama
echo "<br>";
?>