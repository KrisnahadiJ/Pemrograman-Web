<?php
echo "<h3>Daftar Siswa dengan Nilai di Atas Rata-rata</h3>";

// Data Awal (Array Dua Dimensi)
$dataSiswa = [
    ['Andi', 75],
    ['Budi', 88],
    ['Citra', 95],
    ['Dinda', 70],
    ['Farhan', 82],
];

// Proses Perhitungan Rata-rata
$totalNilai = 0;
// Menjumlahkan semua nilai siswa
foreach ($dataSiswa as $siswa) {
    $totalNilai += $siswa[1]; // Menambahkan nilai (indeks ke-1)
}

// Menghitung jumlah siswa
$jumlahSiswa = count($dataSiswa);

// Menghitung nilai rata-rata
$rataRata = $totalNilai / $jumlahSiswa;

echo "Nilai rata-rata kelas adalah: <b>" . round($rataRata, 2) . "</b><br>";
echo "<hr>";

// Proses Pencarian Siswa di Atas Rata-rata
echo "<b>Daftar siswa dengan nilai di atas rata-rata:</b><br>";
foreach ($dataSiswa as $siswa) {
    // Memeriksa apakah nilai siswa lebih besar dari rata-rata
    if ($siswa[1] > $rataRata) {
        echo "Nama: {$siswa[0]}, Nilai: {$siswa[1]} <br>";
    }
}
?>