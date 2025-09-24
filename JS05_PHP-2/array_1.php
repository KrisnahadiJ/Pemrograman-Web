<!DOCTYPE html>
<html>
<head>
    <title>Array PHP</title>
</head>
<body>

<h2>Array Terindeks</h2>
    <?php
    $listmhs = ["Krisnahadi", "Farras", "Rifat"];

    // Menampilkan array menggunakan loop foreach untuk hasil yang rapi
    echo "<ol>";
    foreach ($listmhs as $mhs) {
        echo "<li>" . $mhs . "</li>";
    }
    echo "</ol>";
?>
</body>
</html>