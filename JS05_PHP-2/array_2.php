<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <style>
        /* Internal CSS untuk styling tabel */
        table {
            width: 50%;
            border-collapse: collapse;
            margin-top: 20px;
            font-family: sans-serif;
        }
        th, td {
            border: 1px solid #000000ff;
            text-align: left;
            padding: 12px;
        }
        th {
            background-color: #4afff9ff;
            font-weight: bold;
        }
        /* Memberi warna latar berbeda untuk baris genap */
        tr:nth-child(even) {
            background-color: #2e62fcff;
        }
    </style>
</head>
<body>
    <h2>Data Mahasiswa</h2>

    <?php
    // Array asosiatif baru dengan data mahasiswa yang diminta
    $mahasiswa = [
        'Nama' => 'Krisnahadi',
        'NIM' => '244107060001',
        'Jurusan' => 'Teknologi Informasi',
        'Angkatan' => 2023
    ];
    ?>

    <table>
        <tr>
            <th>Informasi</th>
            <th>Data</th>
        </tr>
        <?php
        // Loop untuk membuat baris tabel secara dinamis
        foreach ($mahasiswa as $key => $value) {
            echo "<tr>";
            echo "<td>" . $key . "</td>";
            echo "<td>" . $value . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>