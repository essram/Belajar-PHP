<?php
$nama1 = "Rama";
$alamat = "Sidoarjo";

//menyisipkan kode HTML dalam php
$nama2 = "<h2>Esa</h2>";
$umur = '<h3>16</h3>';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Selamat datang <?php echo $nama1 ?></h1>
    <h2> Alamat : <?php echo $alamat ?></h2>
    <p>ini adalah paragraf pertama saya di dokumen HTML yang berisi kode PHP.</p>

    <h2>Selamat datang</h2>
    <?php echo $nama2 ?>
    <h3>Umur : <?php echo $umur ?></h3> 




</body>
</html>