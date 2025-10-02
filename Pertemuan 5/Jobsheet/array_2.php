<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Array Asosiatif</title>
    <style>
        table {
            border-collapse: collapse;
            width: 300px;
            margin-top: 10px;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
    $Dosen = [
        'Nama' => 'Elok Nur Hamdana',
        'Domisili' => 'Malang',
        'Jenis Kelamin' => 'Perempuan'
    ];
    ?>

    <h2>Data Dosen</h2>
    <table>
        <?php
        foreach ($Dosen as $key => $value) {
            echo "<tr><th>$key</th><td>$value</td></tr>";
        }
        ?>
    </table>
</body>
</html>
