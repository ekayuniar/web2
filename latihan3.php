<?php 
$hewan = [
    [
    "nama" => "Anjing", 
    "kelompok" => "Karnivora", 
    "jenis" => "Vivipar (Mamalia)",
    "gambar" => "anjing.jpg"
    ],

    [
    "nama" => "Gagak", 
    "kelompok" => "Omnivora", 
    "jenis" => "Ovipar (Unggas)",
    "gambar" => "gagak.jpg"
    ],

    [
    "nama" => "Hiu", 
    "kelompok" => "Karnivora", 
    "jenis" => "Ovovivipar (Ikan)",
    "gambar" => "hiu.jpg"
    ],

    [
    "nama" => "Sapi", 
    "kelompok" => "Herbivora", 
    "jenis" => "Vivipar (Mamalia)",
    "gambar" => "sapi.jpg"
    ],

    [
    "nama" => "Ular", 
    "kelompok" => "Karnivora", 
    "jenis" => "Ovipar dan Ovovivipar (Reptil)",
    "gambar" => "ular.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jenis-Jenis Hewan dan Pengelompokannya</title>
</head>
<body>
    <h1>List Nama Hewan</h1>
    <?php foreach ($hewan as $hwn): ?>
    <ul>
        <li>
            <img src="img/<?= $hwn ["gambar"] ;?>">
        </li>
        <li>Nama : <?= $hwn["nama"] ?></li>
        <li>Kelompok : <?= $hwn["kelompok"] ?></li>
        <li>Jenis : <?= $hwn["jenis"] ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>