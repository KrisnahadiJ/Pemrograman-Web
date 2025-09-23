<?php
echo "<h3>Perhitungan Diskon Belanja</h3>";

// Variabel yang Diketahui
$total_pembelian =  250000;
$batas_diskon = 200000;
$persentase_diskon = 15; // dalam persen

// Proses Perhitungan
echo "Total Pembelian: Rp " . number_format($total_pembelian) . "<br>";

// Cek apakah pembelian memenuhi syarat untuk diskon
if ($total_pembelian > $batas_diskon) {
    // Hitung jumlah diskon
    $jumlah_diskon = ($persentase_diskon / 100) * $total_pembelian;
    
    // Hitung harga akhir
    $harga_akhir = $total_pembelian - $jumlah_diskon;
    
    echo "Anda mendapatkan diskon sebesar {$persentase_diskon}% (Rp " . number_format($jumlah_diskon) . ")<br>";
    echo "<hr>";
    echo "<b>Harga yang harus dibayar adalah: Rp " . number_format($harga_akhir) . "</b>";

} else {
    // Jika tidak ada diskon
    echo "Anda tidak mendapatkan diskon.<br>";
    echo "<hr>";
    echo "<b>Harga yang harus dibayar adalah: Rp " . number_format($total_pembelian) . "</b>";
}
?>