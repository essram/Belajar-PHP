<?php 

$nama = $_GET['nama'];
$alamat = $_GET['alamat'];

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <form action="">
        <input type="text" name="nama">
        <input type="text" name="alamat">
        <input type="submit">
    </form>
    <h1>Selamat Datang <?php echo $nama?> </h1>
    <p>Anda tinggal di <?php echo $alamat?></p>
    <p>Selamat belajar pemograman dasar PHP</p>
</body>
</html>