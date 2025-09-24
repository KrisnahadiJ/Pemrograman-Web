<?php
// Soal No. 4: Fungsi tanpa parameter
function perkenalanTanpaParameter(){
    echo "Assalamualaikum, ";
    echo "Perkenalkan, nama saya Krisnahadi Jayawardana <br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

// Memanggil fungsi dua kali
perkenalanTanpaParameter();
echo "<hr>";
perkenalanTanpaParameter();
echo "<hr>";

// Soal No. 5: Fungsi dengan parameter
function perkenalan($nama, $salam){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

// Memanggil fungsi dengan parameter
perkenalan("Krisnahadi", "Hello");
echo "<hr>";
$saya = "Jayawardana";
$ucapanSalam = "Selamat pagi";
perkenalan($saya, $ucapanSalam);
echo "<hr>";

// Soal No. 6: Fungsi dengan nilai default
function perkenalan_default($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

// Memanggil fungsi dengan nilai default
perkenalan_default("Krisnahadi J.", "Hello");
echo "<hr>";
$saya = "Jaya";
$ucapanSalam = "Selamat pagi";
// Memanggil lagi tanpa mengisi parameter salam
perkenalan_default($saya);
?>