<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugasmita</title>
    <style>
        table {
            border: 1px solid black;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Daftar Nilai Mahasiwa</h1>
    <?php
    $mahasiswa = array(
        array("npm" => "001", "nama" => "Chayra", "nilai" => 85),
        array("npm" => "002", "nama" => "Archelia", "nilai" => 72),
        array("npm" => "003", "nama" => "Lalan", "nilai" => 50),
        array("npm" => "004", "nama" => "Fuji", "nilai" => 68),
    );
    ?>

    <table>
        <tr>
            <th>No</th>
            <th>NPM</th>
            <th>Nama</th>
            <th>Nilai</th>
            <th>Keterangan</th>
        </tr>
        <?php foreach ($mahasiswa as $key => $mhs): ?>
        <tr>
            <th scope="row"><?= $key+1; ?></th>
            <td><?php echo $mhs['npm']; ?></td>
            <td><?php echo $mhs['nama']; ?></td>
            <td><?php echo $mhs['nilai']; ?></td>
            <td>
                <?php 
                    if ($mhs['nilai'] <= 50) {
                        echo "Tidak lulus";
                    } else {
                        echo "Lulus";
                    }
                ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>