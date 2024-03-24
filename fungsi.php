<?php 

//syarat fungsi
//variabel = namaFungsi(value/parameter)

//fungsi built-in
//Function Built-In adalah fungsi yang sudah disediakan
//oleh PHP. Fungsi ini dapat digunakan oleh PHP dan
//biasanya dapat langsung digunakan

//huruf kapital awal kalimat
$nama1 =  ucwords("ramaaaa");
//huruf kapital semua
$nama2 =  strtoupper("ramaaaa");
//contoh fungsi mengembalikan nilai
$nama3 = ("ramaaa");
echo strtoupper("nama saya");
//contoh fungsi tidak mengembalikan nilai
phpinfo();

//untuk fungsi-fungsi yang mengembalikan nilai 
//seperti ucword , strtoupper, strtolower dsb 
//dibutuhkan echo untuk menampilkan nilai tersebut.
// Sedangkan yang tidak mengembalikan nilai seperti
// phpinfo() tidak membutuhkan echo.


//User defined function (UDF)
//fungsi yang dibuat sendiri oleh pengguna
//Fungsi yang ditentukan pengguna harus 
//diawali kata kunci "Function"

//contoh
function pesan()
{
    echo "selamat datang ramaaaaaaa";
}
pesan(); //untuk memanggil fungsi pesan

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Selamat datang <?php echo $nama1 ?></h1>
    <h1>SELAMAT DATANG <?php echo $nama2 ?></h1>
</body>
</html>