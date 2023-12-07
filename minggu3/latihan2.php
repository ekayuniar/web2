<?php
// cek apakah $_Get terdapat data?
if (isset($_GET["nama"])) {
    //redirect
    header("Location: latihan1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Pengelompokan Hewan</title>
</head>

<body>
    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>"></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["kelompok"]; ?></li>
        <li><?= $_GET["jenis"]; ?></li>
    </ul>

    <a href="latihan1.php">Kembali ke halaman sebelumnya</a>
</body>

</html>