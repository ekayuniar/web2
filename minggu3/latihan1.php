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
    <title>Latihan GET</title>
</head>

<body>
    <h1>Daftar Hewan</h1>
    <ul>
        <?php foreach ($hewan as $h) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $h["nama"]; ?>&kelompok= <?= $h["kelompok"]; ?>&jenis= <?= $h["jenis"]; ?>&gambar=<?= $h["gambar"]; ?> "><?= $h["nama"]; ?></a>
            </li>

        <?php endforeach; ?>
    </ul>
</body>

</html>