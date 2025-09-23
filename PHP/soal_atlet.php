<?php
echo "<h3>Penentuan Bonus Latihan Atlet</h3>";

//  Skenario 1: Jarak di atas 100 km 
$jarak_tempuh_1 = 125;
$dapat_bonus_1 = ($jarak_tempuh_1 > 100) ? "YA" : "TIDAK";

echo " Atlet 1 <br>";
echo "Total jarak tempuh atlet adalah: {$jarak_tempuh_1} kilometer<br>";
echo "Apakah atlet mendapatkan bonus latihan? ({$dapat_bonus_1})<br>";

echo "<br>";

//  Skenario 2: Jarak di bawah 100 km 
$jarak_tempuh_2 = 98;
$dapat_bonus_2 = ($jarak_tempuh_2 > 100) ? "YA" : "TIDAK";

echo " Atlet 2 <br>";
echo "Total jarak tempuh atlet adalah: {$jarak_tempuh_2} kilometer<br>";
echo "Apakah atlet mendapatkan bonus latihan? ({$dapat_bonus_2})<br>";
?>