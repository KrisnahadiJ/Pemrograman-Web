<?php
echo "<h3>Menggunakan For Loop</h3>";
// Kode ini akan mencetak perulangan dari 1 sampai 24
for ($i = 1; $i < 25; $i++) {
    echo "Perulangan ke-{$i} <br>";
}

echo "<hr>";

echo "<h3>Menggunakan Fungsi Rekursif</h3>";
function tampilkanAngka(int $jumlah, int $indeks = 1) {
    echo "Perulangan ke-{$indeks} <br>";

    // Kondisi berhenti (base case)
    if ($indeks < $jumlah) {
        // Panggil diri sendiri dengan indeks yang sudah ditambah 1
        tampilkanAngka($jumlah, $indeks + 1);
    }
}

// Memanggil fungsi rekursif untuk mencetak perulangan dari 1 sampai 20
tampilkanAngka(20);
?>