<?php
// Soal No. 7: Fungsi yang mengembalikan nilai (return)
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

// Soal No. 8: Memanggil fungsi di dalam fungsi lain
function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    
    // Memanggil fungsi hitungUmur() di dalam fungsi perkenalan()
    echo "Saya berusia ". hitungUmur(2005, 2025) ." tahun<br/>";
    // Ganti tahun lahir Anda
    echo "Senang berkenalan dengan Anda<br/>";
}

// Memanggil fungsi perkenalan
perkenalan("Krisnahadi J."); // Ganti dengan nama Anda
?>